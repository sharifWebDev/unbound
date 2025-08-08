<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Bangladesh Unbound - Login')</title>
    <link rel="icon" href="{{ asset('backend/img/logo.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('backend/img/logo.svg') }}" type="image/x-icon">
    <meta name="application-name" content="@yield('meta_application_name', 'Bangladesh Unbound')">
    <meta name="copyright" content="@yield('meta_copyright', 'Bangladesh Unbound')">
    <meta name="language" content="@yield('meta_language', 'English')">
    <meta name="author" content="@yield('meta_author', 'Bangladesh Unbound')">
    <meta name="title" content="@yield('meta_title', 'default meta title')">
    <meta name="description" content="@yield('meta_description', 'default description')">
    <meta name="keywords" content="@yield('meta_keywords', 'some default keywords')">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap 5.3.2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    @vite(['resources/css/custom.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>
    <!-- Main Content -->
    <div class="login-body">

            @include('layouts.partials.session-alerts')

            @yield('content')

    </div>

    <!-- Bootstrap 5.3.2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>

</html>
