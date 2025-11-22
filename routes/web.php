<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', [PostController::class,'home'])->name('posts.home');
Route::get('posts/search', [PostController::class,'search'])->name('posts.search');
Route::resource('posts', PostController::class);
Route::resource('users',UserController::class);
