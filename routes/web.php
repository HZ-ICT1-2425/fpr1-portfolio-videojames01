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
Route::get('/posts', [PostController::class, 'index'])->name('blog');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('/faq', [FaqController::class, 'index'])->name('faq');
