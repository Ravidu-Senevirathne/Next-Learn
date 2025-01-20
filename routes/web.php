<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OnlineRegisteringController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Registration routes
Route::get('/register/online', [OnlineRegisteringController::class, 'create'])->name('register.online');
Route::post('/register/online', [OnlineRegisteringController::class, 'store'])->name('register.store');

require __DIR__.'/auth.php';
