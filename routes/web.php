<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OnlineRegisteringController;
use App\Http\Controllers\ContactController;  
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

// Registration routes
Route::get('/register/online', [OnlineRegisteringController::class, 'create'])->name('register.online');
Route::post('/register/online', [OnlineRegisteringController::class, 'store'])->name('register.store');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

require __DIR__.'/auth.php';
