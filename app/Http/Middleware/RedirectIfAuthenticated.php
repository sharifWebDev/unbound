<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = 'web')
    {
        if (Auth::guard($guard)->check()) {
            return $guard === 'customer'
                ? redirect()->route('customer.dashboard')
                : redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
