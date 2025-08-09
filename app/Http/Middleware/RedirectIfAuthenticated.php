<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = 'web')
    {
        if (Auth::guard($guard)->check()) {
            return match ($guard) {
                'customer' => redirect()->route('customer.dashboard'),
                'admin' => redirect()->route('admin.dashboard'),
                default => redirect()->route('admin.dashboard'),
            };
        }

        return $next($request);
    }
}
