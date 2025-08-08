<?php

use App\Http\Controllers\Api\V1\Admin\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

header('Access-Control-Allow-Origin: '.env('CORS_ALLOWED_ORIGINS', '*'));
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Requested-With');
header('Access-Control-Allow-Credentials: true');

// Route::post('/admin/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/v1/user', function (Request $request) {
    return '$request->user()';
});

Route::middleware('auth:sanctum', 'verified')
    ->prefix('/v1')
    ->group(function () {
        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);

        // /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // path3

    });
