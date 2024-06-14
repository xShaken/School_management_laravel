<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StrandController;
use App\Http\Controllers\SectionController;



Route::resource('subjects', SubjectController::class);
Route::resource('strands', StrandController::class);
Route::resource('sections', SectionController::class);



Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');
Route::post('/subjects/assign', [SubjectController::class, 'assignTeacher'])->name('subjects.assignTeacher');



Route::get('/assign-role', [RoleController::class, 'create'])->name('assign_role.create');
Route::get('/get-users', [RoleController::class, 'getUsers']);
Route::post('/assign-role', [RoleController::class, 'store'])->name('assign_role.store');




Route::resource('teachers', TeacherController::class);
Route::resource('students', StudentController::class);
 

Route::get('/', function () {
    return view('SampleBootstrap');
});
Route::get('/stem', function () {
    return view('stem');
});
Route::get('/abm', function () {
    return view('abm');
});
Route::get('/gas', function () {
    return view('gas');
});
Route::get('/humss', function () {
    return view('humss');
});
Route::get('/tvl', function () {
    return view('tvl');
});

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