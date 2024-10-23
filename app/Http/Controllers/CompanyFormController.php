<?php

namespace App\Http\Controllers;

use App\Models\company_form;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company_forms = company_form::all();
        return view('companyform.index',['company_forms'=> $company_forms]);
        // return view('posts.index',['posts'=> $posts] );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companyform.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated= $request->validate([
            'companyname' => ['required', 'min:10', 'max:255'],
            'Added_by' => ['required', 'min:5', 'max:255'],
            'Company_phone_number' => ['required', 'min:11', 'max:25'],
            'Company_email'=>['required','min:10','max:90'],
            'matric_number'=>['required'],
        ]);

        company_form::create($validated);

        return redirect()->route('companyform.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(company_form $company_form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(company_form $company_form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, company_form $company_form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(company_form $company_form)
    {
        //
    }
      public function approve($id)
    {
        $submission = company_form::find($id);
        $submission->status = 'approved';
        $submission->save();

        return redirect()->back()->with('success', 'Submission approved!');
    }

    public function reject($id)
    {
        $submission =company_form::find($id);
        $submission->status = 'rejected';
        $submission->save();

        return redirect()->back()->with('success', 'Submission rejected!');
    }
}
