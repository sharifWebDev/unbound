<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureIsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('admin')->check()) {
            return response()->json([
                'message' => 'Unauthenticated.',
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = Auth::guard('admin')->user();

        if (!$user->is_active) {
            Auth::guard('admin')->logout();
            return response()->json([
                'message' => 'Your account is inactive.',
            ], Response::HTTP_FORBIDDEN);
        }

        if (!$user->isAdmin()) {
            return response()->json([
                'message' => 'Unauthorized access.',
            ], Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
