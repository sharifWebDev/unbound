<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next, $guard = 'web')
    {
        if (!Auth::guard($guard)->check()) {
            return $guard === 'customer'
                ? redirect()->route('customer.login')
                : redirect()->route('admin.login');
        }

        return $next($request);
    }
}
