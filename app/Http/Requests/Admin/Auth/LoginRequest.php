<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

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
                Rule::exists('users', 'email')->where(function ($query) {
                    $query->where('is_active', true);
                }),
            ],
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
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
                $validator->errors()->add('email', 'Too many login attempts. Please try again later.');
                $this->fireLockoutEvent();
            }
        });
    }

    protected function hasTooManyLoginAttempts(): bool
    {
        return $this->rateLimiter()->tooManyAttempts(
            $this->throttleKey(),
            $this->maxAttempts()
        );
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
