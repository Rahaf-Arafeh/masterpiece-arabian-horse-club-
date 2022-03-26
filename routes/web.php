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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages/about-us');
});
Route::get('/coursespage', function () {
    return view('pages/courses');
});




Auth::routes();
 Route::get('/coursespage', [CourseController::class, 'show']);
 Route::get('/coursedetails/{course}',[CourseController::class,'showSingleCourse'])->name('course.showSingleCourse');
 Route::get('/search', [CourseController::class, 'search'])->name('course.search');
 Route::post('/courses/{course}', [CourseController::class, 'book'])->name('courses.book');
 Route::post('/coursedetails/{course}',[CourseController::class,'storeComment'])->name('coursedetails.storeComment');
 Route::get('/', [CourseController::class, 'bestprice'])->name('home.bestprice');


 Route::group(['middleware'=>['auth','admin']],function(){
     Route::resource('/admin',AdminController::class);
     Route::resource('/course',CourseController::class);
     Route::resource('/user',UserController::class);
     Route::resource('/comment',CommentController::class);

     
    });
    Route::group(['middleware'=>['auth']],function(){
    Route::get('/userProfile', [UserController::class, 'userProfile'])->name('auth.userProfile');
    Route::put('/userProfile/{user}', [UserController::class, 'updateUserProfile'])->name('user.updateUserProfile');
    
});