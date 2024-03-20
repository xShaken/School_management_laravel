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
        <h1 class="text-center mb-4">Create Teachers</h1>
        
        <form action="{{route('teachers.update',['teacher' => $teacher])}}" method="post">
          @csrf
          @method('put')
  
          <div class="form-group">
            <label>Teacher_id:</label>
            <input type="text" class="form-control" name="Teacher_id" placeholder="Teacher_id" value="{{$teacher->Teacher_id}}">
          </div>
          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="Name" placeholder="Name" value="{{$teacher->Name}}">
          </div>
          <div class="form-group">
            <label>Age:</label>
            <input type="text" class="form-control" name="Age" placeholder="Age" value="{{$teacher->Age}}">
          </div>
          <div class="form-group">
            <label>Birth_Date:</label>
            <input type="text" class="form-control" name="Birth_Date" placeholder="Birth_Date" value="{{$teacher->Birth_Date}}">
          </div>
          <div class="form-group">
            <label>Phone:</label>
            <input type="text" class="form-control" name="Phone" placeholder="Phone" value="{{$teacher->Phone}}">
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" name="Email" placeholder="Email" value="{{$teacher->Email}}">
          </div>
          <div class="form-group">
            <label>Gander:</label>
            <input type="text" class="form-control" name="Gander" placeholder="Gander" value="{{$teacher->Gander}}">
          </div>
          <div class="form-group">
            <label>Department:</label>
            <input type="text" class="form-control" name="Department" placeholder="Department" value="{{$teacher->Department}}">
          </div>
          <div class="form-group">
            <label>Possession:</label>
            <input type="text" class="form-control" name="Possession" placeholder="Possession" value="{{$teacher->Possession}}">
          </div>
          <div class="form-group">
            <label>Address:</label>
            <input type="text" class="form-control" name="Address" placeholder="Address" value="{{$teacher->Address}}">
          </div>
          <div class="form-group">
            <label>Salary:</label>
            <input type="text" class="form-control" name="Salary" placeholder="Salary" value="{{$teacher->Salary}}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
</div>

@endsection