<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\Auth\LoginRequest;
use App\Http\Requests\Customer\Auth\RegisterRequest;
use App\Services\Customer\AuthService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function showRegistrationForm(): View
    {
        $countries = $this->authService->getCountries();

        return view('customer.auth.login', compact('countries'));
    }

    public function register(RegisterRequest $request): JsonResponse|RedirectResponse
    {
        try {
            $response = $this->authService->register($request->validated());

            return response()->json([
                'success' => $response['success'],
                'message' => $response['message'],
                'email' => $response['email'],
            ], 201);
        } catch (\Exception $e) {
            Log::error('Customer registration error: '.$e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred during registration.'.$e->getMessage(),
            ], 500);
        }
    }

    public function showLoginForm(): View
    {
        $countries = $this->authService->getCountries();

        return view('customer.auth.login', compact('countries'));
    }

    public function login(LoginRequest $request): RedirectResponse|JsonResponse
    {
        try {
            $customer = $this->authService->login(
                $request->only('email', 'password'),
                $request->boolean('remember'),
                $request->ip()
            );

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
            Log::error('Customer login error: '.$e->getMessage());
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
            $this->authService->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('customer.login');
        } catch (\Exception $e) {
            Log::error('Customer logout error: '.$e->getMessage());

            return back()->with('error', 'An error occurred during logout.');
        }
    }

    public function verify(Request $request, $id)
    {
        try {
            $response = $this->authService->verifyEmail($request, $id);

            if ($request->expectsJson()) {
                return response()->json($response);
            }

            return redirect()->route('customer.dashboard')
                ->with('success', $response['message']);
        } catch (ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid verification link or link has expired.',
                ], 403);
            }

            return redirect()->route('customer.login')
                ->with('error', 'Invalid verification link or link has expired.');
        } catch (ModelNotFoundException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Customer not found.',
                ], 404);
            }

            return redirect()->route('customer.login')
                ->with('error', 'Customer not found.');
        } catch (\Exception $e) {
            Log::error('Email verification error: '.$e->getMessage());

            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'An error occurred during verification.',
                ], 500);
            }

            return redirect()->route('customer.login')
                ->with('error', 'An error occurred during verification. Please try again.');
        }
    }

    public function resend(Request $request)
    {
        try {
            $response = $this->authService->resendVerificationEmail($request->email);

            return response()->json($response);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'success' => false,
                'message' => 'Customer not found.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function sendResetPasswordLink(Request $request)
    {
        try {
            $response = $this->authService->sendResetPasswordLink($request->email);

            return response()->json($response, 200);
        } catch (\Exception $e) {
            Log::error('Failed to send password reset link: '.$e->getMessage());

            return response()->json([
                'status' => 'error',
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function verifyResetPassword(Request $request)
    {
        try {
            $customer = $this->authService->verifyResetPassword($request);

            return view('customer.auth.reset-password', ['customerId' => $customer->id]);
        } catch (\Exception $e) {
            return redirect()->route('customer.login')
                ->with('error', $e->getMessage());
        }
    }

    public function resetPassword(Request $request)
    {
        try {
            $response = $this->authService->resetPassword($request->all());

            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function showOtpVerificationForm(): View
    {
        return view('customer.auth.verify-otp', [
            'email' => session('email'),
        ]);
    }

    public function verifyOtp(Request $request): RedirectResponse
    {
        try {
            $customer = $this->authService->verifyOtp($request->email, $request->otp);
            Auth::guard('customer')->login($customer);

            return redirect()->route('customer.dashboard')
                ->with('status', 'OTP verified successfully');
        } catch (\Exception $e) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP']);
        }
    }

    public function resendOtp(Request $request): RedirectResponse
    {
        try {
            $response = $this->authService->resendOtp($request->email);

            return back()->with('status', $response['message']);
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
