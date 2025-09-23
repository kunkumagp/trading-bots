<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

// Home page route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard route (protected by auth middleware)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
