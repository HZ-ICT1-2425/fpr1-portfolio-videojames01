<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Routes for blog posts
Route::resource('posts', PostController::class);

// Routes for faqs
Route::resource('faqs', FaqController::class);
