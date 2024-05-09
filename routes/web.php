<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/login', [LoginController::class, 'index']); // ini kalau sudah masuk middleware ditambahin

Route::get('/posts', [PostController::class, 'index']);