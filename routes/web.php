<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\InformasiController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/daftar-kategori', [KategoriController::class, 'tampil']); 
Route::get('/tambah-kategori', [KategoriController::class, 'create']); 
Route::post('/simpan-kategori', [KategoriController::class, 'simpan']); 
Route::delete('/hapus-kategori/{kategori}', [KategoriController::class, 'hapus'])->name('kategori.hapus'); 
Route::get('/ubah-kategori/{kategori}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
Route::put('/update-kategori',[KategoriController::class, 'update']);

Route::get('/daftar-informasi', [InformasiController::class, 'tampil']); 
Route::get('/tambah-informasi', [InformasiController::class, 'create']); 
Route::post('/simpan-informasi', [InformasiController::class, 'simpan']); 
Route::delete('/hapus-informasi/{informasi}', [InformasiController::class, 'hapus'])->name('informasi.hapus'); 
Route::get('/ubah-informasi/{informasi}', [InformasiController::class, 'ubah'])->name('informasi.ubah');
Route::get('/show-informasi/{informasi}', [InformasiController::class, 'show'])->name('informasi.show');
Route::put('/update-informasi',[InformasiController::class, 'update']);