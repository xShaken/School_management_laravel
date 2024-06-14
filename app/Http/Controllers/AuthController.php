<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Student;
use App\Models\Section;
use App\Models\Srand;
use App\Models\Strand;
use App\Models\Teacher;
use App\Models\Subject;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  

    public function registration()
    {
        return view('auth.registration');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully logged in');
        }
  
        return redirect("login")->withSuccess('Oops! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully logged in');
    }

    public function dashboard()
    {
        if(Auth::check()){
            $totalStudents = Student::count();  // Get the total number of students
            $totalStrands = Strand::count();  // Get the total number of students
            $admin = User::count();  // Get the total number of students
            $totalTeachers = Teacher::count();  // Get the total number of students
            $totalSubjects = Subject::count();  // Get the total number of students
            $totalSections = Section::count();  // Get the total number of students
            return view('dashboard', compact('totalStudents','totalStrands','admin','totalTeachers','totalSubjects','totalSections'));
        }
  
        return redirect("login")->withSuccess('Oops! You do not have access');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
