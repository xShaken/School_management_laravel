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
                    <a href="{{ route('dashboard') }}">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link-name">Dashboard</span>
                    </a>
                </li>
                <hr>
                <div class="men-p">
                    <p>MENU</p>
                </div>
                <li class="list-item">
                    <a href="{{ route('teachers.index') }}">
                        <i class='bx bx-user'></i>
                        <span class="link-name">Teacher</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="{{ route('students.index') }}">
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
                    <a href="{{ route('strands.index') }}">
                        <i class='bx bx-receipt'></i>
                        <span class="link-name">Strands</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="{{ route('sections.index') }}">
                        <i class='bx bx-receipt'></i>
                        <span class="link-name">Sections</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="{{ route('assign_role.create') }}">
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
    <div class="invi-div"></div>
    
    <div class="container-fluid col-sm-6">
        <div>
            @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div class="container">
            <h1 class="text-center mb-4">Create Student</h1>
            <form action="{{ route('students.store') }}" method="post">
              @csrf
              @method('post')
              <div class="form-group">
                <label for="Student_id">Student ID:</label>
                <input type="text" class="form-control" id="Student_id" name="Student_id" placeholder="Student ID" required>
              </div>
              <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" id="Name" name="Name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <label for="Age">Age:</label>
                <input type="number" class="form-control" id="Age" name="Age" placeholder="Age" required>
              </div>
              <div class="form-group">
                <label for="Birth_Date">Birth Date:</label>
                <input type="date" class="form-control" id="Birth_Date" name="Birth_Date" required>
              </div>
              <div class="form-group">
                <label for="Phone">Phone:</label>
                <input type="tel" class="form-control" id="Phone" name="Phone" placeholder="Phone" pattern="[0-9]{10}" required>
              </div>
              <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="Father">Father:</label>
                <input type="text" class="form-control" id="Father" name="Father" placeholder="Father" required>
              </div>
              <div class="form-group">
                <label for="Mother">Mother:</label>
                <input type="text" class="form-control" id="Mother" name="Mother" placeholder="Mother" required>
              </div>
              <div class="form-group">
                <label for="Father_Num">Father's Number:</label>
                <input type="tel" class="form-control" id="Father_Num" name="Father_Num" placeholder="Father's Number" pattern="[0-9]{10}" required>
              </div>
              <div class="form-group">
                <label for="Address">Address:</label>
                <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" required>
              </div>
              <div class="form-group">
                <label for="CGPA">CGPA:</label>
                <input type="number" step="0.01" class="form-control" id="CGPA" name="CGPA" placeholder="CGPA" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
