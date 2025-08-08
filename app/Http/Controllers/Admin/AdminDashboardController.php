<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.home');
    }

    public function booking()
    {
        return view('admin.booking.index');
    }

    public function ongoingBooking()
    {
        return view('admin.ongoing-bookings.booking');
    }

    public function customPackageRequestDetails()
    {
        return view('admin.custom-package-requests.request-details');
    }

    public function payment()
    {
        return view('admin.payments.index');
    }

    public function paymentReceipt()
    {
        return view('admin.payments.receipt');
    }

    public function coupon()
    {
        return view('admin.coupon.index');
    }

    public function package()
    {
        return view('admin.package.index');
    }

    public function packageCreate()
    {
        return view('admin.package.create');
    }

    public function user()
    {
        return view('admin.user.index');
    }

    public function profile()
    {
        return view('admin.profile.index');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function register()
    {
        return view('admin.register');
    }
}
