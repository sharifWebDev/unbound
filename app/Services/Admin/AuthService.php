<?php

namespace App\Services\Admin;

use App\Models\Country;
use App\Models\User;
use App\Notifications\Admin\ResetPasswordNotification;
use App\Notifications\Admin\SendOtpNotification;
use App\Notifications\Admin\VerifyEmailNotification;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthService
{
    public function register(array $data): array
    {
        try {
            $user = User::create([
                'first_name' => $data['firstName'],
                'last_name' => $data['lastName'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),
                'role' => 'admin',
                'address' => $data['address'],
                'country' => $data['country'],
                'agree_terms' => $data['agreeTerms'] ?? false,
                'subscribe_newsletter' => $data['subscribeNewsletter'] ?? false,
                'email_verified_at' => null,
                'is_active' => true,
            ]);

            $verificationUrl = $this->generateVerificationUrl($user);

            $user->notify(new VerifyEmailNotification($verificationUrl));

            event(new Registered($user));

            return [
                'success' => true,
                'message' => 'Registration successful. Please verify your email.',
                'email' => $user->email,
            ];
        } catch (\Exception $e) {
            Log::error('registration error: ' . $e->getMessage());
            throw $e;
        }
    }

    protected function generateVerificationUrl(User $user): string
    {
        return URL::temporarySignedRoute(
            'admin.verification.verify',
            now()->addMinutes(config('auth.verification.expire', 60)),
            [
                'id' => $user->getKey(),
                'hash' => sha1($user->getEmailForVerification()),
            ]
        );
    }

    public function login(array $credentials, bool $remember, string $ip): User
    {
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
            $user->logLoginAttempt($ip);
        }

        return $user;
    }

    public function logout(): void
    {
        Auth::guard('web')->logout();
    }

    public function verifyEmail(Request $request, $id): array
    {
        $user = User::findOrFail($id);

        if (! URL::hasValidSignature($request)) {
            throw ValidationException::withMessages([
                'email' => ['Invalid verification link or link has expired.'],
            ]);
        }

        if ($user->hasVerifiedEmail()) {
            Auth::guard('User')->login($user);

            return [
                'status' => 'success',
                'message' => 'Email already verified.',
                'redirect' => route('admin.dashboard'),
            ];
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
            Auth::guard('User')->login($user);

            if (method_exists($user, 'logLoginAttempt')) {
                $user->logLoginAttempt($request->ip());
            }

            return [
                'status' => 'success',
                'message' => 'Email verified successfully!',
                'redirect' => route('admin.dashboard'),
            ];
        }

        throw new \Exception('Email verification failed.');
    }

    public function resendVerificationEmail(string $email): array
    {
        $user = User::where('email', $email)->first();

        if (! $user) {
            throw new ModelNotFoundException('User not found.');
        }

        if ($user->hasVerifiedEmail()) {
            return [
                'status' => 'error',
                'message' => 'Email already verified.',
                'redirect' => route('admin.dashboard'),
            ];
        }

        $verificationUrl = $this->generateVerificationUrl($user);
        $user->notify(new VerifyEmailNotification($verificationUrl));

        return [
            'status' => 'success',
            'message' => 'Verification email sent successfully.',
        ];
    }

    public function sendResetPasswordLink(string $email): array
    {
        $user = User::where('email', $email)->firstOrFail();

        $temporaryUrl = URL::temporarySignedRoute(
            'verify.reset.password',
            now()->addMinutes(20),
            ['id' => $user->id, 'email' => $user->email, 'name' => $user->full_name]
        );

        $user->notify(new ResetPasswordNotification($temporaryUrl, $user));

        return [
            'status' => 'success',
            'message' => 'A Password reset link sent to your email successfully.',
        ];
    }

    public function verifyResetPassword(Request $request): User
    {
        if (! $request->hasValidSignature()) {
            throw new \Exception('This password reset link is invalid or expired.');
        }

        $user = User::where('email', $request->email)->first();
        if (! $user) {
            throw new \Exception('Invalid password reset request.');
        }

        if (! $user->is_active) {
            throw new \Exception('Your account is inactive. Please contact support.');
        }

        return $user;
    }

    public function resetPassword(array $data): array
    {
        $user = User::where('id', $data['id'])
            ->where('email', $data['email'])
            ->firstOrFail();

        $user->password = Hash::make($data['password']);
        $user->setRememberToken(Str::random(60));
        $user->save();

        event(new PasswordReset($user));

        return [
            'status' => 200,
            'success' => true,
            'message' => 'Password reset successfully.',
            'redirect' => route('admin.login'),
        ];
    }

    public function verifyOtp(string $email, string $otp): User
    {
        $user = User::where('email', $email)
            ->where('otp', $otp)
            ->where('otp_expires_at', '>', now())
            ->firstOrFail();

        $user->update([
            'otp' => null,
            'otp_expires_at' => null,
            'email_verified_at' => now(),
        ]);

        return $user;
    }

    public function resendOtp(string $email): array
    {
        $user = User::where('email', $email)->firstOrFail();

        $otp = $this->generateOtp();
        $user->update([
            'otp' => $otp,
            'otp_expires_at' => Carbon::now()->addMinutes(config('auth.otp_expiry', 10)),
        ]);

        $user->notify(new SendOtpNotification($otp));

        return [
            'status' => 'success',
            'message' => 'A new OTP has been sent to your email.',
        ];
    }

    protected function generateOtp(): string
    {
        return (string) rand(100000, 999999);
    }

    public function getCountries()
    {
        return Country::select('id', 'name', 'code')->get();
    }
}
