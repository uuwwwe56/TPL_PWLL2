<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/dosen',[DosenController::class,'index'])->name('dosen');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.store');

Route::get('/jadwal',[JadwalController::class,'index'])->name('jadwal');
Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('jadwal.create');
Route::post('/jadwal', [JadwalController::class, 'store'])->name('jadwal.store');

Route::get('/matkul',[MatkulController::class,'index'])->name('matkul');
Route::get('/matkul/create', [MatkulController::class, 'create'])->name('matkul.create');
Route::post('/matkul', [MatkulController::class, 'store'])->name('matkul.store');

Route::get('/krs',[KrsController::class,'index'])->name('krs');
Route::get('/krs/create', [KrsController::class, 'create'])->name('krs.create');
Route::post('/krs', [KrsController::class, 'store'])->name('krs.store');

Route::get('/mhs',[MahasiswaController::class,'index'])->name('mhs');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mhs.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mhs.store');