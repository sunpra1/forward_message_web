<?php

use App\Http\Controllers\Api\BackendController;
use App\Http\Controllers\Api\MobileApplicationController;
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
Route::prefix('api')->group(function () {
    Route::post('/getPaymentDetail', [MobileApplicationController::class, "getPaymentDetail"]);
});

Route::prefix('privacy-policy')->group(function () {
    Route::get('/notification-forward', function () {
        return view('privacy-policy');
    });
});

Route::get('/', function () {
    return view('home');
});
