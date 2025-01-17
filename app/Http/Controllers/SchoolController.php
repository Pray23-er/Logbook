<?php
// app/Http/Controllers/SchoolController.php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use App\Models\Event;
use App\Models\company_form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class SchoolController extends Controller
{
    public function school(Request $request)
    {
    if (!Auth::guard('school')->check()) {
        return redirect()->route('school.login');
    }

    $school = Auth::guard('school')->user();
    $school->load('students');

    return view('dashboard.school', [
        'company_forms' => company_form::whereIn('matric_number', $school->students->pluck('matric_number'))->get(),
        'registeredStudents' => $school->students,
        'authenticatedSchool' => $school
    ]);
    }


    public function calendar(Request $request)
    {
        if (!Auth::guard('school')->check()) {
            return redirect()->route('school.login');
        }

        // Retrieve the school's calendar events
        $events = Event::where('school_id', Auth::guard('school')->user()->id)->get();

        return view('school.calender', [
            'events' => $events,
            'authenticatedSchool' => Auth::guard('school')->user()
        ]);
    }

    public function storeCalendarEvent(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $event = new Event();
        $event->title = $request->input('title');
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->school_id = Auth::guard('school')->user()->id;
        $event->save();

        return redirect()->route('school.calendar');
    }

    public function deleteCalendarEvent($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect()->route('school.calendar');
    }

    public function logbook(Request $request)
    {
      $registeredStudents = Student::where('school_id', Auth::guard('school')->user()->id)->get();
      $matricNumber = $request->query('matric_number');
      $selectedStudent = null;
      $studentLogbooks = null;

      if ($matricNumber) {
        $selectedStudent = Student::where('matric_number', $matricNumber)->first();
        $studentLogbooks = $selectedStudent->logbooks;
      }

      return view('auth.logbook', compact('registeredStudents', 'selectedStudent', 'studentLogbooks'));
    }
}

