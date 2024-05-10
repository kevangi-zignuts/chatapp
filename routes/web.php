<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;

// Route::get('/', function () {
//     return view('auth.register');
// });
Route::get('/register-form', [RegistrationController::class, 'form'])->name('auth.registration-form');
Route::post('/register', [RegistrationController::class, 'register'])->name('auth.register');
Route::get('/', [LoginController::class, 'form'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::get('/dashboard', [MessageController::class, 'index'])->middleware('auth:sanctum')->name('dashboard');
Route::get('/chat/{id}', [MessageController::class, 'chat'])->middleware('auth:sanctum')->name('chat');
Route::post('/message', [MessageController::class, 'sendMessage'])->middleware('auth:sanctum')->name('send-message');
