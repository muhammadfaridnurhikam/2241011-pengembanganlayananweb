<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiPenjualanController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('kategori', [KategoriController::class, 'index']);
Route::get('kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('kategori', [KategoriController::class, 'store']);
Route::get('kategori/{id}', [KategoriController::class, 'show']);
Route::get('kategori/{id}/edit', [KategoriController::class, 'edit']);
Route::put('kategori/{id}', [KategoriController::class, 'update']);
Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::resource('kategori', KategoriController::class);


Route::resource('produk', ProdukController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('transaksi-penjualans', TransaksiPenjualanController::class);



