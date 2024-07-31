<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/hasilkarya', function () {
    return view('hasilkarya');
})->middleware(['auth', 'verified'])->name('hasilkarya');

Route::get('/jasa', function () {
    return view('jasa');
})->middleware(['auth', 'verified'])->name('jasa');

require __DIR__.'/auth.php';
