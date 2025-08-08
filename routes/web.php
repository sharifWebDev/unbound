<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return redirect()->route('admin.login');
});

Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
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
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('bookings', [AdminController::class, 'booking'])->name('admin.bookings.index');
    Route::get('ongoing-bookings', [AdminController::class, 'ongoingBooking'])->name('admin.ongoing-bookings.details');
    Route::get('custom-package-requests/details', [AdminController::class, 'customPackageRequestDetails'])->name('admin.custom-package-requests.details');
    Route::get('payments', [AdminController::class, 'payment'])->name('admin.payments.index');
    Route::get('payments/receipt', [AdminController::class, 'paymentReceipt'])->name('admin.payments.receipt');
    Route::get('coupons', [AdminController::class, 'coupon'])->name('admin.coupons.index');
    Route::get('packages', [AdminController::class, 'package'])->name('admin.packages.index');
    Route::get('create-package', [AdminController::class, 'packageCreate'])->name('admin.packages.create');
    Route::get('users', [AdminController::class, 'user'])->name('admin.users.index');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
});
