<?php

namespace App\Http\Controllers;

use App\Models\LogbookRecords;
use Illuminate\Http\Request;

class LogbookRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // return view('dashboard.student');
        return view('records.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        return view('records.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $logbookRecord = new LogbookRecord();
        // $logbookRecord->student_id = Auth::id();
        // // Save other logbook record details...
        // $logbookRecord->save();
        // return redirect()->route('student.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(LogbookRecords $logbookRecords)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LogbookRecords $logbookRecords)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LogbookRecords $logbookRecords)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LogbookRecords $logbookRecords)
    {
        //
    }
}
