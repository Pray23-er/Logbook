<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Logbook;
use App\Models\Student_form;
use Illuminate\Http\Request;

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
}
