<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::all();
         return view('teachers.index',['teachers'=>$teachers]);
    }
    public function create(){
        return view('teachers.create');
   }

   public function store(Request $request){
         $data = $request->validate([
            'Teacher_id'=>'required|string',
            'Name'=>'required|string',
            'Age'=>'required|string',
            'Birth_Date'=>'required|string',
            'Phone'=>'required|string',
            'Email'=>'required|string',
            'Gander'=>'required|string',
            'Department'=>'required|string',
            'Possession'=>'required|string',
            'Address'=>'required|string',
            'Salary'=>'required|string'
         ]);

         $newTeacher = Teacher::create($data);
         return redirect(route('teachers.index'));
   }

   public function edit(Teacher $teacher){
    return view('teachers.edit', ['teacher'=>$teacher]);
   }
  
   public  function update(Teacher $teacher, Request  $request){
    $data = $request->validate([
        'Teacher_id'=>'required|string',
        'Name'=>'required|string',
        'Age'=>'required|string',
        'Birth_Date'=>'required|string',
        'Phone'=>'required|string',
        'Email'=>'required|string',
        'Gander'=>'required|string',
        'Department'=>'required|string',
        'Possession'=>'required|string',
        'Address'=>'required|string',
        'Salary'=>'required|string'
     ]);
     $teacher->update($data);
     return redirect(route('teachers.index'))->with('success','product update sucessfully');

   }

   public function destroy(Teacher $teacher){
       $teacher->delete();
       return redirect(route('teachers.index'))->with('success','product update sucessfully');
   }
}
