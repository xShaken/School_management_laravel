@extends('layout')

@section('content')
    <div  class="container col-sm-6">
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul> 

            @endif
        </div>
        <div class="container-fluid">
            <h1 class="text-center mb-4">Create Students</h1>
            
            <form action="{{route('students.update',['student' => $student])}}" method="post">
              @csrf
              @method('put')
      
              <div class="form-group">
                <label>Student_id:</label>
                <input type="text" class="form-control" name="Student_id" placeholder="Student_id" value="{{$student->Student_id}}">
              </div>
              <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="Name" placeholder="Name" value="{{$student->Name}}">
              </div>
              <div class="form-group">
                <label>Age:</label>
                <input type="text" class="form-control" name="Age" placeholder="Age" value="{{$student->Age}}">
              </div>
              <div class="form-group">
                <label>Birth_Date:</label>
                <input type="text" class="form-control" name="Birth_Date" placeholder="Birth_Date" value="{{$student->Birth_Date}}">
              </div>
              <div class="form-group">
                <label>Phone:</label>
                <input type="text" class="form-control" name="Phone" placeholder="Phone" value="{{$student->Phone}}">
              </div>
              <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="Email" placeholder="Email" value="{{$student->Email}}">
              </div>
              <div class="form-group">
                <label>Father:</label>
                <input type="text" class="form-control" name="Father" placeholder="Father" value="{{$student->Father}}">
              </div>
              <div class="form-group">
                <label>Mother:</label>
                <input type="text" class="form-control" name="Mother" placeholder="Mother" value="{{$student->Mother}}">
              </div>
              <div class="form-group">
                <label>Father_Num:</label>
                <input type="text" class="form-control" name="Father_Num" placeholder="Father_Num" value="{{$student->Father_Num}}">
              </div>
              <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" name="Address" placeholder="Address" value="{{$student->Address}}">
              </div>
              <div class="form-group">
                <label>CGPA:</label>
                <input type="text" class="form-control" name="CGPA" placeholder="CGPA" value="{{$student->CGPA}}">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
    </div>
@endsection