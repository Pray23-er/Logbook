<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Company;

class RegisterUserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:5', 'max:255', 'string'],
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'min:8',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
            ],
            'type' => 'required',
        ]);

        if($validated['type'] =='school')
        {
            $school = School::create([
                'name' => $request->name,
                'email'=> $request->email,
                'password'=> bcrypt($request->password),
            ]);
            return to_route('school.login');
        }

        elseif($validated['type'] =='company')
        {
            $company = Company::create([
                'name' => $request->name,
                'email'=> $request->email,
                'password'=> bcrypt($request->password),
            ]);
            return to_route('company.login');
        }
    }
}

