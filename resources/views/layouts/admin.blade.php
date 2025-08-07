<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Bangladesh Unbound - Dashboard')</title>
    <link rel="icon" href="{{ asset('backend/img/logo.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('backend/img/logo.svg') }}" type="image/x-icon">
    <meta name="author" content="@yield('meta_author', 'Bangladesh Unbound')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    <meta name="googlebot" content="@yield('meta_googlebot', 'index, follow')">
    <meta name="revisit-after" content="@yield('meta_revisit_after', '7 days')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#ffffff">
    <meta name="application-name" content="@yield('meta_application_name', 'Bangladesh Unbound')">
    <meta name="author" content="@yield('meta_author', 'Bangladesh Unbound')">
    <meta name="copyright" content="@yield('meta_copyright', 'Bangladesh Unbound')">
    <meta name="language" content="@yield('meta_language', 'English')">
    <meta name="distribution" content="@yield('meta_distribution', 'Global')">
    <meta name="rating" content="@yield('meta_rating', 'General')">
    <meta name="revisit-after" content="@yield('meta_revisit_after', '7 days')">
    <meta name="google" content="@yield('meta_google', 'notranslate')">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('backend/img/logo.svg') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="@yield('meta_apple_mobile_web_app_title', 'Bangladesh Unbound')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="mobile-web-app-title" content="@yield('meta_mobile_web_app_title', 'Bangladesh Unbound')">
    <meta name="keywords" content="@yield('meta_keywords', 'some default keywords')">
    <meta name="title" content="@yield('meta_title', 'default meta title')">
    <meta name="description" content="@yield('meta_description', 'default description')">
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap 5.3.2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/custom.css') }}">
    @stack('styles')
</head>

<body>
    @include('layouts.partials.sidebar')
    <!-- Main Content -->
    <div class="main-content">

        @include('layouts.partials.header')

        <div class="content-area">

            @include('layouts.partials.session-alerts')

            @yield('breadcrumb')

            @yield('content')

        </div>
    </div>

    <!-- Bootstrap 5.3.2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>

</html>
