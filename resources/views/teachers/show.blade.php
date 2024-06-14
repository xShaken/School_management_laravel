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
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Teacher Details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $teacher->Teacher_id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $teacher->Name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $teacher->Email }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $teacher->Address }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
