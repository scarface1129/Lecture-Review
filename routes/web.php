<?php

use App\Models\Department;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ReviewController;

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
Route::get('/courses/{id}', [LectureController::class,'show'])->name('lecture')->middleware('auth');
Route::get('/lecturer/{id}', [LecturerController::class,'show'])->name('lecturer')->middleware('auth');
Route::get('/review/{id}', [ReviewController::class,'show'])->name('review')->middleware('auth');
Route::post('/review', [ReviewController::class,'store'])->name('review_store')->middleware('auth');
Route::get('/', function () {return view('welcome');})->name('home');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('departments', [DepartmentController::class,'department'])->name('department')->middleware('auth');
Route::get('/lecturers/create', [LecturerController::class,'create'])->name('lecturer_create')->middleware('auth');
Route::post('/lecturers/create', [LecturerController::class,'store'])->name('lecturer_store')->middleware('auth');
Route::post('/course/create', [LectureController::class,'store'])->name('lecture_store')->middleware('auth');
Route::get('/course/create', [LectureController::class,'create'])->name('lecture_create')->middleware('auth');

