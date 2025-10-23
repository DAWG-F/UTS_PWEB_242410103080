<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route default
Route::get('/', function () {
    return redirect('/dashboard');
});

// Route Login
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'postLogin']);

// Route Halaman Wajib
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');