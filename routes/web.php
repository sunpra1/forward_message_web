<?php
use Illuminate\Support\Facades\Route;

Route::prefix('notification-forward')->group(function () {
    Route::get('/', function () {
        return view('notification-forward');
    });
    Route::get('/privacy-policy', function () {
        return view('oauth-privacy-policy');
    });
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
