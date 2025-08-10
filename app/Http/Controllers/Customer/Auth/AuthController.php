<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Models\Customer;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\Customer\Auth\LoginRequest;
use App\Notifications\Customer\SendOtpNotification;
use App\Http\Requests\Customer\Auth\RegisterRequest;

class AuthController extends Controller
{
    public function showRegistrationForm(): View
    {
        return view('customer.auth.login');
    }

    public function register(RegisterRequest $request): JsonResponse|RedirectResponse
    {
        try {
            $validated = $request->validated();

            $customer = Customer::create([
                'first_name' => $validated['firstName'],
                'last_name' => $validated['lastName'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'password' => Hash::make($validated['password']),
                'address' => $validated['address'],
                'country' => $validated['country'],
                'agree_terms' => $validated['agreeTerms'],
                'subscribe_newsletter' => $validated['subscribeNewsletter'] ?? false,
                'email_verified_at' => null,
                'is_active' => true,
            ]);

            // Generate OTP
            $otp = $this->generateOtp();
            $customer->update([
                'otp' => $otp,
                'otp_expires_at' => Carbon::now()->addMinutes(config('auth.otp_expiry')),
            ]);

            // Send OTP notification
            $customer->notify(new SendOtpNotification($otp));

            event(new Registered($customer));

            return response()->json([
                'status' => 'success',
                'message' => 'Registration successful. Please verify your email.',
                'email' => $customer->email,
            ], 201);

            // return redirect()->route('customer.verify.otp.form')
            //     ->with('email', $customer->email)
            //     ->with('status', 'Registration successful. Please verify your email.');

        } catch (\Exception $e) {
            Log::error('Customer registration error: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred during registration.'. $e->getMessage(),
            ], 500);
            // return back()->with('error', 'An error occurred during registration.');
        }
    }

    public function showLoginForm(): View
    {
        return view('customer.auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse|JsonResponse
    {
        try {
            $credentials = $request->only('email', 'password');
            $remember = $request->boolean('remember');

            if (!Auth::guard('customer')->attempt($credentials, $remember)) {
                throw ValidationException::withMessages([
                    'email' => [trans('auth.failed')],
                ]);
            }

            $customer = Auth::guard('customer')->user();

            if (!$customer->is_active) {
                Auth::guard('customer')->logout();
                throw ValidationException::withMessages([
                    'email' => [trans('auth.inactive')],
                ]);
            }

            $customer->logLoginAttempt($request->ip());

            $request->session()->regenerate();

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Login successful.',
                    'redirect' => route('customer.dashboard'),
                ]);
            }

            return redirect()->intended(route('customer.dashboard'));

        } catch (ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Validation failed.',
                    'errors' => $e->errors(),
                ], 422);
            }
            return back()->withErrors($e->errors());
        } catch (\Exception $e) {
            Log::error('Customer login error: ' . $e->getMessage());
            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'An unexpected error occurred. Please try again.',
                ], 500);
            }
            return back()->with('error', 'An error occurred during login.');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        try {
            Auth::guard('customer')->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('customer.login');
        } catch (\Exception $e) {
            Log::error('Customer logout error: ' . $e->getMessage());
            return back()->with('error', 'An error occurred during logout.');
        }
    }

    public function showOtpVerificationForm(): View
    {
        return view('customer.auth.verify-otp', [
            'email' => session('email')
        ]);
    }

    public function verifyOtp(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:customers,email',
            'otp' => 'required|string|size:6',
        ]);

        $customer = Customer::where('email', $validated['email'])
            ->where('otp', $validated['otp'])
            ->where('otp_expires_at', '>', now())
            ->first();

        if (!$customer) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP']);
        }

        $customer->update([
            'otp' => null,
            'otp_expires_at' => null,
            'email_verified_at' => now(),
        ]);

        Auth::guard('customer')->login($customer);

        return redirect()->route('customer.dashboard')
            ->with('status', 'OTP verified successfully');
    }

    public function resendOtp(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:customers,email',
        ]);

        $customer = Customer::where('email', $validated['email'])->first();

        $otp = $this->generateOtp();
        $customer->update([
            'otp' => $otp,
            'otp_expires_at' => Carbon::now()->addMinutes(config('auth.otp_expiry')),
        ]);

        $customer->notify(new SendOtpNotification($otp));

        return back()->with('status', 'A new OTP has been sent to your email.');
    }

    protected function generateOtp(): string
    {
        return (string) rand(100000, 999999);
    }
}
