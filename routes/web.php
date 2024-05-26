<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('is_admin')->group(function () {
    Route::get('/dashboard/barang', [BarangController::class, 'index'])->name('barang.index');
    Route::get('/dashboard/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/dashboard/barang/create', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/dashboard/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::post('/dashboard/barang/edit/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::get('/dashboard/delete/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');

    Route::get('/dashboard/kategori', function () {
        return view('welcome');
    })->name('kategori.index');
});

require __DIR__.'/auth.php';
