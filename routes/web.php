<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;

Route::get('/', [HomeController::class, 'index'] );
Route::get('/profil/{nama?}', [ProfilController::class, 'index'] );
Route::get('/kontak', [KontakController::class, 'index'] );
Route::get('/tentang', [TentangController::class, 'index'] );

// Routing untuk CRUD artikel
Route::get('/artikel', [ArtikelController::class, 'index'] );

Route::get('/artikel/tambah', [ArtikelController::class, 'create']);
Route::post('/artikel', [ArtikelController::class, 'store']);

Route::get('/artikel/{id}/edit', [ArtikelController::class, 'edit']);
Route::put('/artikel/{id}', [ArtikelController::class, 'update']);

Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy']);

// Komentar
Route::post('/artikel/{id}/komentar', [ArtikelController::class, 'kirimKomentar']);
Route::delete('/komentar/{id}', [ArtikelController::class, 'destroyKomentar']);

// Untuk Menampilkan
Route::get('/artikel/{id}', [ArtikelController::class, 'show']);
