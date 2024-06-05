<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;

// Menampilkan daftar pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::resource('/pelanggan', PelangganController::class);

Route::get('/export-pdf', [ReportController::class, 'exportPDF']);
