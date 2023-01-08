<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/course', [CourseController::class, 'index']);
Route::get('/course-detail', [CourseController::class, 'displayCourseDetail']);

Route::get('/course-checkout', [CourseController::class, 'displayCourseCheckout']);
Route::get('/course-payment', [CourseController::class, 'displayCoursePayment']);
Route::get('/course-checkout-success', [CourseController::class, 'displayCourseSuccess']);

Route::get('/user/setting', [UserController::class, 'setting']);
Route::get('/user/order', [UserController::class, 'myorder']);
Route::get('/user/class', [UserController::class, 'myclass']);