<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admin_users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $adminUser = new AdminUser();
        $adminUser->name = $request->input('name');
        $adminUser->email = $request->input('email');
        $adminUser->password = Hash::make($request->input('password'));
        $adminUser->save();

        return redirect()->route('admin.login');
    }
}
