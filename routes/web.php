<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        // Authentication routes...
    });

    Route::middleware(['auth:admin', 'admin'])->group(function () {
        // Protected admin routes...
    });
});

// Dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Bookings
Route::get('bookings-admin', [AdminController::class, 'index'])->name('admin.bookings');

// Payments
Route::get('payment-admin', [AdminController::class, 'index'])->name('admin.payments');

// Coupons
Route::get('coupons', [AdminController::class, 'index'])->name('admin.coupons');

// Packages
Route::get('packages', [AdminController::class, 'index'])->name('admin.packages');

// Users
Route::get('users', [AdminController::class, 'index'])->name('admin.users');

// Profile
Route::get('profile-admin', [AdminController::class, 'index'])->name('admin.profile');

// Logout (optional - should use POST with Auth)
Route::get('login.php', function () {
    return redirect()->route('login');
})->name('admin.logout'); // or use logout route directly if set up
