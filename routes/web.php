<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/login', function () {
    return view('login.index', [
        'title' => 'Login'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);