<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next, $guard = 'web')
    {
        if (!Auth::guard($guard)->check()) {
            return match ($guard) {
                'customer' => redirect()->route('customer.login'),
                'admin' => redirect()->route('admin.login'),
                default => redirect()->route('login'),
            };
        }

        return $next($request);
    }
}
