<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;

class RoleController extends Controller
{
    public function create()
    {
        return view('assign_role');
    }

    public function getUsers(Request $request)
    {
        $type = $request->query('type');
        $users = [];

        if ($type === 'teacher') {
            $users = Teacher::all(['id', 'name']);
        } elseif ($type === 'student') {
            $users = Student::all(['id', 'name']);
        }

        return response()->json($users);
    }

    public function store(Request $request)
    {
        // Implement role assignment logic here

        return redirect()->back()->with('success', 'Role assigned successfully.');
    }
}
