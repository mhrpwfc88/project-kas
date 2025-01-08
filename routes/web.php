<?php

use App\Http\Controllers\BulanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UangKasessController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::resource('users', UserController::class);
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('siswas', [SiswaController::class, 'index'])->name('siswas.index');
    Route::get('siswas/create', [SiswaController::class, 'create'])->name('siswas.create');
    Route::post('siswas', [SiswaController::class, 'store'])->name('siswas.store');
    Route::get('siswas/{id}', [SiswaController::class, 'show'])->name('siswas.show');
    Route::get('siswas/{id}/edit', [SiswaController::class, 'edit'])->name('siswas.edit');
    Route::put('siswas/{id}', [SiswaController::class, 'update'])->name('siswas.update');
    Route::delete('siswas/{id}', [SiswaController::class, 'destroy'])->name('siswas.destroy');

    Route::get('bulan_pembayarans', [BulanController::class, 'index'])->name('bulan.index');
    Route::get('bulan_pembayarans/create', [BulanController::class, 'create'])->name('bulan.create');
    Route::post('bulan_pembayarans', [BulanController::class, 'store'])->name('bulan.store');
    Route::get('bulan_pembayarans/{id}', [BulanController::class, 'show'])->name('bulan.show');
    Route::get('bulan_pembayarans/{id}/edit', [BulanController::class, 'edit'])->name('bulan.edit');
    Route::put('bulan_pembayarans/{id}', [BulanController::class, 'update'])->name('bulan.update');
    Route::delete('bulan_pembayarans/{id}', [BulanController::class, 'destroy'])->name('bulan.destroy');

    // Route::get('uang_kasses', [UangKasessController::class, 'index'])->name('uang_kasses.index');
    // Route::get('uang_kasses/create', [UangKasessController::class, 'create'])->name('uang_kasses.create');
    // Route::post('uang_kasses', [UangKasessController::class, 'store'])->name('uang_kasses.store');
    // Route::get('uang_kasses/{id}', [UangKasessController::class, 'show'])->name('uang_kasses.show');
    // Route::get('uang_kasses/{id}/edit', [UangKasessController::class, 'edit'])->name('uang_kasses.edit');
    // Route::delete('uang_kasses/{id}', [UangKasessController::class, 'destroy'])->name('uang_kasses.destroy');


    Route::get('pengeluarans', [PengeluaranController::class, 'index'])->name('keluar.index');
    Route::get('pengeluarans/create', [PengeluaranController::class, 'create'])->name('keluar.create');
    Route::post('pengeluarans', [PengeluaranController::class, 'store'])->name('keluar.store');
    Route::get('pengeluarans/{id}', [PengeluaranController::class, 'show'])->name('keluar.show');
    Route::get('pengeluarans/{id}/edit', [PengeluaranController::class, 'edit'])->name('keluar.edit');
    Route::put('pengeluarans/{id}', [PengeluaranController::class, 'update'])->name('keluar.update');
    Route::delete('pengeluarans/{id}', [PengeluaranController::class, 'destroy'])->name('keluar.destroy');

    Route::get('/uang-kas/{bulanId}', [BulanController::class, 'showByBulan'])->name('bulan.kas');
    Route::get('/uang-kas/edit/{id}', [UangKasessController::class, 'edit'])->name('kas.edit');
    Route::put('uang_kasses/{id}', [UangKasessController::class, 'update'])->name('kas.update');

});



require __DIR__ . '/auth.php';
