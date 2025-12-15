<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| ROOT
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect('/login');
});

/*
|--------------------------------------------------------------------------
| LOGIN & LOGOUT (MANUAL)
|--------------------------------------------------------------------------
*/
Route::get('/login', [LoginController::class, 'showLogin'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');   // 🔥 INI YANG WAJIB ADA

/*
|--------------------------------------------------------------------------
| OWNER & ADMIN
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:owner,admin'])->group(function () {
    Route::resource('produk', ProdukController::class);
    Route::resource('customer', CustomerController::class);
});

/*
|--------------------------------------------------------------------------
| KASIR
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:kasir'])->group(function () {
    Route::resource('transaksi', TransaksiController::class);
    Route::get('/kasir', fn () => view('kasir.index'));
});
