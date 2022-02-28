<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
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

Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages/about-us');
});
Route::get('/coursespage', function () {
    return view('pages/courses');
});
// Route::get('/contact', function () {
//     return view('pages/contact');
// });

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::resource('/admin',AdminController::class);
Route::resource('/course',CourseController::class);
Route::resource('/user',UserController::class);
Route::resource('/comment',CommentController::class);