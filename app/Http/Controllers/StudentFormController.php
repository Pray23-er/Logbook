<?php

namespace App\Http\Controllers;

use App\Models\Student_form;
use Illuminate\Http\Request;

class StudentFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = auth()->guard('company')->user();
        $student_forms = $company->student_forms;

        return view('forms.index', compact('student_forms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate([
            'firstname' => ['required','min:5', 'max:255'],
            'lastname' => ['required','min:5', 'max:255'],
            'matric_number' => ['required','min:5', 'max:255'],

            'school_name'=> ['required','min:30','max:255'],
            'phone_number'=> ['required','min:11','max:25'],
            'address'=> ['required','min:30','max:255'],
        ]);

        // Add company_id to validated data
        $validated['company_id'] = auth()->guard('company')->user()->id;

        Student_form::create($validated);
        return to_route('forms.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student_form $student_form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student_form $student_form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student_form $student_form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student_form $student_form)
    {
        //
    }


}
