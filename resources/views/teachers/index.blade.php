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
    <h1 style="text-align: center;">Teachers List</h1>
    <div>
        <a class="btn btn-primary" href="{{route('teachers.create')}}" role="button">Create</a>
    </div>
      <table class="table">
        <thead>
            <tr>
             
              <th scope="col">Teacher_id</th>
              <th scope="col">Name</th>
              <!-- <th scope="col">Age</th>
              <th scope="col">Birth_Date</th>
              <th scope="col">Phone</th> -->
              <th scope="col">Email</th>
              <!-- <th scope="col">Gander</th>
              <th scope="col">Department</th>
              <th scope="col">Possession</th> -->
              <th scope="col">Address</th>
              <!-- <th scope="col">Salary</th> -->
              <th>Action</th>
            </tr>
          </thead>
          @foreach($teachers as $teacher)
            <tbody>  
                <tr>
                 
                  <td>{{$teacher->Teacher_id}}</td>
                  <td>{{$teacher->Name}}</td>
                  <!-- <td>{{$teacher->Age}}</td>
                  <td>{{$teacher->Birth_Date}}</td>
                  <td>{{$teacher->Phone}}</td> -->
                  <td>{{$teacher->Email}}</td>
                  <!-- <td>{{$teacher->Gander}}</td>
                  <td>{{$teacher->Department}}</td>
                  <td>{{$teacher->Possession}}</td> -->
                  <td>{{$teacher->Address}}</td>
                  <!-- <td>{{$teacher->Salary}}</td>  -->
                  <td>
                    <a href="{{route('teachers.edit',['teacher'=>$teacher])}}">Edit</a>
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
     
</div>

@endsection