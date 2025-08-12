<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next, $guard = 'web')
    {
        if (! Auth::guard($guard)->check()) {
            if ($guard === 'customer') {
                return redirect()->route('customer.login')
                    ->with('error', 'Access Denied! You must login as a customer.');
            }

            return redirect()->route('admin.login')
                ->with('error', 'Access Denied! You must login as an admin.');
        }

        return $next($request);

        // if (!Auth::guard($guard)->check()) {
        //     return $guard === 'customer'
        //         ? redirect()->route('customer.login')
        //         : redirect()->route('admin.login');
        // }
        // return $next($request);

        // if (Auth::guard('admin')->check()) {
        //     return $next($request);
        // }
        // return redirect()->route('admin.login')->with('error', 'Access Denied! You are not an admin.');

        // if (Auth::guard('customer')->check()) {
        //     return $next($request);
        // }
        // return redirect()->route('customer.login')->with('error', 'Access Denied! You are not an customer.');

    }
}
