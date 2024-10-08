<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Controller\Customer;


Route::get('/', function () {
    return view('welcome');
});
// Route::redirect('/login', '/admin');

Route::get('/admin', [AuthController::class, 'index'])->name('admin');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/adminDashboard', [DashboardController::class, 'admin_dashboard'])->name('admin.dashboard');
Route::get('/register', [Customer::class, 'register'])->name('register');
Route::post('/create', [Customer::class, 'create'])->name('customer.create');
Route::get('/login', [Customer::class, 'login'])->name('login.user');
