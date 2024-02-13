<?php

use App\Http\Controllers\Api\MobileApplicationController;
use App\Http\Controllers\Api\MemoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/memories')->group(function () {
    Route::get('/', [MemoryController::class, "index"]);
    Route::post('/', [MemoryController::class, "store"]);
    Route::post('/{id}', [MemoryController::class, "update"]);
    Route::delete('/{id}', [MemoryController::class, "destroy"]);
})->middleware('auth:sanctum');

Route::prefix('api')->group(function () {
    Route::post('/getPaymentDetail', [MobileApplicationController::class, "getPaymentDetail"]);
});

Route::prefix('privacy-policy')->group(function () {
    Route::get('/notification-forward', function () {
        return view('privacy-policy-notification-forward');
    });
    Route::get('/forward-message', function () {
        return view('privacy-policy-forward-message');
    });
});

Route::get('/', function () {
    return view('home');
});
