<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('dashboard.student');
    }
    public function register(){
        return view('auth.studentRegister');
    }
    public function store(Request $request)
    {
        $request->validate([
            'matric_number' => 'required|unique:students',
            'firstname' => 'required',
            'lastname' => 'required',
            'course_of_study' => 'required',
            'level' => 'required',
            'year' => 'required',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:students',
            'phone_number' => 'required',
            'school_id' => 'required|exists:schools,id',
        ]);

        $student = new Student();
        $student->matric_number = $request->matric_number;
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->course_of_study = $request->course_of_study;
        $student->level = $request->level;
        $student->year = $request->year;
        $student->email = $request->email;
        $student->phone_number = $request->phone_number;
        $student->school_id = $request->school_id;
        $student->password = bcrypt($request->password);
        $student->save();

        return redirect()->route('student_login')->with('success', 'Student created successfully!');
    }
    // public function index()
    // {
    //     $students = Student::all();
    //     return view('students.index', compact('students'));
    // }
}
