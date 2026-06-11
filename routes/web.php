<?php

use App\Http\Controllers\Students\AuthController;
use App\Http\Controllers\Students\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::middleware('auth.student')->group(function () {
    Route::get('/dashboard', function () {
        return view('Students.dashboard');
    })->name('dashboard');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('profile')
        ->name('profile.')
        ->group(function () {
            Route::get('/', [ProfileController::class, 'overview'])->name('overview');
            Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
            Route::put('/edit', [ProfileController::class, 'update'])->name('update');
        });
});
