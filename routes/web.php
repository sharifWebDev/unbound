<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Bookings
Route::get('bookings-admin', [BookingController::class, 'index'])->name('admin.bookings');

// Payments
Route::get('payment-admin', [PaymentController::class, 'index'])->name('admin.payments');

// Coupons
Route::get('coupons', [CouponController::class, 'index'])->name('admin.coupons');

// Packages
Route::get('packages', [PackageController::class, 'index'])->name('admin.packages');

// Users
Route::get('users', [UserController::class, 'index'])->name('admin.users');

// Profile
Route::get('profile-admin', [ProfileController::class, 'index'])->name('admin.profile');

// Logout (optional - should use POST with Auth)
Route::get('login.php', function () {
    return redirect()->route('login');
})->name('admin.logout'); // or use logout route directly if set up
