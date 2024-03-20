<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeacherController;



 // registration:



 Route::get('/login', [AuthController::class, 'index'])->name('login');
 Route::post('/post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
 Route::get('/registration', [AuthController::class, 'registration'])->name('register');
 Route::post('/post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
 Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
 Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
 


 
//students route.

Route::get('/student',[StudentController::class,'index'])->name('students.index');
Route::get('/student/create',[StudentController::class,'create'])->name('students.create');
Route::post('/student',[StudentController::class,'store'])->name('students.store');
Route::get('/student/{student}/edit',[StudentController::class,'edit'])->name('students.edit');
Route::put('/student/{student}/update',[StudentController::class,'update'])->name('students.update');
Route::delete('/student/{student}/destroy',[StudentController::class,'destroy'])->name('students.destroy'); 


//Teachers  route

Route::get('/teacher',[TeacherController::class,'index'])->name('teachers.index');
Route::get('/teacher/create',[TeacherController::class,'create'])->name('teachers.create');
Route::post('/teacher',[TeacherController::class,'store'])->name('teachers.store');
Route::get('/teacher/{teacher}/edit',[TeacherController::class,'edit'])->name('teachers.edit');
Route::put('/teacher/{teacher}/update',[TeacherController::class,'update'])->name('teachers.update');
Route::delete('/teacher/{teacher}/destroy',[TeacherController::class,'destroy'])->name('teachers.destroy'); 