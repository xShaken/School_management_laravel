<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Teacher;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('teacher')->get();
        $teachers = Teacher::all();
        return view('subjects', compact('subjects', 'teachers'));
    }

    public function assignTeacher(Request $request)
    {
        $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $subject = Subject::find($request->subject_id);
        $subject->teacher_id = $request->teacher_id;
        $subject->save();

        return redirect()->route('subjects.index')->with('success', 'Teacher assigned successfully.');
    }
}
