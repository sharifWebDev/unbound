<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use App\Http\Requests\Admin\Auth\RegisterRequest;
use App\Services\Admin\AuthService;
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

        return view('admin.auth.login', compact('countries'));
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
            Log::error('registration error: '.$e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred during registration.'.$e->getMessage(),
            ], 500);
        }
    }

    public function showLoginForm(): View
    {
        $countries = $this->authService->getCountries();

        return view('admin.auth.login', compact('countries'));
    }

    public function login(LoginRequest $request): RedirectResponse|JsonResponse
    {
        try {
            $this->authService->login(
                $request->only('email', 'password'),
                $request->boolean('remember'),
                $request->ip()
            );

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
            Log::error('Admin login error: '.$e->getMessage());
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
            $this->authService->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('admin.login');
        } catch (\Exception $e) {
            Log::error('Admin logout error: '.$e->getMessage());

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

            return redirect()->route('admin.dashboard')
                ->with('success', $response['message']);
        } catch (ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid verification link or link has expired.',
                ], 403);
            }

            return redirect()->route('admin.login')
                ->with('error', 'Invalid verification link or link has expired.');
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
            Log::error('Email verification error: '.$e->getMessage());

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
        try {
            $response = $this->authService->resendVerificationEmail($request->email);

            return response()->json($response);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'success' => false,
                'message' => 'User not found.',
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
            $user = $this->authService->verifyResetPassword($request);

            return view('admin.auth.reset-password', ['userId' => $user->id]);
        } catch (\Exception $e) {
            return redirect()->route('admin.login')
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
        return view('admin.auth.verify-otp', [
            'email' => session('email'),
        ]);
    }

    public function verifyOtp(Request $request): RedirectResponse
    {
        try {
            $user = $this->authService->verifyOtp($request->email, $request->otp);
            Auth::guard('web')->login($user);

            return redirect()->route('admin.dashboard')
                ->with('status', 'OTP verified successfully');
        } catch (\Exception $e) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP'])->withInput();
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
