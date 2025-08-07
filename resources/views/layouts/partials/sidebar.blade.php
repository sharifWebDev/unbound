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
        <a class="nav-link {{ request()->is('bookings') ? 'active' : '' }}" href="{{ url('bookings') }}">
            <img src="{{ asset('backend/img/ico/ico-bookings.svg') }}" alt=""> Bookings
        </a>
        <a class="nav-link {{ request()->is('payment') ? 'active' : '' }}" href="{{ url('payment') }}">
            <img src="{{ asset('backend/img/ico/ico-payment.svg') }}" alt=""> Payment
        </a>
        <a class="nav-link {{ request()->is('coupons') ? 'active' : '' }}" href="{{ url('coupons') }}">
            <img src="{{ asset('backend/img/ico/ico-coupons.svg') }}" alt=""> Coupons
        </a>
        <a class="nav-link {{ request()->is('packages') ? 'active' : '' }}" href="{{ url('packages') }}">
            <img src="{{ asset('backend/img/ico/ico-packages.svg') }}" alt=""> Packages
        </a>
        <a class="nav-link {{ request()->is('users') ? 'active' : '' }}" href="{{ url('users') }}">
            <img src="{{ asset('backend/img/ico/ico-users.svg') }}" alt=""> Users
        </a>
        <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}" href="{{ url('profile') }}">
            <img src="{{ asset('backend/img/ico/ico-profile.svg') }}" alt=""> Profile
        </a>
        <a class="nav-link" href="{{ url('login.php') }}">
            <img src="{{ asset('backend/img/ico/ico-logout.svg') }}" alt=""> Logout
        </a>
    </nav>
</div>
