<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminTicketController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyBookingController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\MyTestimonialController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomepageController;

use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TransactionController;
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
Route::get('/gallery', [GalleryController::class, 'index']);

Route::get('/testimonials', [TestimonialController::class, 'index']);
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store')->middleware('auth');
Route::get('/about-us', [AboutUsController::class, 'index']);

Route::get('/dashboard/tickets/checkSlug', [AdminTicketController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/tickets', AdminTicketController::class)->middleware('admin');
Route::get('/dashboard/posts/checkSlug', [AdminBlogController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/posts', AdminBlogController::class)->middleware('admin');
Route::resource('/dashboard/galleries', AdminGalleryController::class)->middleware('admin');

Route::resource('/transactions', TransactionController::class)->middleware('auth');

Route::get("/myprofile", [MyProfileController::class, "index"]);
Route::put("/myprofile/saveprofile", [MyProfileController::class, "saveprofile"]);
Route::get('/mybookings', [MyBookingController::class, 'index'])->middleware('auth');
Route::get('/mytestimonials', [MyTestimonialController::class, 'index'])->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [AdminBlogController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/posts', AdminBlogController::class)->middleware('admin');
