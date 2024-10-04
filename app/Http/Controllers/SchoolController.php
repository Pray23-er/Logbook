<?php
// app/Http/Controllers/SchoolController.php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use App\Models\company_form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolController extends Controller
{
    public function school(Request $request)
    {
        $registeredStudents = null;
        $company_forms = null;
        $authenticatedSchool = null;

        if (Auth::guard('school')->check()) {
            $authenticatedSchool = Auth::guard('school')->user();
            $authenticatedSchool->load('students');
            $registeredStudents = $authenticatedSchool->students;
            $company_forms = company_form::all();
        } else {
            return redirect()->route('school.login');
        }

        return view('dashboard.school', [
            'company_forms' => $company_forms,
            'registeredStudents' => $registeredStudents ?? collect(),
            'authenticatedSchool' => $authenticatedSchool
        ]);
    }
}
