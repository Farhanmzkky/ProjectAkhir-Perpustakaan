<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;

Route::get('/', function () {
    return view('dashboard');
});

// CRUD
Route::resource('buku', BukuController::class);
Route::resource('anggota', AnggotaController::class);

// Peminjaman
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::post('/pengembalian/{id}', [PeminjamanController::class, 'pengembalian'])->name('pengembalian');
