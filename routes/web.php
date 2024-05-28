<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminTicketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomepageController;

use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomepageController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/ticket/{ticket:slug}', [TicketController::class, 'show']);
Route::get('/tickets', [TicketController::class, 'index']);
Route::get('/testimonial', [TestimonialController::class, 'index']);

Route::get('/dashboard/tickets/checkSlug', [AdminTicketController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/tickets', AdminTicketController::class)->middleware('admin');
Route::get('/dashboard/blogs/checkSlug', [AdminBlogController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/posts', AdminBlogController::class)->middleware('admin');