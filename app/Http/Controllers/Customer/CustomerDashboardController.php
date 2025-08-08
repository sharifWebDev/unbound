<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class CustomerDashboardController extends Controller
{
    public function dashboard()
    {
        return view('customer.dashboard.home');
    }

    public function booking()
    {
        return view('customer.booking.index');
    }

    public function ongoingBooking()
    {
        return view('customer.booking.ongoing-booking');
    }

    public function customPackageRequestDetails()
    {
        return view('customer.custom-package-requests.request-details');
    }

    public function payment()
    {
        return view('customer.payments.index');
    }

    public function paymentReceipt()
    {
        return view('customer.payments.receipt');
    }

    public function profile()
    {
        return view('customer.profile.index');
    }
}
