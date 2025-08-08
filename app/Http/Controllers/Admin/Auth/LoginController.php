<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Auth::guard('admin')->user();

            if (! $user->isAdmin()) {
                Auth::guard('admin')->logout();

                return back()->withErrors([
                    'email' => 'You do not have admin privileges.',
                ]);
            }

            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
