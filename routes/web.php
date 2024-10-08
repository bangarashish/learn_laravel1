<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', [AuthController::class, 'index'])->name('admin');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/adminDashboard', [DashboardController::class, 'admin_dashboard'])->name('admin.dashboard');