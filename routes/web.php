<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('user.profile');
    Route::get('/transaction', [App\Http\Controllers\HomeController::class, 'transaction'])->name('user.transaction');
    Route::get('/bill', [App\Http\Controllers\HomeController::class, 'bill'])->name('user.bill');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
});

