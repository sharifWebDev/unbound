<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'firstName' => ['required', 'string', 'max:50', 'regex:/^[\p{L}\s\-\.]+$/u'],
            'lastName' => ['required', 'string', 'max:50', 'regex:/^[\p{L}\s\-\.]+$/u'],
            'email' => [
                'required', 'string', 'email:rfc,dns', 'max:255',
                Rule::unique('users', 'email')->whereNull('deleted_at')
            ],
            'phone' => ['required', 'string', 'max:20', 'regex:/^\+?[0-9\s\-]{7,20}$/'],
            'password' => [
                'required', 'confirmed',
                Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised(3)
            ],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string'],
            'agreeTerms' => ['required', 'accepted'],
            'subscribeNewsletter' => ['nullable', 'boolean']
        ];
    }

    public function messages(): array
    {
        return [
            'firstName.regex' => 'First name can only include letters, spaces, hyphens, and dots.',
            'lastName.regex' => 'Last name can only include letters, spaces, hyphens, and dots.',
            'email.unique' => 'This email is already registered.',
            'password.uncompromised' => 'This password has been exposed in a data breach.',
            'phone.regex' => 'Invalid phone number format.',
            'agreeTerms.accepted' => 'You must accept the terms and privacy policy.'
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'ip_address' => $this->ip(),
            'subscribeNewsletter' => $this->has('subscribeNewsletter') ? 1 : 0,
        ]);
    }

    public function attributes(): array
    {
        return [
            'firstName' => 'first name',
            'lastName' => 'last name',
            'agreeTerms' => 'terms of service',
        ];
    }
}
