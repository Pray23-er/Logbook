<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Student_form;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company()
    {
        if (auth()->guard('company')->check()) {
            $company = auth()->guard('company')->user();
            $student_forms = $company->students;

            return view('dashboard.company', compact('company', 'student_forms'));
        } else {
            return redirect()->route('login');
        }
    }

}
