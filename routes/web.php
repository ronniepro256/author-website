<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/buy/{book_slug}', [BookController::class, 'show'])->name('buy');
Route::get('/about', [AboutController::class, 'index'])->name('about');