<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController; // Already present
use App\Http\Controllers\AboutController; // Already present
use App\Http\Controllers\SubscriptionController; // NEW: Add this line
use Illuminate\Support\Facades\Route;

// Home Page Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Buy Page Route - Now correctly points to BookController@show
Route::get('/buy/{book_slug}', [BookController::class, 'show'])->name('buy');

// About Page Route - Already correct
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Subscribe Form Submission Route - NEW: Add this line
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');

