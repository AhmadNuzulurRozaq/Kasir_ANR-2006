<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DetailpenjualanController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function(){
    // ================================================================================================= //
    // HALAMAN REGISTER
    Route::get('/auth/register',[AuthController::class,'RegisterForm'])->name('register');
    // PROSES REGISTER
    Route::post('/auth/register',[AuthController::class,'store'])->name('auth.store');
    // HALAMAN LOGIN
    Route::get('/auth/login',[AuthController::class,'LoginForm'])->name('login');
    // PROSES LOGIN
    Route::post('/auth/login',[AuthController::class,'authenticate'])->name('auth.authenticate');
    // ================================================================================================= //
});

// ================================================================================================= //
// LOGOUT AKUN
Route::post('/auth/logout',[AuthController::class,'logout'])->name('auth.logout');
// ================================================================================================= //

Route::middleware('auth')->group(function(){
    // ================================================================================================= //
    // HALAMAN UTAMA
    Route::get('/home',[HomeController::class,'index']);
    // TAMPILKAN DATA
    Route::get('/pelanggan',[PelangganController::class,'index']);
    // TAMBAHKAN DATA
    Route::get('/pelanggan/tambah',[PelangganController::class,'tambah'])->middleware('auth','role:admin');
    // KIRIM DATA
    Route::post('/pelanggan/kirim',[PelangganController::class,'kirim'])->middleware('auth','role:admin');
    // HAPUS DATA
    Route::delete('/pelanggan/{PelangganID}',[PelangganController::class,'delete'])->middleware('auth','role:admin');
    // EDIT DATA
    Route::get('/pelanggan/{PelangganID}/edit',[PelangganController::class,'edit'])->middleware('auth','role:admin');
    // UPDATE DATA
    Route::put('/pelanggan/{PelangganID}',[PelangganController::class,'update'])->middleware('auth','role:admin');
    // ================================================================================================= //

    // ================================================================================================= //
    // TAMPILKAN DATA
    Route::get('/produk',[ProdukController::class,'index']);
    // TAMBAHKAN DATA
    Route::get('/produk/tambah',[ProdukController::class,'tambah'])->middleware('auth','role:admin');
    // KIRIM DATA
    Route::post('/produk/kirim',[ProdukController::class,'kirim'])->middleware('auth','role:admin');
    // HAPUS DATA
    Route::delete('/produk/{ProdukID}',[ProdukController::class,'delete'])->middleware('auth','role:admin');
    // EDIT DATA
    Route::get('/produk/{ProdukID}/edit',[ProdukController::class,'edit'])->middleware('auth','role:admin');
    // UPDATE DATA
    Route::put('/produk/{ProdukID}',[ProdukController::class,'update'])->middleware('auth','role:admin');
    // ================================================================================================= //

    // ================================================================================================= //
    // TAMPILKAN DATA
    Route::get('/penjualan',[PenjualanController::class,'index']);
    // TAMBAHKAN DATA
    Route::get('/penjualan/tambah',[PenjualanController::class,'tambah'])->middleware('auth','role:admin');
    // KIRIM DATA
    Route::post('/penjualan/kirim',[PenjualanController::class,'kirim'])->middleware('auth','role:admin');
    // HAPUS DATA
    Route::delete('/penjualan/{PenjualanID}',[PenjualanController::class,'delete'])->middleware('auth','role:admin');
    // EDIT DATA
    Route::get('/penjualan/{PenjualanID}/edit',[PenjualanController::class,'edit'])->middleware('auth','role:admin');
    // UPDATE DATA
    Route::put('/penjualan/{PenjualanID}',[PenjualanController::class,'update'])->middleware('auth','role:admin');
    // ================================================================================================= //

    // ================================================================================================= //
    // TAMPILKAN DATA
    Route::get('/detailpenjualan',[DetailpenjualanController::class,'index']);
    // TAMBAHKAN DATA
    Route::get('/detailpenjualan/tambah',[DetailpenjualanController::class,'tambah'])->middleware('auth','role:admin');
    // KIRIM DATA
    Route::post('/detailpenjualan/kirim',[DetailpenjualanController::class,'kirim'])->middleware('auth','role:admin');
    // HAPUS DATA
    Route::delete('/detailpenjualan/{DetailID}',[DetailpenjualanController::class,'delete'])->middleware('auth','role:admin');
    // EDIT DATA
    Route::get('/detailpenjualan/{DetailID}/edit',[DetailpenjualanController::class,'edit'])->middleware('auth','role:admin');
    // UPDATE DATA
    Route::put('/detailpenjualan/{DetailID}',[DetailpenjualanController::class,'update'])->middleware('auth','role:admin');
    // ================================================================================================= //
});

