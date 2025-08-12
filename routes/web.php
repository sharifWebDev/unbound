<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.login');
});

Route::get('login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::prefix('admin')
    ->controller(AuthController::class)
    ->group(function () {

        Route::middleware('admin.guest:web')
            ->group(function () {

                Route::get('register', 'showRegistrationForm')->name('register');
                Route::post('register', 'register');

                Route::get('login', 'showLoginForm')->name('admin.login');
                Route::post('auth/login', 'login')->name('admin.login.submit');

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
                    ->name('admin.verification.verify')
                    ->middleware('signed');

                // reset password
                Route::get('/password/reset', 'showLinkRequestForm')->name('password.request');
                Route::post('/password/email', 'sendResetLinkEmail')->name('password.email');
                Route::get('/password/reset/{token}', 'showResetForm')->name('password.reset');
                Route::post('/password/reset', 'reset')->name('password.update');
            });



        Route::middleware(['web', 'admin.auth:web', 'verified'])->group(function () {
            Route::get('/', function () {
                return redirect()->route('admin.dashboard');
            });
            Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
            Route::get('bookings', [AdminDashboardController::class, 'booking'])->name('admin.bookings.index');
            Route::get('ongoing-bookings', [AdminDashboardController::class, 'ongoingBooking'])->name('admin.ongoing-bookings.details');
            Route::get('custom-package-requests/details', [AdminDashboardController::class, 'customPackageRequestDetails'])->name('admin.custom-package-requests.details');
            Route::get('payments', [AdminDashboardController::class, 'payment'])->name('admin.payments.index');
            Route::get('payments/receipt', [AdminDashboardController::class, 'paymentReceipt'])->name('admin.payments.receipt');
            Route::get('coupons', [AdminDashboardController::class, 'coupon'])->name('admin.coupons.index');
            Route::get('packages', [AdminDashboardController::class, 'package'])->name('admin.packages.index');
            Route::get('create-package', [AdminDashboardController::class, 'packageCreate'])->name('admin.packages.create');
            Route::get('users', [AdminDashboardController::class, 'user'])->name('admin.users.index');
            Route::get('profile', [AdminDashboardController::class, 'profile'])->name('admin.profile');
            Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
        });
    });
