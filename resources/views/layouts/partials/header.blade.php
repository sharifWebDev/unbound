<!-- Top Header -->
<div class="top-header">
    <h2 class="mb-0">@yield('page-title', 'Dashboard')</h2>
    <div class="user-profile">
        <span>Hello,<br><strong>{{ auth()->user()->full_name ?? '' }}</strong></span>
        <img src="{{ asset('backend/img/avatar.jpg') }}" alt="User Avatar" class="user-avatar">
    </div>
</div>
