<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index'] );

Route::get('/profil', [ProfilController::class, 'index'] );

Route::get('/kontak', [KontakController::class, 'index'] );

Route::get('/tentang', [TentangController::class, 'index'] );