<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PinjamBarangController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;

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

// Rute untuk menampilkan daftar barang keluar
Route::get('/barang-keluar', [BarangKeluarController::class, 'index'])->name('barang_keluar.index');

// Rute untuk menampilkan form tambah barang keluar
Route::get('/barang-keluar/create', [BarangKeluarController::class, 'create'])->name('barang_keluar.create');

// Rute untuk menyimpan barang keluar baru
Route::post('/barang-keluar', [BarangKeluarController::class, 'store'])->name('barang_keluar.store');

// Rute untuk menampilkan form edit barang keluar
Route::get('/barang-keluar/{id}/edit', [BarangKeluarController::class, 'edit'])->name('barang_keluar.edit');

// Rute untuk mengupdate barang keluar
Route::put('/barang-keluar/{id}', [BarangKeluarController::class, 'update'])->name('barang_keluar.update');

// Rute untuk menghapus barang keluar
Route::delete('/barang-keluar/{id}', [BarangKeluarController::class, 'destroy'])->name('barang_keluar.destroy');

// Rute untuk menampilkan daftar barang masuk
Route::get('/barang-masuk', [BarangMasukController::class, 'index'])->name('barang_masuk.index');

// Rute untuk menampilkan form tambah barang masuk
Route::get('/barang-masuk/create', [BarangMasukController::class, 'create'])->name('barang_masuk.create');

// Rute untuk menyimpan barang masuk baru
Route::post('/barang-masuk', [BarangMasukController::class, 'store'])->name('barang_masuk.store');

// Rute untuk menampilkan form edit barang masuk
Route::get('/barang-masuk/{id}/edit', [BarangMasukController::class, 'edit'])->name('barang_masuk.edit');

// Rute untuk mengupdate barang masuk
Route::put('/barang-masuk/{id}', [BarangMasukController::class, 'update'])->name('barang_masuk.update');

// Rute untuk menghapus barang masuk
Route::delete('/barang-masuk/{id}', [BarangMasukController::class, 'destroy'])->name('barang_masuk.destroy');

// Rute untuk menampilkan daftar barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');

// Rute untuk menampilkan form tambah barang
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');

// Rute untuk menyimpan barang baru
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');

// Rute untuk menampilkan form edit barang
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');

// Rute untuk mengupdate barang
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');

// Rute untuk menghapus barang
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');

// Rute untuk menampilkan daftar pinjam barang
Route::get('/pinjam-barang', [PinjamBarangController::class, 'index'])->name('pinjam_barang.index');

// Rute untuk menampilkan form tambah pinjam barang
Route::get('/pinjam-barang/create', [PinjamBarangController::class, 'create'])->name('pinjam_barang.create');

// Rute untuk menyimpan pinjam barang baru
Route::post('/pinjam-barang', [PinjamBarangController::class, 'store'])->name('pinjam_barang.store');

// Rute untuk menampilkan form edit pinjam barang
Route::get('/pinjam-barang/{id}/edit', [PinjamBarangController::class, 'edit'])->name('pinjam_barang.edit');

// Rute untuk mengupdate pinjam barang
Route::put('/pinjam-barang/{id}', [PinjamBarangController::class, 'update'])->name('pinjam_barang.update');

// Rute untuk menghapus pinjam barang
Route::delete('/pinjam-barang/{id}', [PinjamBarangController::class, 'destroy'])->name('pinjam_barang.destroy');

// Rute untuk menampilkan daftar stok
Route::get('/stok', [StokController::class, 'index'])->name('stok.index');

// Rute untuk menampilkan form tambah stok
Route::get('/stok/create', [StokController::class, 'create'])->name('stok.create');

// Rute untuk menyimpan stok baru
Route::post('/stok', [StokController::class, 'store'])->name('stok.store');

// Rute untuk menampilkan form edit stok
Route::get('/stok/{id}/edit', [StokController::class, 'edit'])->name('stok.edit');

// Rute untuk mengupdate stok
Route::put('/stok/{id}', [StokController::class, 'update'])->name('stok.update');

// Rute untuk menghapus stok
Route::delete('/stok/{id}', [StokController::class, 'destroy'])->name('stok.destroy');

// Rute untuk menampilkan daftar pengguna
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Rute untuk menampilkan form tambah pengguna
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Rute untuk menyimpan pengguna baru
Route::post('/user', [UserController::class, 'store'])->name('user.store');

// Rute untuk menampilkan form edit pengguna
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

// Rute untuk mengupdate pengguna
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');

// Rute untuk menghapus pengguna
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');