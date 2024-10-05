<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



// Public routes
Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'AuthLogin'])->name('login');
Route::get('/password', [AuthController::class, 'register'])->name('password.request');



// Routes that require authentication
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/home', [AuthController::class, 'home'])->name('home');
    Route::get('privacy_policy', [AuthController::class, 'privacy_policy'])->name('privacy_policy');
    Route::get('terms_of_use', [AuthController::class, 'terms_of_use'])->name('terms_of_use');
});
