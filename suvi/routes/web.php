<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\CourseController as CourseController;
use App\Http\Controllers\AccountController as AccountController;
use App\Http\Controllers\CartController as CartController;
use App\Http\Controllers\SearchController as SearchController;
use App\Http\Controllers\PaymentController as PaymentController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/detail', [CourseController::class, 'detail'])->name('course_detail');
Route::get('/account', [AccountController::class, 'index'])->name('account');
Route::get('/cart', [AccountController::class, 'cart'])->name('cart');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
