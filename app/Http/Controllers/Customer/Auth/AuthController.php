<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\Auth\LoginRequest;
use App\Http\Requests\Customer\Auth\RegisterRequest;
use App\Models\Customer;
use App\Notifications\Customer\SendOtpNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(RegisterRequest $request): JsonResponse
    {
        try {
            $validated = $request->validated();

            $customer = Customer::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'phone' => $validated['phone'] ?? null,
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
                'message' => 'Registration successful. Please verify your email.',
                'data' => [
                    'email' => $customer->email,
                ],
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            Log::error('Customer registration error: '.$e->getMessage());

            return response()->json([
                'message' => 'An error occurred during registration.',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function login(LoginRequest $request): JsonResponse
    {
        try {
            $credentials = $request->only('email', 'password');
            $remember = $request->boolean('remember');

            if (! Auth::guard('customer')->attempt($credentials, $remember)) {
                throw ValidationException::withMessages([
                    'email' => [trans('auth.failed')],
                ]);
            }

            $customer = Auth::guard('customer')->user();

            if (! $customer->is_active) {
                Auth::guard('customer')->logout();
                throw ValidationException::withMessages([
                    'email' => [trans('auth.inactive')],
                ]);
            }

            $customer->logLoginAttempt($request->ip());

            $request->session()->regenerate();

            return response()->json([
                'message' => 'Login successful',
                'data' => [
                    'customer' => $customer->only(['id', 'name', 'email', 'phone']),
                ],
            ]);

        } catch (ValidationException $e) {
            throw $e;
        } catch (\Exception $e) {
            Log::error('Customer login error: '.$e->getMessage());

            return response()->json([
                'message' => 'An error occurred during login.',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function logout(Request $request): JsonResponse
    {
        try {
            Auth::guard('customer')->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return response()->json([
                'message' => 'Logout successful',
            ]);

        } catch (\Exception $e) {
            Log::error('Customer logout error: '.$e->getMessage());

            return response()->json([
                'message' => 'An error occurred during logout.',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function verifyOtp(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|email|exists:customers,email',
            'otp' => 'required|string|size:6',
        ]);

        $customer = Customer::where('email', $request->email)
            ->where('otp', $request->otp)
            ->where('otp_expires_at', '>', now())
            ->first();

        if (! $customer) {
            return response()->json([
                'message' => 'Invalid or expired OTP',
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $customer->update([
            'otp' => null,
            'otp_expires_at' => null,
            'email_verified_at' => now(),
        ]);

        return response()->json([
            'message' => 'OTP verified successfully',
        ]);
    }

    protected function generateOtp(): string
    {
        return (string) rand(100000, 999999);
    }
}
