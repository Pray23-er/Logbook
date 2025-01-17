<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Logbook;

use App\Models\Student_form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    public function company()
    {
        if (auth()->guard('company')->check()) {
            $company = auth()->guard('company')->user();
            $company->load('logbooks', 'students');
            $logbooks = $company->logbooks;

            return view('dashboard.company', compact('company'));
        } else {
            return redirect()->route('login');
        }
    }

    public function profile()
    {
        $company = auth('company')->user();
        return view('profiles.company', compact('company'));
    }


    public function editPassword()
{
    return view('profiles.passComp');
}


public function updateStudentPassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',
    ]);

    $company = auth('company')->user();

    if (!Hash::check($request->current_password, $company->password)) {
        return back()->withErrors(['current_password' => 'Current password is incorrect']);
    }

    $company->password = bcrypt($request->password);
    $company->save();

    return redirect()->route('company.dashboard')->with('success', 'Password updated successfully');
}

public function index()
{
    $company = auth()->guard('company')->user();
    $student_forms = $company->student_forms;

    return view('profiles.companyViewStudent', compact('student_forms'));
}

}
