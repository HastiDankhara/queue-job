<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/welcome', [UserController::class, 'index'])->name('welcome');

// Show registration form
Route::get('/', [UserController::class, 'register'])->name('register');

// Process registration form
Route::post('/register', [UserController::class, 'store'])->name('register.store');
