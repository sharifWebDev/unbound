<?php

// routes/php
use App\Http\Controllers\Customer\Auth\AuthController;
use App\Http\Controllers\Customer\CustomerDashboardController;
use Illuminate\Support\Facades\Route;

// Guest routes
Route::middleware('customer.guest:customer')
    ->name('customer.')
    ->controller(AuthController::class)
    ->group(function () {
        Route::get('register', 'showRegistrationForm')->name('register');
        Route::post('register', 'register');

        Route::get('login', 'showLoginForm')->name('login');
        Route::post('login', 'login');

        Route::post('/email/resend', 'resend')
            ->name('verification.resend');

        // reset password====
        Route::post('/sent-reset-password', 'sendResetPasswordLink')
            ->name('sent.reset.password');

        Route::get('/verify-reset-password', 'verifyResetPassword')
            ->name('verify.reset.password');

        Route::post('/reset-password', 'resetPassword')
            ->name('reset.password')
            ->middleware('throttle:5,1');
        // end reset password====

        Route::get('verify-otp', 'showOtpVerificationForm')->name('verify.otp.form');
        Route::post('verify-otp', 'verifyOtp')->name('verify.otp');
        Route::post('resend-otp', 'resendOtp')->name('resend.otp');
    });

Route::middleware('customer.guest:customer')
    ->controller(AuthController::class)
    ->group(function () {

        Route::get('/email/verify/{id}/{hash}', 'verify')
            ->name('verification.verify')
            ->middleware('signed');

        // reset password
        Route::get('/password/reset', 'showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'sendResetLinkEmail')->name('password.email');
        Route::get('/password/reset/{token}', 'showResetForm')->name('password.reset');
        Route::post('/password/reset', 'reset')->name('password.update');
    });

// Authenticated routes
Route::middleware(['auth:customer', 'verified'])
    ->name('customer.')
    ->group(function () {

        Route::get('/', function () {
            return redirect()->route('dashboard');
        });
        Route::get('dashboard', [CustomerDashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('bookings', [CustomerDashboardController::class, 'booking'])->name('bookings.index');
        Route::get('ongoing-bookings', [CustomerDashboardController::class, 'ongoingBooking'])->name('ongoing-bookings.details');
        Route::get('custom-package-requests/details', [CustomerDashboardController::class, 'customPackageRequestDetails'])->name('custom-package-requests.details');
        Route::get('payments', [CustomerDashboardController::class, 'payment'])->name('payments.index');
        Route::get('payments/receipt', [CustomerDashboardController::class, 'paymentReceipt'])->name('payments.receipt');
        Route::get('profile', [CustomerDashboardController::class, 'profile'])->name('profile');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });
