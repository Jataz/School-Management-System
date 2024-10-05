<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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


/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'AuthLogin'])->name('login');
Route::get('/pasword', [AuthController::class, 'register'])->name('password.request');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [AuthController::class, 'home'])->name('home');
Route::get('privacy_policy', [AuthController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('terms_of_use', [AuthController::class, 'terms_of_use'])->name('terms_of_use');