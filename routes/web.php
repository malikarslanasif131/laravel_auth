<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::controller(UserController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register/add', 'registeration')->name('registeration');
    Route::get('/login', 'login')->name('login');
    Route::post('/login/check', 'loginCheck')->name('loginCheck');
    Route::get('/logout', 'logout')->name('logout');
});

// Protected Routes (only accessible when logged in)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard'); // Explicitly link to 'dashboardPage'
});
