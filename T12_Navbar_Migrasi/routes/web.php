<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dasboard');
Route::get('/promo', [PromoController::class, 'index'])->name('promo');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/create', [BukuController::class, 'create'])->name('create');
Route::post('/store', [BukuController::class, 'store'])->name('store');
Route::get('/detail/{id}/detail-data-buku', [BukuController::class, 'show'])->name('detailbuku');
// delete
Route::delete('/delete/{id}/hapus-data-buku', [BukuController::class, 'destroy'])->name('deletebuku');

// edit
Route::get('/edit/{id}/edit-data-buku', [BukuController::class, 'edit'])->name('editbuku');
Route::put('/update/{id}/update-data-buku', [BukuController::class, 'update'])->name('update');
