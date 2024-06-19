<?php

use App\Http\Controllers\Api\MemoryController;
use App\Http\Controllers\Api\MobileApplicationController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::prefix("/memory")->group(function(){
        Route::get('/', [MemoryController::class, "index"]);
        Route::post('/', [MemoryController::class, "store"]);
        Route::post('/{id}', [MemoryController::class, "update"]);
        Route::delete('/{id}', [MemoryController::class, "destroy"]);
    });
});

Route::prefix("/user")->group(function(){
    Route::post('/register', [UserController::class, "register"]);
    Route::post('/login', [UserController::class, "login"]);
});

Route::post('/getPaymentDetail', [MobileApplicationController::class, "getPaymentDetail"]);

Route::post('/test', function(Request $request){ return Response($request->all()); });