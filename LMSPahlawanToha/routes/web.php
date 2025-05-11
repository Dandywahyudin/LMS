<?php

use App\Http\Controllers\ExamsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route khusus admin
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/dashboard', [ExamsController::class, 'index'])->name('admin.dashboard');

    
    Route::get('/admin/settings', function () {
        return view('admin.settings');
    })->name('admin.settings');
    
    Route::get('/admin/ujian/create', [ExamsController::class, 'create'])->name('exam.create');
    Route::post('/admin/ujian', [ExamsController::class, 'store'])->name('exam.store');
});

// Route khusus siswa
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Tambahkan route siswa lainnya di sini
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
