<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\TourPackageController;
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
            Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

            Route::controller(AdminDashboardController::class)
                ->group(function () {
                    Route::get('dashboard', 'dashboard')->name('admin.dashboard');
                    Route::get('bookings', 'booking')->name('admin.bookings.index');
                    Route::get('ongoing-bookings', 'ongoingBooking')->name('admin.ongoing-bookings.details');
                    Route::get('custom-package-requests/details', 'customPackageRequestDetails')->name('admin.custom-package-requests.details');
                    Route::get('payments', 'payment')->name('admin.payments.index');
                    Route::get('payments/receipt', 'paymentReceipt')->name('admin.payments.receipt');
                    Route::get('coupons', 'coupon')->name('admin.coupons.index');
                    Route::get('packages', 'package')->name('admin.packages.index');
                    Route::get('create-package', 'packageCreate')->name('admin.packages.create');
                    Route::get('users', 'user')->name('admin.users.index');
                    Route::get('profile', 'profile')->name('admin.profile');
                });

            Route::prefix('/tour-packages')
                ->controller(TourPackageController::class)
                ->name('admin.')
                ->group(function () {
                    Route::get('/', 'index')->name('tour_packages.index');
                    Route::get('/create', 'create')->name('tour_packages.create');
                    Route::post('/', 'store')->name('tour_packages.store');
                    Route::get('/{id}', 'show')->name('tour_packages.show');
                    Route::get('/{id}/edit', 'edit')->name('tour_packages.edit');
                    Route::put('/{id}', 'update')->name('tour_packages.update');
                    // Route::patch('/{id}', 'update')->name('tour_packages.update');
                    Route::delete('/{id}', 'destroy')->name('tour_packages.destroy');
                });
        });
    });
