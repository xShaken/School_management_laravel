<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
        public function index(){
            $students = Student::all();
             return view('students.index',['students'=>$students]);
        }
        public function create(){
            return view('students.create');
       }

       public function store(Request $request){
             $data = $request->validate([
                'Student_id'=>'required|string',
                'Name'=>'required|string',
                'Age'=>'required|string',
                'Birth_Date'=>'required|string',
                'Phone'=>'required|string',
                'Email'=>'required|string',
                'Father'=>'required|string',
                'Mother'=>'required|string',
                'Father_Num'=>'required|string',
                'Address'=>'required|string',
                'CGPA'=>'required|string'
             ]);

             $newStudent = Student::create($data);
             return redirect(route('students.index'));
       }

       public function edit(Student $student){
        return view('students.edit', ['student'=>$student]);
       }
      
       public  function update(Student $student, Request  $request){
        $data = $request->validate([
            'Student_id'=>'required|string',
            'Name'=>'required|string',
            'Age'=>'required|string',
            'Birth_Date'=>'required|string',
            'Phone'=>'required|string',
            'Email'=>'required|string',
            'Father'=>'required|string',
            'Mother'=>'required|string',
            'Father_Num'=>'required|string',
            'Address'=>'required|string',
            'CGPA'=>'required|string'
         ]);
         $student->update($data);
         return redirect(route('students.index'))->with('success','product update sucessfully');

       }

       public function destroy(Student $student){
           $student->delete();
           return redirect(route('students.index'))->with('success','product update sucessfully');
       }
}


