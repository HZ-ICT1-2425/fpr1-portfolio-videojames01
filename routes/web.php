<?php

use App\Http\Controllers\BlogController;
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

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/study-choice', function () {
    return view('study-choice');
})->name('study-choice');

Route::get('/swot-analysis', function () {
    return view('swot-analysis');
})->name('swot-analysis');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');
