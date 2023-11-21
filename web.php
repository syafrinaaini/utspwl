<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Route untuk menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route untuk menangani proses login
Route::post('/process-login', [LoginController::class, 'processLogin'])->name('process.login');

// Route untuk halaman utama (homepage)
Route::get('/', function () {
    return view('homepage');
});
