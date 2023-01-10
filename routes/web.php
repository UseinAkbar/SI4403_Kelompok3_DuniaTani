<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CommunityController;

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
Route::resource('/course', CourseController::class);
// Route::resource('/course-checkout', PaymentController::class);
Route::get('/course-checkout/{course}', [CourseController::class, 'displayCourseCheckout']);
Route::post('/course-checkout/{course}', [CourseController::class, 'displayCourseCheckout']);
Route::get('/course-payment/{course}', [CourseController::class, 'displayCoursePayment']);
Route::post('/course-payment/{course}', [CourseController::class, 'PaymentMethod']);
Route::get('/course-checkout-success', [CourseController::class, 'displayCourseSuccess']);


// route for login register
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// route for user pelajar
Route::get('/user', [UserController::class, 'index']);
Route::put('/user/{user}', [UserController::class, 'update']);
Route::get('/user/order', [UserController::class, 'myorder']);
Route::get('/user/class', [UserController::class, 'myclass']);
Route::get('/user/setting', [UserController::class, 'setting']);
Route::put('/user/setting/{user}', [UserController::class, 'update']);


Route::get('/gurutani/addclass', [GuruController::class, 'addclass']);
Route::get('/gurutani/inbox', [GuruController::class, 'myinbox']);
Route::get('/gurutani/setting', [GuruController::class, 'setting']);
// Route::get('/gurutani/setting', [UserController::class, 'index']);
Route::put('/gurutani/setting/{user}', [GuruController::class, 'update']);

Route::get('/gurutani/login', [GuruController::class, 'loginGuru']);
Route::post('/gurutani/login', [LoginController::class, 'authenticate']);
Route::post('/gurutani/addclass', [CourseController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/event', [EventController::class, 'displayEvent']);
Route::get('/community', [CommunityController::class, 'displayCommunity']);