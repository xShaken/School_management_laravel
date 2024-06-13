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

    <h1>Edit Section</h1>

    <form action="{{ route('sections.update', $section->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $section->name) }}" required>
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="strand_id">Strand:</label>
            <select name="strand_id" id="strand_id" required>
                @foreach($strands as $strand)
                    <option value="{{ $strand->id }}" {{ $section->strand_id == $strand->id ? 'selected' : '' }}>
                        {{ $strand->name }}
                    </option>
                @endforeach
            </select>
            @error('strand_id')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Update Section</button>
        </div>
    </form>

    <a href="{{ route('sections.index') }}">Back to Sections</a>
@endsection
