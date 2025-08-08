<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Customer\CustomerDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.login');
});

Route::prefix('admin')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        // Authentication routes...
    });

    Route::middleware(['auth:admin', 'admin'])->group(function () {
        // Protected admin routes...
    });
});

Route::prefix('admin')->group(function () {
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
    Route::get('login', [AdminDashboardController::class, 'login'])->name('admin.login');
});

Route::prefix('customer')->group(function () {
    Route::get('/', function () {
        return redirect()->route('customer.dashboard');
    });
    Route::get('dashboard', [CustomerDashboardController::class, 'dashboard'])->name('customer.dashboard');
    Route::get('bookings', [CustomerDashboardController::class, 'booking'])->name('customer.bookings.index');
    Route::get('ongoing-bookings', [CustomerDashboardController::class, 'ongoingBooking'])->name('customer.ongoing-bookings.details');
    Route::get('custom-package-requests/details', [CustomerDashboardController::class, 'customPackageRequestDetails'])->name('customer.custom-package-requests.details');
    Route::get('payments', [CustomerDashboardController::class, 'payment'])->name('customer.payments.index');
    Route::get('payments/receipt', [CustomerDashboardController::class, 'paymentReceipt'])->name('customer.payments.receipt');
    Route::get('profile', [CustomerDashboardController::class, 'profile'])->name('customer.profile');
    Route::get('login', [CustomerDashboardController::class, 'login'])->name('customer.login');
});
