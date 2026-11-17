<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\Admin\DasboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [DasboardController::class, 'index'])
   ->name('admin.dashboard');

//Route untuk Barang
Route::resource('barang', BarangController::class);
