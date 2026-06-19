<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\LaporanController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'proses'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth');

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/show/{id}', [BukuController::class, 'show']);
Route::get('/buku/create', [BukuController::class, 'create']);
Route::post('/buku/store', [BukuController::class, 'store']);
Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
Route::post('/buku/update/{id}', [BukuController::class, 'update']);
Route::delete('/buku/delete/{id}', [BukuController::class, 'destroy']);

Route::get('/anggota', [AnggotaController::class, 'index']);

Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::get('/peminjaman/show/{id}', [PeminjamanController::class, 'show']);
Route::get('/peminjaman/create', [PeminjamanController::class, 'create']);
Route::post('/peminjaman/store', [PeminjamanController::class, 'store']);
Route::get('/peminjaman/edit/{id}', [PeminjamanController::class, 'edit']);
Route::put('/peminjaman/update/{id}', [PeminjamanController::class, 'update']);
Route::delete('/peminjaman/delete/{id}', [PeminjamanController::class, 'destroy']);

Route::get('/pengembalian', [PengembalianController::class, 'index']);
Route::get('/pengembalian/show/{id}', [PengembalianController::class, 'show']);
Route::get('/pengembalian/proses/{id}', [PengembalianController::class, 'proses']);

Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/laporan/cetak', [LaporanController::class, 'cetak']);
