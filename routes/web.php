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
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Guest Routes
Route::view('/', 'welcome');
Route::get('/help', [HelpUserController::class, 'help'])->name('help');
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::get('/register', [RegisterUserController::class, 'register'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');
Route::get('/studentRegister', [StudentController::class, 'register'])->name('student_register');
Route::post('/studentRegister', [StudentController::class, 'store'])->name('student_register.store');
Route::get('/student-login', [StudentLoginController::class, 'showLoginForm'])->name('student_login');
Route::post('/student-login', [StudentLoginController::class, 'login'])->name('student_login.store');
Route::get('/loginS', [SchoolLoginController::class, 'login'])->name('school.login');
Route::post('/loginS', [SchoolLoginController::class, 'store'])->name('school.login.store');
Route::get('/loginC', [CompanyLoginController::class, 'login'])->name('company.login');
Route::post('/loginC', [CompanyLoginController::class, 'store'])->name('company.login.store');

// School Routes


    Route::get('/school', [SchoolController::class, 'school'])->name('school.dashboard');
    Route::get('/school/calendar', [SchoolController::class, 'calendar'])->name('school.calendar');

Route::post('/school/calendar', [SchoolController::class, 'storeCalendarEvent'])->name('school.calendar.store');


Route::delete('/school/calendar/{id}', [SchoolController::class, 'deleteCalendarEvent'])->name('school.calendar.delete');
Route::get('/logbook', [SchoolController::class, 'logbook'])->name('logbook.page');

// Company Routes


    Route::get('/company', [CompanyController::class, 'company'])->name('company.dashboard');
    Route::get('/profiles/company', [CompanyController::class, 'profile'])->name('profiles.company');
    Route::get('/profiles/passComp/edit', [CompanyController::class, 'editPassword'])->name('company.password.edit');
    Route::patch('/profiles/passComp', [CompanyController::class, 'updateStudentPassword'])->name('company.password.update');
    Route::get('/profiles/companyViewStudent', [CompanyController::class, 'index'])->name('company.view.student');


Route::post('/logout/student', [StudentLoginController::class, 'logout'])->name('logout.student');
Route::post('/logout/school', [SchoolLoginController::class, 'logout'])->name('logout.school');
Route::post('/logout/company', [CompanyLoginController::class, 'logout'])->name('logout.company');
// Student Routes


    Route::get('/student', [StudentController::class, 'index'])->name('student.dashboard');
    Route::get('/profiles/student', [StudentController::class, 'profile'])->name('profiles.student');
    Route::get('/profiles/password/edit', [StudentController::class, 'editPassword'])->name('student.password.edit');
    Route::patch('/profiles/password', [StudentController::class, 'updateStudentPassword'])->name('student.password.update');
    Route::resource('/records', LogbookController::class);
    Route::resource('/forms', StudentFormController::class);
    Route::resource('/companyform', CompanyFormController::class);
    Route::get('/forms/approve/{id}', [CompanyFormController::class, 'approve'])->name('form.approve');
    Route::get('/forms/reject/{id}', [CompanyFormController::class, 'reject'])->name('form.reject');
    Route::post('/logbook/approve/{id}', [LogbookController::class, 'approve'])->name('logbook.approve');
    Route::post('/logbook/reject/{id}', [LogbookController::class, 'reject'])->name('logbook.reject');

    Route::view('/Sailor/index', 'Sailor.index');
    Route::view('/Sailor/index2', 'Sailor.index2');
    Route::view('/Sailor/register', 'Sailor.register');
    Route::view('/Sailor/help', 'Sailor.help');

    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/register', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('/admin/register', [AdminRegisterController::class, 'register']);
    Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/admin/login', [AdminLoginController::class, 'login']);
    Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('logout.admin');
