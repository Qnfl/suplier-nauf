<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupplierController; // Pastikan Anda menggunakan kontroler yang benar
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', [HomeController::class, 'index'])->name('suplier.index');

// Rute untuk menampilkan daftar supplier
Route::get('/suplier', [SupplierController::class, 'index'])->name('suplier.index');

// Rute untuk menampilkan form edit supplier
Route::get('/suplier/{id}/edit', [SupplierController::class, 'edit'])->name('suplier.edit');

// Rute untuk mengupdate supplier
Route::put('/suplier/{id}', [SupplierController::class, 'update'])->name('suplier.update');

// Rute untuk menampilkan form tambah supplier
Route::get('/suplier/create', [SupplierController::class, 'create'])->name('suplier.create');

// Rute untuk menyimpan supplier baru
Route::post('/suplier', [SupplierController::class, 'store'])->name('suplier.store');

// Rute untuk menghapus supplier
Route::delete('/suplier/{id}', [SupplierController::class, 'destroy'])->name('suplier.destroy');
