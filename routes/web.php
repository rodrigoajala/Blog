<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/posts/search', [PostController::class, 'search'])->name('posts.search');
Route::resource('posts', PostController::class);
