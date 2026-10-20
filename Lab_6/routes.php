<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware('guest')->group(function () {

    // Show registration form
    Route::view('/register', 'auth.register')
        ->name('register');

    // Handle registration
    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.store');

    // Show login form
    Route::view('/login', 'auth.login')
        ->name('login');

    // Handle login
    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.store');

});

Route::middleware('auth')->group(function () {

    // Protected dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Handle logout
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

});
