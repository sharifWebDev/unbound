<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Auth\AuthController;

Route::get('/', function () {
    return redirect()->route('admin.login');
});

Route::prefix('admin')->group(function () {
    // Guest routes
    // Route::middleware('guest:web')->group(function () {
        Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
        Route::post('register', [AuthController::class, 'register']);

        Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [AuthController::class, 'login']);

        Route::get('verify-otp', [AuthController::class, 'showOtpVerificationForm'])->name('verify.otp.form');
        Route::post('verify-otp', [AuthController::class, 'verifyOtp'])->name('verify.otp');
        Route::post('resend-otp', [AuthController::class, 'resendOtp'])->name('resend.otp');
    // });

    // Authenticated routes
    // Route::middleware(['web', 'auth:web', 'admin', 'verified'])->group(function () {
        Route::get('/', function () { return redirect()->route('admin.dashboard'); });
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
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    // });
});
