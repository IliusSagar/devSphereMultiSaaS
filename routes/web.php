<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', fn() => view('welcome'));

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);

    Route::get('register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // 👤 USER DASHBOARD
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard')->middleware('role:user');

    // 👑 ADMIN DASHBOARD (FIXED)
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard')->middleware('role:admin');
});