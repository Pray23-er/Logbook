<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StudentLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.student-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'matric_number' => 'required|min:4',
            'password' => ['required', 'min:8', 'string'],
        ]);

        $credentials = $request->only(['matric_number', 'password']);

        if (Auth::guard('student')->attempt($credentials)) {
            return redirect()->intended(route('student.dashboard'));
        }

        return $this->loginFailed();
    }

    private function loginFailed()
    {
        return redirect()->back()->withErrors(['matric_number' => 'Invalid credentials']);
    }


//     public function logout(Request $request)
//     {
//         Auth::guard('student')->logout();


//         return view('welcome');

// }
public function logout(Request $request)
{
    Auth::guard('student')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/student-login'); // Redirect to the root URL instead of returning a view
}
}
