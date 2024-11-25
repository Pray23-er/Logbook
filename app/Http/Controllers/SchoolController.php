<?php
// app/Http/Controllers/SchoolController.php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use App\Models\company_form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// class SchoolController extends Controller
// {
//     public function school(Request $request)
//     {
//         $registeredStudents = null;
//         $company_forms = null;
//         $authenticatedSchool = null;

//         if (Auth::guard('school')->check()) {
//             $authenticatedSchool = Auth::guard('school')->user();
//             $authenticatedSchool->load('students');
//             $registeredStudents = $authenticatedSchool->students;
//             $company_forms = company_form::all();
//         } else {
//             return redirect()->route('school.login');
//         }

//         return view('dashboard.school', [
//             'company_forms' => $company_forms,
//             'registeredStudents' => $registeredStudents ?? collect(),
//             'authenticatedSchool' => $authenticatedSchool
//         ]);
//     }
// }


class SchoolController extends Controller
{
    public function school(Request $request)
    {
        if (!Auth::guard('school')->check()) {
            return redirect()->route('school.login');
        }

        $school = Auth::guard('school')->user();
        $school->load('students');

        $matricNumber = $request->query('matric_number');

        if ($matricNumber) {
            $selectedStudent = Student::where('matric_number', $matricNumber)->first();
            $studentLogbooks = $selectedStudent->logbooks;

            return view('dashboard.school', [
                'company_forms' => company_form::all(),
                'registeredStudents' => $school->students,
                'authenticatedSchool' => $school,
                'selectedStudent' => $selectedStudent,
                'studentLogbooks' => $studentLogbooks
            ]);
        }

        return view('dashboard.school', [
            'company_forms' => company_form::all(),
            'registeredStudents' => $school->students,
            'authenticatedSchool' => $school
        ]);
    }
}
