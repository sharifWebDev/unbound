<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/admin/dashboard';
    public const ADMIN = '/admin/dashboard';
    public const CUSTOMER_HOME = '/customer/dashboard';

    public function boot(): void
    {
        // API rate limiting
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {

            Route::prefix('customer')
                ->as('customer.')
                ->middleware('web')
                ->group(base_path('routes/customer.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::prefix('api')
                ->as('api.')
                ->middleware('api')
                ->group(base_path('routes/api.php'));
        });
    }
}
