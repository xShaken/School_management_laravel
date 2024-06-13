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
            
    <div  class="container-fluid col-sm-6">
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul> 

            @endif
        </div>
        <div class="container">
            <h1 class="text-center mb-4">Create Students</h1>
            
            <form action="{{route('students.store')}}" method="post">
              @csrf
              @method('post')
      
              <div class="form-group">
                <label>Student_id:</label>
                <input type="text" class="form-control" name="Student_id" placeholder="Student_id">
              </div>
              <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="Name" placeholder="Name">
              </div>
              <div class="form-group">
                <label>Age:</label>
                <input type="text" class="form-control" name="Age" placeholder="Age">
              </div>
              <div class="form-group">
                <label>Birth_Date:</label>
                <input type="text" class="form-control" name="Birth_Date" placeholder="Birth_Date">
              </div>
              <div class="form-group">
                <label>Phone:</label>
                <input type="text" class="form-control" name="Phone" placeholder="Phone">
              </div>
              <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="Email" placeholder="Email">
              </div>
              <div class="form-group">
                <label>Father:</label>
                <input type="text" class="form-control" name="Father" placeholder="Father">
              </div>
              <div class="form-group">
                <label>Mother:</label>
                <input type="text" class="form-control" name="Mother" placeholder="Mother">
              </div>
              <div class="form-group">
                <label>Father_Num:</label>
                <input type="text" class="form-control" name="Father_Num" placeholder="Father_Num">
              </div>
              <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" name="Address" placeholder="Address">
              </div>
              <div class="form-group">
                <label>CGPA:</label>
                <input type="text" class="form-control" name="CGPA" placeholder="CGPA">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          

    </div>
@endsection