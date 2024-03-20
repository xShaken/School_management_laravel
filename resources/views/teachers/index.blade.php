@extends('layout')
  
@section('content')
<div class="container col-md-12">
    <h1 style="text-align: center;">Teachers List</h1>
      <table class="table">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Teacher_id</th>
              <th scope="col">Name</th>
              <th scope="col">Age</th>
              <th scope="col">Birth_Date</th>
              <th scope="col">Phone</th>
              <th scope="col">Email</th>
              <th scope="col">Gander</th>
              <th scope="col">Department</th>
              <th scope="col">Possession</th>
              <th scope="col">Address</th>
              <th scope="col">Salary</th>
            </tr>
          </thead>
          @foreach($teachers as $teacher)
            <tbody>  
                <tr>
                  <td>{{$teacher->id}}</td>
                  <td>{{$teacher->Teacher_id}}</td>
                  <td>{{$teacher->Name}}</td>
                  <td>{{$teacher->Age}}</td>
                  <td>{{$teacher->Birth_Date}}</td>
                  <td>{{$teacher->Phone}}</td>
                  <td>{{$teacher->Email}}</td>
                  <td>{{$teacher->Gander}}</td>
                  <td>{{$teacher->Department}}</td>
                  <td>{{$teacher->Possession}}</td>
                  <td>{{$teacher->Address}}</td>
                  <td>{{$teacher->Salary}}</td> 
                  <td>
                    <a href="{{route('teachers.edit',['teacher'=>$teacher])}}">Edit</a>
                  </td>
                  <td>
                    <form method="POST" action="{{route('teachers.destroy',['teacher'=>$teacher])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                      </form>
                  </td>
                </tr>
            </tbody>
          @endforeach
      </table>
      <div>
        <a class="btn btn-primary" href="{{route('teachers.create')}}" role="button">Create</a>
    </div>
    <div>
      <a class="btn btn-primary" href="{{route('dashboard')}}" role="button" style="margin: 50px">Dashboard</a>
  </div>
</div>
<div class="container col-md-5">
       @if(session()-> has('success'))
          <div>
               {{session('success')}}
          </div>
       @endif
</div>
@endsection