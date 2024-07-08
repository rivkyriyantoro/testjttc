<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanPegawaiController;
use App\Http\Controllers\KontrakController;

Route::resource('pegawais', PegawaiController::class);
Route::resource('jabatan-pegawais', JabatanPegawaiController::class);
Route::resource('kontraks', KontrakController::class);
