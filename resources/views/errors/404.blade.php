 @extends('layouts.guest')
 @section('title', 'Bangladesh Unbound - Result Not Found')
 @section('page-title', 'Login')
 @section('breadcrumb', '')
 @section('content')

@section('content')
    <section id="hero" class="d-flex align-items-center" style="height: 100vh; background-color: #f8f9fa;">
        <main class="container text-center">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-8">
                    <div class="error-message">
                        <h1 class="display-4">404</h1>
                        <h3>Oops! We couldn't find the result you were looking for.</h3>
                        <p>The property or page you are trying to access doesn't exist or has been removed.</p>
                        <a href="/" class="btn btn-primary">Go Back to Home</a>
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
