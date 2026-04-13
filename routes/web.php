<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', [ProfileController::class, 'index'])->name('home');
Route::post('/add-profile', [ProfileController::class, 'store'])->name('profile.store');
Route::post('/clear-profiles', [ProfileController::class, 'clear'])->name('profile.clear');
