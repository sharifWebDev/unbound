<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\User;
use App\Models\Country;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Validation\ValidationException;
use App\Notifications\Admin\SendOtpNotification;
use App\Http\Requests\Admin\Auth\RegisterRequest;
use App\Notifications\Admin\VerifyEmailNotification;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Notifications\Admin\ResetPasswordNotification;

class AuthController extends Controller
{
    public function showRegistrationForm(): View
    {
        $countries = Country::select('id', 'name', 'code')->get();

        return view('admin.auth.login', compact('countries'));
    }

    public function register(RegisterRequest $request): JsonResponse|RedirectResponse
    {
        try {
            $validated = $request->validated();

            $user = User::create([
                'first_name' => $validated['firstName'],
                'last_name' => $validated['lastName'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'password' => Hash::make($validated['password']),
                'role' => 'admin',
                'address' => $validated['address'],
                'country' => $validated['country'],
                'agree_terms' => $validated['agreeTerms'] ?? false,
                'subscribe_newsletter' => $validated['subscribeNewsletter'] ?? false,
                'email_verified_at' => null,
                'is_active' => true,
            ]);

            $verificationUrl = URL::temporarySignedRoute(
                'admin.verification.verify',
                now()->addMinutes(config('auth.verification.expire', 60)),
                [
                    'id' => $user->getKey(),
                    'hash' => sha1($user->getEmailForVerification()),
                ]
            );

            $user->notify(new VerifyEmailNotification($verificationUrl));

            event(new Registered($user));

            return response()->json([
                'success' => true,
                'message' => 'Registration successful. Please verify your email.',
                'email' => $user->email,
            ], 201);
        } catch (\Exception $e) {
            Log::error('registration error: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred during registration.' . $e->getMessage(),
            ], 500);
        }
    }

    public function showLoginForm(): View
    {
        $countries = Country::select('id', 'name', 'code')->get();

        return view('admin.auth.login', compact('countries'));
    }

    public function login(LoginRequest $request): RedirectResponse|JsonResponse
    {
        try {
            $credentials = $request->only('email', 'password');
            $remember = $request->boolean('remember');

            if (! Auth::guard('web')->attempt($credentials, $remember)) {
                throw ValidationException::withMessages([
                    'email' => [trans('auth.failed')],
                ]);
            }

            $user = Auth::guard('web')->user();

            if (! $user->is_active) {
                Auth::guard('web')->logout();
                throw ValidationException::withMessages([
                    'email' => [trans('auth.inactive')],
                ]);
            }

            if (! $user->hasAnyRole(['super_admin', 'admin', 'tour_guide'])) {
                Auth::guard('web')->logout();
                throw ValidationException::withMessages([
                    'email' => [trans('auth.unauthorized')],
                ]);
            }

            if (method_exists($user, 'logLoginAttempt')) {
                $user->logLoginAttempt($request->ip());
            }

            $request->session()->regenerate();

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Login successful.',
                    'redirect' => route('admin.dashboard'),
                ]);
            }

            return redirect()->intended(route('admin.dashboard'));
        } catch (ValidationException $e) {
            info('Admin login validation error: ', [$e]);
            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Validation failed.',
                    'errors' => $e->errors(),
                ], 422);
            }

            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Admin login error: ' . $e->getMessage());
            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'An unexpected error occurred. Please try again.',
                ], 500);
            }

            return back()->with('error', 'An unexpected error occurred. Please try again.')->withInput();
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        try {
            Auth::guard('web')->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('admin.login');
        } catch (\Exception $e) {
            Log::error('Admin logout error: ' . $e->getMessage());

            return back()->with('error', 'An error occurred during logout.');
        }
    }


    public function verify(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);

            if (! URL::hasValidSignature($request)) {

                if ($request->expectsJson()) {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Invalid verification link or link has expired.',
                    ], 403);
                }

                return redirect()->route('admin.login')
                    ->with('error', 'Invalid verification link or link has expired.');
            }

            if ($user->hasVerifiedEmail()) {
                Auth::guard('User')->login($user);

                if ($request->expectsJson()) {
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Email already verified.',
                        'redirect' => route('admin.dashboard'),
                    ]);
                }

                return redirect()->route('admin.dashboard')
                    ->with('info', 'Your email is already verified.');
            }

            if ($user->markEmailAsVerified()) {
                event(new Verified($user));

                Auth::guard('User')->login($user);
                $user->logLoginAttempt($request->ip());
                $request->session()->regenerate();

                if ($request->expectsJson()) {
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Email verified successfully!',
                        'redirect' => route('admin.dashboard'),
                    ]);
                }

                return redirect()->intended(route('admin.dashboard'))
                    ->with('success', 'Email verified successfully!');
            }

            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Email verification failed.',
                ], 400);
            }

            return redirect()->route('admin.login')
                ->with('error', 'Email verification failed. Please try again.');
        } catch (ModelNotFoundException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'User not found.',
                ], 404);
            }

            return redirect()->route('admin.login')
                ->with('error', 'User not found.');
        } catch (\Exception $e) {
            Log::error('Email verification error: ' . $e->getMessage());

            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'An error occurred during verification.',
                ], 500);
            }

            return redirect()->route('admin.login')
                ->with('error', 'An error occurred during verification. Please try again.');
        }
    }

    public function resend(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return response()->json([
                'status' => 'error',
                'success' => false,
                'message' => 'User not found.',
            ]);
        }

        if ($user->hasVerifiedEmail()) {
            return response()->json([
                'status' => 'error',
                'success' => false,
                'message' => 'Email already verified.',
                'redirect' => route('admin.dashboard'),
            ]);
        }

        $user->sendEmailVerificationNotification();

        return response()->json([
            'status' => 'success',
            'success' => true,
            'message' => 'Verification email sent successfully.',
        ]);
    }

    public function sendResetPasswordLink(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'success' => false,
                'message' => $validator->errors()->first(),
            ]);
        }

        try {
            $user = User::where('email', $request->email)->first();

            $temporaryUrl = URL::temporarySignedRoute(
                'verify.reset.password',
                now()->addMinutes(20),
                ['id' => $user->id, 'email' => $user->email, 'name' => $user->full_name]
            );

            $user->notify(new ResetPasswordNotification($temporaryUrl, $user));

            return response()->json([
                'status' => 'success',
                'success' => true,
                'message' => 'A Password reset link sent to your email successfully.',
            ], 200);
        } catch (\Exception $e) {
            Log::error('Failed to send password reset link: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function verifyResetPassword(Request $request)
    {
        if (! $request->hasValidSignature()) {
            return redirect()->route('admin.login')
                ->with('error', 'This password reset link is invalid or expired.');
        }

        $user = User::where('email', $request->email)->first();
        if (! $user) {
            return redirect()->route('admin.login')
                ->with('error', 'Invalid password reset request.');
        }

        if (! $user->is_active) {
            return redirect()->route('admin.login')
                ->with('error', 'Your account is inactive. Please contact support.');
        }

        return view('admin.auth.reset-password', ['userId' => $user->id]);
    }

    public function resetPassword(Request $request)
    {
        // if (! $request->hasValidSignature()) {
        //     return response()->json([
        //         'status' => 'error',
        //         'success' => false,
        //         'message' => 'This password reset link is invalid or expired.',
        //     ]);
        // }

        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:users,id',
            'email' => 'required|exists:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'success' => false,
                'message' => $validator->errors()->first(),
            ]);
        }

        $user = User::where('id', $request->id)
            ->where('email', $request->email)
            ->first();

        $user->password = Hash::make($request->password);
        $user->setRememberToken(Str::random(60));
        $user->save();

        event(new PasswordReset($user));

        return response()->json([
            'status' => 'success',
            'success' => true,
            'redirect' => route('admin.login'),
            'message' => 'Password reset successfully.',
        ]);
    }

    public function showOtpVerificationForm(): View
    {
        return view('admin.auth.verify-otp', [
            'email' => session('email'),
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

        if (! $user) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP'])->withInput();
        }

        $user->update([
            'otp' => null,
            'otp_expires_at' => null,
            'email_verified_at' => now(),
        ]);

        Auth::guard('web')->login($user);

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
            'otp_expires_at' => Carbon::now()->addMinutes(config('auth.otp_expiry', 10)),
        ]);

        $user->notify(new SendOtpNotification($otp));

        return back()->with('status', 'A new OTP has been sent to your email.');
    }

    protected function generateOtp(): string
    {
        return (string) rand(100000, 999999);
    }
}
