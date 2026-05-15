<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthenticatedSessionController::class, 'showLogin'])->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'login'])->name('login.submit');

});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AuthenticatedSessionController::class, 'dashboard'])->name('dashboard');
});
