@if (Auth::guard('web')->check() && request()->is('admin/*'))
    <div class="sidebar">
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('backend/img/logo.png') }}" alt="Bangladesh Unbound" class="img-fluid">
            </a>
        </div>
        <nav class="nav flex-column">
            <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                href="{{ url('admin/dashboard') }}">
                <img src="{{ asset('backend/img/ico/ico-dashboard.svg') }}" alt=""> Dashboard
            </a>
            <a class="nav-link {{ request()->is('admin/bookings') ? 'active' : '' }}"
                href="{{ url('admin/bookings') }}">
                <img src="{{ asset('backend/img/ico/ico-bookings.svg') }}" alt=""> Bookings
            </a>
            <a class="nav-link {{ request()->is('admin/payment') ? 'active' : '' }}" href="{{ url('admin/payments') }}">
                <img src="{{ asset('backend/img/ico/ico-payment.svg') }}" alt=""> Payment
            </a>
            <a class="nav-link {{ request()->is('admin/coupons') ? 'active' : '' }}"
                href="{{ url('admin/coupons') }}">
                <img src="{{ asset('backend/img/ico/ico-coupons.svg') }}" alt=""> Coupons
            </a>
            <a class="nav-link {{ request()->is('admin/packages') ? 'active' : '' }}"
                href="{{ url('admin/packages') }}">
                <img src="{{ asset('backend/img/ico/ico-packages.svg') }}" alt=""> Packages
            </a>
            <a class="nav-link {{ request()->is('admin/users') ? 'active' : '' }}" href="{{ url('admin/users') }}">
                <img src="{{ asset('backend/img/ico/ico-users.svg') }}" alt=""> Users
            </a>
            <a class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}"
                href="{{ url('admin/profile') }}">
                <img src="{{ asset('backend/img/ico/ico-profile.svg') }}" alt=""> Profile
            </a>
            <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a class="nav-link logout-link" href="javascript:void(0)" data-logout-form="admin-logout-form"  data-logout-redirect="{{ route('admin.login') }}">
                <img src="{{ asset('backend/img/ico/ico-logout.svg') }}" alt=""> Logout
            </a>
        </nav>
    </div>
@elseif(Auth::guard('customer')->check() && request()->is('customer/*'))
    {{-- Customer Sidebar --}}
    <div class="sidebar">
        <div class="logo">
            <a href="{{ route('customer.dashboard') }}">
                <img src="{{ asset('backend/img/logo.png') }}" alt="Bangladesh Unbound" class="img-fluid">
            </a>
        </div>
        <nav class="nav flex-column">
            <a class="nav-link {{ request()->is('customer/dashboard') ? 'active' : '' }}"
                href="{{ url('customer/dashboard') }}">
                <img src="{{ asset('backend/img/ico/ico-dashboard.svg') }}" alt=""> Dashboard
            </a>
            <a class="nav-link {{ request()->is('customer/bookings') ? 'active' : '' }}"
                href="{{ url('customer/bookings') }}">
                <img src="{{ asset('backend/img/ico/ico-bookings.svg') }}" alt=""> Bookings
            </a>
            <a class="nav-link {{ request()->is('customer/payment') ? 'active' : '' }}"
                href="{{ url('customer/payments') }}">
                <img src="{{ asset('backend/img/ico/ico-payment.svg') }}" alt=""> Payment
            </a>
            <a class="nav-link {{ request()->is('customer/profile') ? 'active' : '' }}"
                href="{{ url('customer/profile') }}">
                <img src="{{ asset('backend/img/ico/ico-profile.svg') }}" alt=""> Profile
            </a>

            <form id="customer-logout-form" action="{{ route('customer.logout') }}" method="POST"
                style="display: none;">
                @csrf
            </form>

            <a class="nav-link logout-link" href="javascript:void(0)" data-logout-form="customer-logout-form"  data-logout-redirect="{{ route('customer.login') }}">
                <img src="{{ asset('backend/img/ico/ico-logout.svg') }}" alt=""> Logout
            </a>
        </nav>
    </div>
@endif
