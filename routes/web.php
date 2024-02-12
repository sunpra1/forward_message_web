<?php

use App\Http\Controllers\Api\MobileApplicationController;
use App\Http\Controllers\Api\MyMemoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('api/memories')->group(function () {
    Route::get('/', [MyMemoryController::class, "index"]);
    Route::post('/', [MyMemoryController::class, "store"]);
    Route::post('/{id}', [MyMemoryController::class, "update"]);
    Route::delete('/{id}', [MyMemoryController::class, "destroy"]);
});

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
