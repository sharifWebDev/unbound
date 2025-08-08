<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\User;
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
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Validation\ValidationException;
use App\Notifications\Admin\SendOtpNotification;
use App\Http\Requests\Admin\Auth\RegisterRequest;

class AuthController extends Controller
{
    public function showRegistrationForm(): View
    {
        return view('admin.auth.login');
    }

    public function register(RegisterRequest $request): JsonResponse|RedirectResponse
    {
        try {
            $validated = $request->validated();

            $fullName = trim($validated['firstName'] . ' ' . $validated['lastName']);

            $user = User::create([
                'name' => $fullName,
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'address' => $validated['address'],
                'country' => $validated['country'],
                'password' => Hash::make($validated['password']),
                'role' => 'admin',
                'is_active' => true,
                'subscribe_newsletter' => $validated['subscribeNewsletter'],
                'ip_address' => $validated['ip_address'],
            ]);

            // Generate OTP
            $otp = $this->generateOtp();
            $user->update([
                'otp' => $otp,
                'otp_expires_at' => Carbon::now()->addMinutes(config('auth.otp_expiry', 10)),
            ]);

            // Send OTP notification
            $user->notify(new SendOtpNotification($otp));

            event(new Registered($user));

            return response()->json([
                'status' => 'success',
                'message' => 'Registration successful. Please verify your email.',
                'email' => $user->email,
            ], 201);

            // return redirect()->route('admin.verify.otp.form')
            //     ->with('email', $user->email)
            //     ->with('status', 'Registration successful. Please verify your email.');
        } catch (\Exception $e) {
            Log::error('Admin registration error: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred during registration.',
            ], 500);
        }
    }

    public function showLoginForm(): View
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        try {
            $credentials = $request->only('email', 'password');
            $remember = $request->boolean('remember');

            if (!Auth::guard('admin')->attempt($credentials, $remember)) {
                throw ValidationException::withMessages([
                    'email' => [trans('auth.failed')],
                ]);
            }

            $user = Auth::guard('admin')->user();

            if (!$user->is_active) {
                Auth::guard('admin')->logout();
                throw ValidationException::withMessages([
                    'email' => [trans('auth.inactive')],
                ]);
            }

            if (!$user->hasAnyRole(['super_admin', 'admin'])) {
                Auth::guard('admin')->logout();
                throw ValidationException::withMessages([
                    'email' => [trans('auth.unauthorized')],
                ]);
            }

            // Optional: Log login attempt
            if (method_exists($user, 'logLoginAttempt')) {
                $user->logLoginAttempt($request->ip());
            }

            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors());
        } catch (\Exception $e) {
            Log::error('Admin login error: ' . $e->getMessage());
            return back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }


    public function logout(Request $request): RedirectResponse
    {
        try {
            Auth::guard('admin')->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('admin.login');
        } catch (\Exception $e) {
            Log::error('Admin logout error: ' . $e->getMessage());
            return back()->with('error', 'An error occurred during logout.');
        }
    }

    public function showOtpVerificationForm(): View
    {
        return view('admin.auth.verify-otp', [
            'email' => session('email')
        ]);
    }

    public function verifyOtp(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:users,email',
            'otp' => 'required|string|size:6',
        ]);

        $user = User::where('email', $validated['email'])
            ->where('otp', $validated['otp'])
            ->where('otp_expires_at', '>', now())
            ->first();

        if (!$user) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP']);
        }

        $user->update([
            'otp' => null,
            'otp_expires_at' => null,
            'email_verified_at' => now(),
        ]);

        Auth::guard('admin')->login($user);

        return redirect()->route('admin.dashboard')
            ->with('status', 'OTP verified successfully');
    }

    public function resendOtp(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $validated['email'])->first();

        $otp = $this->generateOtp();
        $user->update([
            'otp' => $otp,
            'otp_expires_at' => Carbon::now()->addMinutes(config('auth.otp_expiry')),
        ]);

        $user->notify(new SendOtpNotification($otp));

        return back()->with('status', 'A new OTP has been sent to your email.');
    }

    protected function generateOtp(): string
    {
        return (string) rand(100000, 999999);
    }
}
