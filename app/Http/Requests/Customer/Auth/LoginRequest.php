<?php

namespace App\Http\Requests\Customer\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::exists('customers', 'email')->where(function ($query) {
                    $query->where('is_active', true);
                }),
            ],
            'password' => [
                'required',
                'string',
                // Password::min(8)
                //     ->mixedCase()
                //     ->numbers()
                //     ->symbols()
                //     ->uncompromised(),
            ],
            'remember' => [
                'sometimes',
                'boolean',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'email.exists' => 'The provided credentials do not match our records or your account is inactive.',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->hasTooManyLoginAttempts()) {
                $this->fireLockoutEvent();

                $seconds = RateLimiter::availableIn($this->throttleKey());
                $validator->errors()->add('email', "Too many login attempts. Please try again in {$seconds} seconds.");
            }
        });
    }
    protected function hasTooManyLoginAttempts(): bool
    {
        return RateLimiter::tooManyAttempts(
            $this->throttleKey(),
            $this->maxAttempts()
        );
    }


    protected function fireLockoutEvent(): void
    {
        event(new Lockout($this));
    }

    protected function rateLimiter()
    {
        return app(RateLimiter::class);
    }

    protected function throttleKey(): string
    {
        return Str::lower($this->input('email')) . '|' . $this->ip();
    }

    protected function maxAttempts(): int
    {
        return 5;
    }

    protected function decayMinutes(): int
    {
        return 15;
    }
}
