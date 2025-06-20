<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

// Semua route yang butuh login
Route::middleware(['auth'])->group(function () {
    // Route untuk profil user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk transaksi (CRUD)
    Route::resource('/transaksi', TransaksiController::class);
});

// Route Halaman Fitur
Route::get('/fitur', function () {
    return view('fitur');
})->name('fitur');

// Route Halaman Cara Kerja
Route::get('/cara-kerja', function () {
    return view('cara-kerja');
})->name('cara-kerja');

// Route Halaman Tentang
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

require __DIR__.'/auth.php';
