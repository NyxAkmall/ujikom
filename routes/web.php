<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Definisikan route untuk halaman home
Route::get('/', [PageController::class, 'home'])->name('home');

// Definisikan route untuk halaman about
Route::get('/about', [PageController::class, 'about'])->name('about');
