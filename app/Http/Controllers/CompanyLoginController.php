<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CompanyLoginController extends Controller
{
    public function login(){
        return view('auth.loginC');
    }

    public function store(Request $request)
    {
        // validate the form data
        $validated = $request->validate([
            'email'=> 'required|email',
            'password' => ['required', 'min:8', 'string'],

        ]);
        // attempt to login the user
        if(Auth::guard('company')->attempt(['email'=>$request->email, 'password' => $request->password],
        $request->remember)){
            // if sucessful then redirect to their intended location
            return redirect()->intended(route('company.dashboard'));
        }
        else{
            // if unsucessful, thrn redirect back to the login page
            return back()->withErrors([
                'email'=>'The provided credentials does not match our records',
                'password'=>'invalid password'

            ]);
            return to_route('register');
        }


    }
    public function logout(Request $request)
{
    Auth::guard('company')->logout(); // Use the 'school' guard
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/loginC');
}



}
