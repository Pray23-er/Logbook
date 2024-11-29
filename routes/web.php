<?php
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LogbookController;

use App\Http\Controllers\SchoolLoginController;
use App\Http\Controllers\SchoolController;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\StudentLoginController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\CompanyLoginController;

use App\Http\Controllers\HelpUserController;

use App\Http\Controllers\StudentFormController;
use App\Http\Controllers\CompanyFormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome');
Route::get('/company', [CompanyController::class, 'company'])->name('company.dashboard');
Route::get('/school', [SchoolController::class, 'school'])->name('school.dashboard');
Route::get('/student', [StudentController::class, 'index'])->name('student.dashboard');
Route::get('/studentRegister', [StudentController::class, 'register'])->name('student_register');
Route::post('/studentRegister', [StudentController::class, 'store'])->name('student_register.store');

Route::get('/student-login', [StudentLoginController::class, 'showLoginForm'])->name('student_login');
Route::post('/student-login', [StudentLoginController::class, 'login'])->name('student_login.store');
Route::post('/logout', [SchoolLoginController::class,'logout'])->name('logout');
Route::post('/logout', [StudentLoginController::class,'logout'])->name('logout');

Route::get('/help',[HelpUserController::class, 'help'])->name('help');

Route::get('/login',[loginController::class, 'login'])->name('login');



Route::get('/register',[RegisterUserController::class, 'register'])->name('register');
Route::post('/register',[RegisterUserController::class, 'store'])->name('register.store');



Route::get('/loginS',[SchoolLoginController::class,'login'])->name('school.login');
Route::post('/loginS',[SchoolLoginController::class, 'store'])->name('school.login.store');

Route::get('/loginC',[CompanyLoginController::class,'login'])->name('company.login');
Route::post('/loginC',[CompanyLoginController::class, 'store'])->name('company.login.store');
// Route::post('/logout', [CompanyLoginController::class,'logout'])->name('logout');


Route::resource('/records', LogbookController::class);
Route::resource('/forms', StudentFormController::class);
Route::resource('/companyform', CompanyFormController::class);

// routes/web.php

Route::get('/forms/approve/{id}', [CompanyFormController::class, 'approve'])->name('form.approve');
Route::get('/forms/reject/{id}', [CompanyFormController::class, 'reject'])->name('form.reject');

// web.php
Route::post('/logbook/approve/{id}', [LogbookController::class, 'approve'])->name('logbook.approve');
Route::post('/logbook/reject/{id}', [LogbookController::class, 'reject'])->name('logbook.reject');




Route::get('/profiles/student', [StudentController::class, 'profile'])->name('profiles.student');
Route::get('/profiles/company', [CompanyController::class, 'profile'])->name('profiles.company');

// web.php



// routes/web.php
// routes/web.php

// routes/web.php

Route::get('/profiles/password/edit', [StudentController::class, 'editPassword'])->name('student.password.edit');
Route::patch('/profiles/password', [StudentController::class, 'updateStudentPassword'])->name('student.password.update');

Route::get('/profiles/passComp/edit', [CompanyController::class, 'editPassword'])->name('company.password.edit');
Route::patch('/profiles/passComp', [CompanyController::class, 'updateStudentPassword'])->name('company.password.update');

Route::get('/profiles/companyViewStudent', [CompanyController::class, 'index'])->name('company.view.student');
