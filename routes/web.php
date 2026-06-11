<?php

use App\Http\Controllers\Students\AuthController;
use App\Http\Controllers\Students\ProfileController;
use Illuminate\Support\Facades\Route;

// Frontend-only routes (no auth for now)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

Route::get('/dashboard', function () {
    return view('Students.dashboard');
})->name('dashboard');

Route::prefix('profile')
    ->name('profile.')
    ->group(function () {
        Route::get('/', [ProfileController::class, 'overview'])->name('overview');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
    });

// Auth routes disabled while building frontend UI
// Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
