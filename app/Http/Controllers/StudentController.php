<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $student = auth('student')->user();
        $logbookRecordsCount = $student->logbooks()->count();
        $approvedRecordsCount = $student->logbooks()->where('status', 'approved')->count();
        $pendingApprovalCount = $student->logbooks()->where('status', 'pending')->count();
        $recentLogbookRecords = $student->logbooks()->latest()->take(5)->get();
        $companyFormFilled = $student->company_forms()->exists();
        $companyFormApproved = $student->company_forms()->where('status', 'approved')->exists();

        return view('dashboard.student', compact('logbookRecordsCount', 'approvedRecordsCount', 'pendingApprovalCount', 'recentLogbookRecords', 'companyFormFilled', 'companyFormApproved','student'));
    }

    public function register()
    {
        return view('auth.studentRegister');
    }

    public function editPassword()
    {
        return view('profiles.password');
    }

    public function updateStudentPassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $student = auth('student')->user();

        if (!Hash::check($request->current_password, $student->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        $student->password = bcrypt($request->password);
        $student->save();

        return redirect()->route('student.dashboard')->with('success', 'Password updated successfully');
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
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // 'school_id' => 'required|exists:schools,id',
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
    // $student->school_id = $request->school_id;
    $student->password = bcrypt($request->password);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/students'), $imageName);
        $student->image = $imageName;
    }

    // Check if company user is authenticated
    if (auth()->guard('company')->check()) {
        $student->company_id = auth()->guard('company')->user()->id;
    }
    if (auth()->guard('school')->check()) {
        $student->school_id = auth()->guard('school')->user()->id;
    }

    $student->save();

    return redirect()->route('school.dashboard')->with('success', 'Student created successfully!');
}

    public function profile()
    {
        $student = auth('student')->user();
        return view('profiles.student', compact('student'));
    }
}
