<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;

Auth::routes();
Route::get('/', [PostController::class, 'index'])->name('home');
