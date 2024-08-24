<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PaketwisController;
use App\Http\Controllers\PesananController;

// Route::get('/', function () {
//     return view('login');
// });

//ruote untuk menampilkan data paket
Route::get('/paketwis', [PaketController::class, 'index'])->name('dashboard.paket.index');
//route untuk menampilkan form tambah paket
Route::get('/paketwis/create', [PaketController::class, 'create'])->name('dashboard.paket.create');
//route untuk menambahkan data paket
Route::post('/paketwis', [PaketController::class, 'store'])->name('dashboard.paket.store');
//route menampilkan edit data
Route::get('/paketwis/edit/{id}', [PaketController::class, 'edit'])->name('dashboard.paket.edit');
//update data
Route::put('/paketwis/update/{id}', [PaketController::class, 'update'])->name('dashboard.paket.update');
//delete
Route::delete('/paketwis/{id}', [PaketController::class, 'delete'])->name('dashboard.paket.delete');

Route::get('/paketuser', [PaketwisController::class, 'index']);
Route::get('/pesan/{id}', [PaketwisController::class, 'show'])->name('pesan.user');

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

// Route untuk tampilan daftar pesanan
//route untuk menampilkan data
Route::get('/pesanwis', [PesananController::class, 'index'])->name('dashboard.pesanpaket.index');
//route untuk menampilkan data
//Route::get('/pesanwis/show', [PesananController::class, 'show'])->name('dashboard.pesanpaket.show');
//route untuk menampilkan form tambah
Route::get('/pesanwis/create', [PesananController::class, 'create'])->name('dashboard.pesanpaket.create');
//route untuk menambahkan data
Route::post('/pesanwis', [PesananController::class, 'store'])->name('dashboard.pesanpaket.store');
//route menampilkan edit data
Route::get('/pesanwis/edit/{id}', [PesananController::class, 'edit'])->name('dashboard.pesanpaket.edit');
//update data
Route::put('/pesanwis/update/{id}', [PesananController::class, 'update'])->name('dashboard.pesanpaket.update');
//delete
Route::delete('/pesanwis/{id}', [PesananController::class, 'delete'])->name('dashboard.pesanpaket.delete');

//route untuk jenis paket
//ruote untuk menampilkan data
Route::get('/jenis', [JenisController::class, 'index'])->name('dashboard.jns_paket.index');
//route untuk menampilkan form tambah
Route::get('/jenis/create', [JenisController::class, 'create'])->name('dashboard.jns_paket.create');
//route untuk menambahkan data
Route::post('/jenis', [JenisController::class, 'store'])->name('dashboard.jns_paket.store');
//route menampilkan edit data
Route::get('/jenis/edit/{id}', [JenisController::class, 'edit'])->name('dashboard.jns_paket.edit');
//update data
Route::put('/jenis/update/{id}', [JenisController::class, 'update'])->name('dashboard.jns_paket.update');
//delete
Route::delete('/jenis/{id}', [JenisController::class, 'delete'])->name('dashboard.jns_paket.delete');

//route untuk kategori
//ruote untuk menampilkan data
Route::get('/kategori', [KategoriController::class, 'index'])->name('dashboard.kategori.index');
//route untuk menampilkan form tambah
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('dashboard.kategori.create');
//route untuk menambahkan data
Route::post('/kategori', [KategoriController::class, 'store'])->name('dashboard.kategori.store');
//route menampilkan edit data
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('dashboard.kategori.edit');
//update data
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('dashboard.kategori.update');
//delete
Route::delete('/kategori/{id}', [KategoriController::class, 'delete'])->name('dashboard.kategori.delete');


// Route::get('/tabel', [ProgramdarwisController::class, 'index']);
// Route::get('/tabel/create', [ProgramdarwisController::class, 'create'])->name('dashboard.tabel.create');

});
