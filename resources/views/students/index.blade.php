@extends('layout')

@section('content')
    <div class="container col-md-12">
        <h1 style="text-align: center;">Students List</h1>
          <table class="table">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Student_id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Age</th>
                  <th scope="col">Birth_Date</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Father</th>
                  <th scope="col">Mother</th>
                  <th scope="col">Father_Num</th>
                  <th scope="col">Address</th>
                  <th scope="col">CGPA</th>
                </tr>
              </thead>
              @foreach($students as $student)
                <tbody>  
                    <tr>
                      <td>{{$student->id}}</td>
                      <td>{{$student->Student_id}}</td>
                      <td>{{$student->Name}}</td>
                      <td>{{$student->Age}}</td>
                      <td>{{$student->Birth_Date}}</td>
                      <td>{{$student->Phone}}</td>
                      <td>{{$student->Email}}</td>
                      <td>{{$student->Father}}</td>
                      <td>{{$student->Mother}}</td>
                      <td>{{$student->Father_Num}}</td>
                      <td>{{$student->Address}}</td>
                      <td>{{$student->CGPA}}</td>
                      <td>
                        <a href="{{route('students.edit',['student'=>$student])}}">Edit</a>
                      </td>
                      <td>
                        <form method="POST" action="{{route('students.destroy',['student'=>$student])}}">
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
            <a class="btn btn-primary" href="{{route('students.create')}}" role="button">Create</a>
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