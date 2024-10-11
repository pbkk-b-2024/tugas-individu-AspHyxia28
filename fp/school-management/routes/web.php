<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamGradeController;

Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('classes', ClassController::class);
Route::resource('grades', GradeController::class);
Route::resource('exams', ExamController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return redirect()->route('students.index');
});

Route::resource('students', StudentController::class);
Route::resource('exam-grades', ExamGradeController::class);
Route::resource('classes', ClassController::class);