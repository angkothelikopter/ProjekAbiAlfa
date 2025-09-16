<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/articles', [PageController::class, 'articles'])->name('articles');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

