<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use App\Models\Student;
use App\Models\Company;
use Illuminate\Http\Request;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $matricNumber = auth('student')->user()->matric_number;
    $logbooks = Logbook::where('matric_number', $matricNumber)->get();

    return view('records.index', compact('logbooks'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('records.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    //     $validated = $request->validate([
    //         'title' => ['required','min:5', 'max:255'],
    //         'description'=> ['required','min:10'],

    //     ]);
    //     Logbook::create($validated);

    //     return to_route('records.index');
    // }
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => ['required', 'min:5', 'max:255'],
        'description' => ['required', 'min:10'],
    ]);

    // Retrieve authenticated student's matric number using Student guard
    $matricNumber = auth('student')->user()->matric_number;

    // Merge matric number with validated data
    $validated['matric_number'] = $matricNumber;

    Logbook::create($validated);

    return to_route('records.index');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $logbook = Logbook::findOrfail($id);
        return view('records.show', compact('logbook'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $logbook = Logbook::findOrfail($id);
    return view('records.edit', compact('logbook'));
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $logbook = Logbook::findOrfail($id);

        // Validate request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        // Update logbook record
        $logbook->update($validatedData);

        // Redirect with success message
        return redirect()->route('records.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $logbook = Logbook::findOrfail($id);

        // Delete logbook record
        $logbook->delete();

        // Redirect with success message
        return redirect()->route('records.index');
    }
    // LogbookController
public function approve($id)
{
    $logbook = Logbook::find($id);
    $logbook->status = 'approved';
    $logbook->save();
    return redirect()->back()->with('success', 'Logbook approved successfully!');
}

public function reject($id)
{
    $logbook = Logbook::find($id);
    $logbook->status = 'rejected';
    $logbook->save();
    return redirect()->back()->with('success', 'Logbook rejected successfully!');
}


}
