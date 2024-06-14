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
    
<div class="container-fluid col-sm-6 mt-5">
    <div>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    
    <div class="container">
        <h1 class="text-center mb-4">Create Teacher</h1>
        <form action="{{ route('teachers.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="Teacher_id">Teacher ID:</label>
                <input type="text" class="form-control" id="Teacher_id" name="Teacher_id" placeholder="Teacher ID">
            </div>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" id="Name" name="Name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="Age">Age:</label>
                <input type="number" class="form-control" id="Age" name="Age" placeholder="Age">
            </div>
            <div class="form-group">
                <label for="Birth_Date">Birth Date:</label>
                <input type="date" class="form-control" id="Birth_Date" name="Birth_Date">
            </div>
            <div class="form-group">
                <label for="Phone">Phone:</label>
                <input type="tel" class="form-control" id="Phone" name="Phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" id="Email" name="Email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="Gender">Gender:</label>
                <select class="form-control" id="Gender" name="Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Department">Department:</label>
                <input type="text" class="form-control" id="Department" name="Department" placeholder="Department">
            </div>
            <div class="form-group">
                <label for="Position">Position:</label>
                <input type="text" class="form-control" id="Position" name="Position" placeholder="Position">
            </div>
            <div class="form-group">
                <label for="Address">Address:</label>
                <input type="text" class="form-control" id="Address" name="Address" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="Salary">Salary:</label>
                <input type="number" class="form-control" id="Salary" name="Salary" placeholder="Salary">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
    </div>
</div>
@endsection
