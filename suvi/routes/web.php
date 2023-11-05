<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\MentorController;

// auth
Auth::routes();

// front end
Route::get('/', [HomeController::class, 'landing'])->name('landing');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/detail', [CourseController::class, 'detail'])->name('course_detail');
Route::get('/account', [AccountController::class, 'index'])->name('account');
Route::get('/cart', [AccountController::class, 'cart'])->name('cart');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

// back end
Route::get('/backend', [AdminController::class, 'index'])->name('admin-home');
// mentor
Route::get('/backend/mentor', [MentorController::class, 'index'])->name('mentor-index');
Route::get('/backend/mentor/create', [MentorController::class, 'create'])->name('mentor-c');
Route::post('/backend/mentor/create/process', [MentorController::class, 'c_process'])->name('mentor-cp');
Route::get('/backend/mentor/edit/{id?}', [MentorController::class, 'edit'])->name('mentor-e');
Route::post('/backend/mentor/edit/process/{id?}', [MentorController::class, 'e_process'])->name('mentor-ep');
Route::delete('/backend/mentor/delete', [MentorController::class, 'delete'])->name('mentor-d');
