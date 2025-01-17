<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\AdminUser;
use App\Models\School;
use App\Models\Student;
use App\Models\Logbook;
use App\Models\Company;
use App\Models\Student_form;
use App\Models\company_form;
use App\Models\Event;

class AdminDashboardController extends Controller
{
    public function index()
{
    // Retrieve data from all tables
    $schools = School::all();
    $students = Student::all();
    $logbooks = Logbook::all();
    $companies = Company::all();
    $student_forms = Student_form::all();
    $company_forms = company_form::all();
    $events = Event::all();

    // Retrieve the admin user data
    $admin = Auth::guard('admin')->user();

    // Return the view with the retrieved data
    return view('admin.dashboard', compact(
        'schools',
        'students',
        'logbooks',
        'companies',
        'student_forms',
        'company_forms',
        'events',
        'admin'
    ));
}
}



