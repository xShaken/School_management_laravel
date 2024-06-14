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

    <div class="st">
        <h1 style="text-align: center;">Subjects List</h1>
        <div style="padding:5px; display:flex; justify-content:end; padding-right: 2rem;">
            <a class="btn btn-primary" href="{{ route('subjects.create') }}" role="button">Add New Subject</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                   
                    <th style="width: 60%;" scope="col">Name</th>
                    <th style="width: 40%;" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $subject)
                <tr>
                   
                    <td style="width: 60%;">{{ $subject->name }}</td>
                    <td style="display:flex; gap:1rem;">
                        <a href="{{ route('subjects.show', ['subject' => $subject]) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('subjects.edit', ['subject' => $subject]) }}" class="btn btn-secondary btn-sm">Edit</a>
                        <form method="POST" action="{{ route('subjects.destroy', ['subject' => $subject]) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
