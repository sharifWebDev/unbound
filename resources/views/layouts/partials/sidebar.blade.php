<div class="sidebar">
    <div class="logo">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('backend/img/logo.png') }}" alt="Bangladesh Unbound" class="img-fluid">
        </a>
    </div>
    <nav class="nav flex-column">
        <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ url('admin/dashboard') }}">
            <img src="{{ asset('backend/img/ico/ico-dashboard.svg') }}" alt=""> Dashboard
        </a>
        <a class="nav-link {{ request()->is('admin/bookings') ? 'active' : '' }}" href="{{ url('admin/bookings') }}">
            <img src="{{ asset('backend/img/ico/ico-bookings.svg') }}" alt=""> Bookings
        </a>
        <a class="nav-link {{ request()->is('admin/payment') ? 'active' : '' }}" href="{{ url('admin/payments') }}">
            <img src="{{ asset('backend/img/ico/ico-payment.svg') }}" alt=""> Payment
        </a>
        <a class="nav-link {{ request()->is('admin/coupons') ? 'active' : '' }}" href="{{ url('admin/coupons') }}">
            <img src="{{ asset('backend/img/ico/ico-coupons.svg') }}" alt=""> Coupons
        </a>
        <a class="nav-link {{ request()->is('admin/packages') ? 'active' : '' }}" href="{{ url('admin/packages') }}">
            <img src="{{ asset('backend/img/ico/ico-packages.svg') }}" alt=""> Packages
        </a>
        <a class="nav-link {{ request()->is('admin/users') ? 'active' : '' }}" href="{{ url('admin/users') }}">
            <img src="{{ asset('backend/img/ico/ico-users.svg') }}" alt=""> Users
        </a>
        <a class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}" href="{{ url('admin/profile') }}">
            <img src="{{ asset('backend/img/ico/ico-profile.svg') }}" alt=""> Profile
        </a>
        <a class="nav-link" href="{{ url('admin/login') }}">
            <img src="{{ asset('backend/img/ico/ico-logout.svg') }}" alt=""> Logout
        </a>
    </nav>
</div>
