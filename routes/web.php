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

Route::get('/posts', [PostController::class, 'index'])->name('blog');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/faq', [FaqController::class, 'index'])->name('faq');
