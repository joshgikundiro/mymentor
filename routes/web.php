<?php

use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('index');
})->name('index');

// ⭐signup links⭐
Route::view('signup/mentor', 'mentorsignup');
Route::view('signup/mentee', 'menteesignup');

// Route::view('login/mentor', 'mentorlogin');
Route::view('login/mentor', 'mentorlogin');
Route::view('login/mentee', 'menteelogin');

Route::view('logins','logins');
// Route::view('login/mentee', 'menteelogin');

// Route::view('login', 'login');

// sample routes for courses
Route::get('/courses', function () {
    return view('courses', [
        'courses' => Course::all()
    ]);
})->whereNumber('courses');
Route::get('courses/{course}', function ($id) {
    return view('course', [
        'course' => Course::findorfail($id)
    ]);
});
Route::get('categories/{category}', function ($category) {
    return view('courses', [
        'courses' => $category->courses
    ]);
});
Route::get('/welcome', function () {
    return view('./mentees/welcome');
});
// end

// Route::post('/signup', 'AuthController@store');
Route::post('/signup', [AuthController::class, 'store']);


// ⭐Yt tutorial about image upload begins⭐
Route::match(['get', 'post'], '/emp', [EmployeeController::class, 'index']);

Route::post('/addimage', [EmployeeController::class, 'store'])->name('addimage');

// ⭐additional
// Route::resource('employee',EmployeeController::class)->except(['show','edit','update','delete']);
// Route::post('/reg', [EmployeeController::class,'store'])->name('reg');

Route::view('admin', './mentors/admin');
