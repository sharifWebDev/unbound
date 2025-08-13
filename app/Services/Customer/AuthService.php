<?php

namespace App\Services\Customer;

use App\Models\Country;
use App\Models\Customer;
use App\Notifications\Customer\ResetPasswordNotification;
use App\Notifications\Customer\SendOtpNotification;
use App\Notifications\Customer\VerifyEmailNotification;
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
            $customer = Customer::create([
                'first_name' => $data['firstName'],
                'last_name' => $data['lastName'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),
                'address' => $data['address'],
                'country' => $data['country'],
                'agree_terms' => $data['agreeTerms'] ?? false,
                'subscribe_newsletter' => $data['subscribeNewsletter'] ?? false,
                'email_verified_at' => null,
                'is_active' => true,
            ]);

            $verificationUrl = $this->generateVerificationUrl($customer);

            $customer->notify(new VerifyEmailNotification($verificationUrl));

            event(new Registered($customer));

            return [
                'success' => true,
                'message' => 'Registration successful. Please verify your email.',
                'email' => $customer->email,
            ];
        } catch (\Exception $e) {
            Log::error('Customer registration error: ' . $e->getMessage());
            throw $e;
        }
    }

    protected function generateVerificationUrl(Customer $customer): string
    {
        return URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(config('auth.verification.expire', 60)),
            [
                'id' => $customer->getKey(),
                'hash' => sha1($customer->getEmailForVerification()),
            ]
        );
    }

    public function login(array $credentials, bool $remember, string $ip): Customer
    {
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

        $customer->logLoginAttempt($ip);

        return $customer;
    }

    public function logout(): void
    {
        Auth::guard('customer')->logout();
    }

    public function verifyEmail(Request $request, $id): array
    {
        $customer = Customer::findOrFail($id);

        if (! URL::hasValidSignature($request)) {
            throw ValidationException::withMessages([
                'email' => ['Invalid verification link or link has expired.'],
            ]);
        }

        if ($customer->hasVerifiedEmail()) {
            Auth::guard('customer')->login($customer);

            return [
                'status' => 'success',
                'message' => 'Email already verified.',
                'redirect' => route('customer.dashboard'),
            ];
        }

        if ($customer->markEmailAsVerified()) {
            event(new Verified($customer));
            Auth::guard('customer')->login($customer);
            $customer->logLoginAttempt($request->ip());

            return [
                'status' => 'success',
                'message' => 'Email verified successfully!',
                'redirect' => route('customer.dashboard'),
            ];
        }

        throw new \Exception('Email verification failed.');
    }

    public function resendVerificationEmail(string $email): array
    {
        $customer = Customer::where('email', $email)->first();

        if (! $customer) {
            throw new ModelNotFoundException('Customer not found.');
        }

        if ($customer->hasVerifiedEmail()) {
            return [
                'status' => 'error',
                'message' => 'Email already verified.',
                'redirect' => route('customer.dashboard'),
            ];
        }

        $verificationUrl = $this->generateVerificationUrl($customer);
        $customer->notify(new VerifyEmailNotification($verificationUrl));

        return [
            'status' => 'success',
            'message' => 'Verification email sent successfully.',
        ];
    }

    public function sendResetPasswordLink(string $email): array
    {
        $customer = Customer::where('email', $email)->firstOrFail();

        $temporaryUrl = URL::temporarySignedRoute(
            'customer.verify.reset.password',
            now()->addMinutes(20),
            ['id' => $customer->id, 'email' => $customer->email, 'name' => $customer->full_name]
        );

        $customer->notify(new ResetPasswordNotification($temporaryUrl, $customer));

        return [
            'status' => 'success',
            'message' => 'A Password reset link sent to your email successfully.',
        ];
    }

    public function verifyResetPassword(Request $request): Customer
    {
        if (! $request->hasValidSignature()) {
            throw new \Exception('This password reset link is invalid or expired.');
        }

        $customer = Customer::where('email', $request->email)->first();
        if (! $customer) {
            throw new \Exception('Invalid password reset request.');
        }

        if (! $customer->is_active) {
            throw new \Exception('Your account is inactive. Please contact support.');
        }

        return $customer;
    }

    public function resetPassword(array $data): array
    {
        $customer = Customer::where('id', $data['id'])
            ->where('email', $data['email'])
            ->firstOrFail();

        $customer->password = Hash::make($data['password']);
        $customer->setRememberToken(Str::random(60));
        $customer->save();

        event(new PasswordReset($customer));

        return [
            'status' => 200,
            'success' => true,
            'message' => 'Password reset successfully.',
            'redirect' => route('customer.login'),
        ];
    }

    public function verifyOtp(string $email, string $otp): Customer
    {
        $customer = Customer::where('email', $email)
            ->where('otp', $otp)
            ->where('otp_expires_at', '>', now())
            ->firstOrFail();

        $customer->update([
            'otp' => null,
            'otp_expires_at' => null,
            'email_verified_at' => now(),
        ]);

        return $customer;
    }

    public function resendOtp(string $email): array
    {
        $customer = Customer::where('email', $email)->firstOrFail();

        $otp = $this->generateOtp();
        $customer->update([
            'otp' => $otp,
            'otp_expires_at' => Carbon::now()->addMinutes(config('auth.otp_expiry')),
        ]);

        $customer->notify(new SendOtpNotification($otp));

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
