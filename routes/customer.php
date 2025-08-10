<?php

// routes/php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\Auth\AuthController;
use App\Http\Controllers\Customer\CustomerDashboardController;


// Guest routes
Route::middleware('customer.guest:customer')->group(function () {
    Route::get('register',  [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);

    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);

    Route::get('verify-otp', [AuthController::class, 'showOtpVerificationForm'])->name('verify.otp.form');
    Route::post('verify-otp', [AuthController::class, 'verifyOtp'])->name('verify.otp');
    Route::post('resend-otp', [AuthController::class, 'resendOtp'])->name('resend.otp');
});

// Authenticated routes
Route::middleware(['auth:customer', 'verified'])->group(function () {

    Route::get('/', function () { return redirect()->route('dashboard');});
    Route::get('dashboard', [CustomerDashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('bookings', [CustomerDashboardController::class, 'booking'])->name('bookings.index');
    Route::get('ongoing-bookings', [CustomerDashboardController::class, 'ongoingBooking'])->name('ongoing-bookings.details');
    Route::get('custom-package-requests/details', [CustomerDashboardController::class, 'customPackageRequestDetails'])->name('custom-package-requests.details');
    Route::get('payments', [CustomerDashboardController::class, 'payment'])->name('payments.index');
    Route::get('payments/receipt', [CustomerDashboardController::class, 'paymentReceipt'])->name('payments.receipt');
    Route::get('profile', [CustomerDashboardController::class, 'profile'])->name('profile');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
