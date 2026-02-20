<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('/status', function () {
        return response()->json(['status' => 'operational']);
    });

    // Route::post('/login', [\App\Http\Controllers\Api\V1\Auth\LoginController::class, 'login']);
    // Route::post('/register', [\App\Http\Controllers\Api\V1\Auth\RegisterController::class, 'register']);

    Route::middleware('auth:sanctum')->group(function () {

        Route::get('/user', function (Request $request) {
            return $request->user();
        });

        // Route::apiResource('resources', \App\Http\Controllers\Api\V1\Resource\ResourceController::class);

        // Route::post('bookings', [\App\Http\Controllers\Api\V1\Booking\CreateBookingController::class, 'store']);
        // Route::delete('bookings/{booking}', [\App\Http\Controllers\Api\V1\Booking\CancelBookingController::class, 'destroy']);
    });
});
