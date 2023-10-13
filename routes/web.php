<?php

use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MentorController;


use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('index');
})->name('index');




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



// ⚒️ Routes for signup⚒️
Route::view('register', 'register')->middleware('guest');
Route::post('/signup', [UserController::class, 'store'])->name('signup')->middleware('guest');

// 🔐Routes for authentication & login🔐
Route::view('login', 'menteelogin')->name('login')->middleware('guest');
Route::post('session', [SessionController::class, 'store'])->name('session');

//👋🏾 Logout route👋🏾
Route::post('logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');

// 📝Routes for mentor profile📝
Route::get('mentor', [MentorController::class, 'display'])->name('admin1')->middleware('auth');
Route::get('allmentors', [MentorController::class, 'viewall'])->name('allmentors')->middleware('auth');
Route::get('profile', [MentorController::class, 'profileview'])->name('profile')->middleware('auth');
Route::put('/profile/update', [MentorController::class, 'update'])->name('profile.update')->middleware('auth');
Route::get('/profile/edit', [MentorController::class, 'profileedit'])->name('profile.edit')->middleware('auth');

Route::get('/mentors/{mentor}', [MentorController::class, 'show'])->name('mentors.show');




// 📝Routes for mentee profile📝

