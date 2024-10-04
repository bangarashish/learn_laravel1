<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AuthController::class, 'index'])->name('admin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
