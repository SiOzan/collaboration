<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(
    [
        'register' => false,
        'login' => false,
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
