<?php

use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MenteeController;
use App\Http\Controllers\MentorController;
use App\Models\User;
use App\Http\Controllers\mentorLoginController;


use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\MrequestController;
Route::get('/', function () {
    return view('index');
})->name('index')->middleware('guest');




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
Route::view('mlogin', 'mentorlogin')->name('mlogin')->middleware('guest');
Route::post('mentorlogin', [mentorLoginController::class, 'store'])->name('mentorlogin');
//👋🏾 Logout route👋🏾
Route::post('logout', [SessionController::class, 'destroy'])->name('logout');

// 📝Routes for mentor profile📝
Route::middleware('auth','mentee')->group(function () {
    Route::get('/mentor', [MentorController::class, 'display'])->name('admin1');
    Route::get('/allmentors', [MentorController::class, 'viewall'])->name('allmentors');
    Route::get('/profile', [MentorController::class, 'profileview'])->name('profile');
    Route::put('/profile/update', [MentorController::class, 'update'])->name('profile.update');
    Route::get('/profile/edit', [MentorController::class, 'profileedit'])->name('profile.edit');
    Route::get('/mentor/{mentor}',[MentorController::class, 'showProfile'])->name('mentor.profile');
    //☠️mentorrequest routes☠️
    // Route::post('/send-mentorship-request/{mentor}', [MrequestController::class, 'sendRequest'])->name('send.mentorship.request');
    Route::post('/mentors/requests', [MrequestController::class, 'store'])->name('mentors.requests');
    Route::get('/mentors/requests', [MrequestController::class, 'showRequest'])->name('request');
    Route::delete('/mentors/requests/{id}', [MrequestController::class, 'deleteRequest'])->name('request.delete');
});





// 📝Routes for mentor profile📝


Route::middleware('auth','mentor')->group(function () {
    Route::get('/mentee', [MenteeController::class, 'display'])->name('admin2');
    Route::get('/mprofile', [MenteeController::class, 'profileview'])->name('profile');
    Route::put('/mprofile/update', [MenteeController::class, 'update'])->name('profile.update');
    Route::get('/mprofile/edit', [MenteeController::class, 'profileedit'])->name('profile.edit');
    Route::get('/allrequests', [MenteeController::class, 'viewall'])->name('allrequests');
    Route::get('/mentee/{mentee}',[MenteeController::class, 'showProfile'])->name('mentee.profile');
    Route::delete('/mentee/requests/{id}', [MenteeController::class, 'deleteRequest'])->name('requests.delete');
});
