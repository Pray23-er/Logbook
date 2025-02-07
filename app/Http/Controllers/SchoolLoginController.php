<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SchoolLoginController extends Controller
{
    public function login(){
        return view('auth.loginS');
    }

    public function store(Request $request)
    {
        // validate the form data
        $validated = $request->validate([
            'email'=> 'required|email',
            'password' => ['required', 'min:8', 'string'],

        ]);
        // attempt to login the user
        if(Auth::guard('school')->attempt(['email'=>$request->email, 'password' => $request->password],
        $request->remember)){
            // if sucessful then redirect to their intended location
            return redirect()->intended(route('school.dashboard'));
        }
        else{
            // if unsucessful, thrn redirect back to the login page
            return back()->withErrors([
                'email'=>'The provided credentials does not match our records, Pls register your account.'
            ]);
        }


    }
    public function logout(Request $request)
{
    Auth::guard('school')->logout(); // Use the 'school' guard
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/loginS');
}


}
