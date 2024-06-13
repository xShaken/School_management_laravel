@extends('layout')

@section('content')


        <div class="container-div">
            <div class="menu">
                <nav class="sidebar">
                    <div class="logo-menu">
                        <h2 class="logo">Akasha</h2>
                        <i class='bx bx-menu toggle-btn'></i>
                    </div>

                    <ul class="nav-list">
                        <li class="list-item active">
                            <a href="">
                                <i class='bx bx-grid-alt'></i>
                                <span class="link-name">Dashboard</span>
                            </a>
                        </li>
                        <hr>
                        <div class="men-p">
                            <p>MENU</p>
                        </div>
                        <li class="list-item">
                            <a href="{{route('teachers.index')}}">
                                <i class='bx bx-user'></i>
                                <span class="link-name">Teacher</span>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="{{route('students.index')}}">
                                <i class='bx bx-id-card'></i>
                                <span class="link-name">Students</span>
                            </a>
                        </li>

                        <li class="list-item">
        <a href="{{ route('subjects.index') }}">
            <i class='bx bx-certification'></i>
            <span class="link-name">Subjects</span>
        </a>
    </li>

    <li class="list-item">
                        <a href="{{ route('strands.index') }}" >
                                <i class='bx bx-receipt'></i>
                                <span class="link-name">Strands</span>
                            </a>
                        </li>

                        <li class="list-item">
                        <a href="{{ route('sections.index') }}" >
                                <i class='bx bx-receipt'></i>
                                <span class="link-name">Sections</span>
                            </a>
                        </li>



                        <li class="list-item">
                        <a href="{{ route('assign_role.create') }}" >
                                <i class='bx bx-receipt'></i>
                                <span class="link-name">Assign Role</span>
                            </a>
                        </li>


                        <li class="list-item">
                            <a href="#">
                                <i class='bx bx-cog'></i>
                                <span class="link-name">Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="invi-div">
            </div>
    <div class="st">
        <h1 style="text-align: center;">Students List</h1>
        <div>
            <a class="btn btn-primary" href="{{route('students.create')}}" role="button">Create</a>
        </div>
          <table class="table">
            <thead>
                <tr>
                  <th scope="col">Student_id</th>
                  <th scope="col">Name</th>
                  <!-- <th scope="col">Age</th>
                  <th scope="col">Birth_Date</th>
                  <th scope="col">Phone</th> -->
                  <th scope="col">Email</th>
                  <!-- <th scope="col">Father</th>
                  <th scope="col">Mother</th>
                  <th scope="col">Father_Num</th> -->
                  <th scope="col">Address</th>
                  <!-- <th scope="col">CGPA</th> -->
                   <th>Action</th>
                </tr>
              </thead>
              @foreach($students as $student)
                <tbody>  
                    <tr>
                      <td>{{$student->Student_id}}</td>
                      <td>{{$student->Name}}</td>
                      <!-- <td>{{$student->Age}}</td>
                      <td>{{$student->Birth_Date}}</td>
                      <td>{{$student->Phone}}</td> -->
                      <td>{{$student->Email}}</td>
                      <!-- <td>{{$student->Father}}</td>
                      <td>{{$student->Mother}}</td>
                      <td>{{$student->Father_Num}}</td> -->
                      <td>{{$student->Address}}</td>
                      <!-- <td>{{$student->CGPA}}</td> -->
                      <td>
                        <a href="{{route('students.edit',['student'=>$student])}}">Edit</a>
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
         
    </div>
   
@endsection