<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\RateLimiter;

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
                'email:rfc,dns',
                'max:255',
                Rule::exists('users', 'email')->where(fn ($q) => $q->where('is_active', true)),
            ],
            'password' => [
                'required',
                'string',
                // Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised(),
            ],
            'remember' => ['nullable', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.exists' => 'Invalid credentials or inactive account.',
        ];
    }

    public function withValidator($validator): void
    {
        if ($this->hasTooManyLoginAttempts()) {
            $this->fireLockoutEvent();

            $validator->after(function ($validator) {
                $validator->errors()->add('email', 'Too many login attempts. Please try again in 15 minutes.');
            });
        }
    }

    protected function hasTooManyLoginAttempts(): bool
    {
        return RateLimiter::tooManyAttempts($this->throttleKey(), $this->maxAttempts());
    }

    protected function maxAttempts(): int
    {
        return 5;
    }

    protected function decayMinutes(): int
    {
        return 15;
    }

    protected function throttleKey(): string
    {
        return strtolower($this->input('email')).'|'.$this->ip();
    }
}
