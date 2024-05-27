<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ViewController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('is_admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/barang', [BarangController::class, 'index'])->name('barang.index');
    Route::get('/dashboard/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/dashboard/barang/create', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/dashboard/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::post('/dashboard/barang/edit/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::get('/dashboard/barang/delete/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');

    Route::get('/dashboard/promo', [PromoController::class, 'index'])->name('promo.index');
    Route::get('/dashboard/promo/create', [PromoController::class, 'create'])->name('promo.create');
    Route::post('/dashboard/promo/create', [PromoController::class, 'store'])->name('promo.store');
});

Route::middleware('is_superadmin')->group(function () {
    Route::get('/dashboard/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/dashboard/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/dashboard/kategori/create', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/dashboard/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::post('/dashboard/kategori/edit/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::get('/dashboard/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
});

require __DIR__ . '/auth.php';
