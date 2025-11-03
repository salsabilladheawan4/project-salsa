<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\InventarisController;


Route::get('/', function () {
    return redirect()->route('auth.login');
});

// Route untuk auth
Route::get('login', [AuthController::class, 'index'])->name('auth.login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.submit');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


// Route untuk dashboard admin (setelah login)
// [PERUBAHAN] Middleware 'auth' telah dihapus
Route::get('/dashboard', [InventarisController::class, 'index'])->name('dashboard');
Route::get('/home', [InventarisController::class, 'index']);

Route::resource('aset', AsetController::class);
Route::resource('warga', WargaController::class);
Route::resource('user', UserController::class);