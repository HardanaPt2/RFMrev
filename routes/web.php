<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

// Route untuk halaman Home
Route::get('/home', [CustomerController::class, 'index'])->name('home');
// Route untuk halaman Rent (Penyewaan)
Route::get('/home/login', [CustomerController::class, 'login'])->name('home.login');
Route::get('/home/dashboard', [CustomerController::class, 'dashboard'])->name('home.dashboard');


// Route untuk halaman Admin
Route::get('admin', [AdminController::class, 'index'])->name('admin');
Route::get('admin/penyewa', [AdminController::class, 'sewa'])->name('admin.penyewa');
Route::get('admin/riwayat', [AdminController::class, 'riwayat'])->name('admin.riwayat');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
