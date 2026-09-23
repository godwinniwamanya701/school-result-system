<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\LecturerAuthController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\LecturerDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('results', ResultController::class);

Route::resource('students', StudentController::class);

Route::resource('lecturers', LecturerController::class);
Route::resource('courses', CourseController::class);
// Student Authentication
Route::get('/student/login', [StudentAuthController::class, 'showLogin'])
    ->name('student.login');

Route::post('/student/login', [StudentAuthController::class, 'login'])
    ->name('student.login.submit');

Route::post('/student/logout', [StudentAuthController::class, 'logout'])
    ->name('student.logout');
    Route::get('/student/dashboard', [StudentDashboardController::class, 'index'])
    ->name('student.dashboard');


// Lecturer Authentication
Route::get('/lecturer/login', [LecturerAuthController::class, 'showLogin'])
    ->name('lecturer.login');

Route::post('/lecturer/login', [LecturerAuthController::class, 'login'])
    ->name('lecturer.login.submit');

Route::post('/lecturer/logout', [LecturerAuthController::class, 'logout'])
    ->name('lecturer.logout');
    Route::get('/lecturer/dashboard', [LecturerDashboardController::class, 'index'])
    ->name('lecturer.dashboard');