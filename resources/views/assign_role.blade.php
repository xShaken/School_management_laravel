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
<div class="container mt-5">
    <h2>Assign Roles</h2>
    <form action="{{ route('assign_role.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_type">User Type</label>
            <select class="form-control" id="user_type" name="user_type" required>
                <option value="">Select User Type</option>
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="user_id">User</label>
            <select class="form-control" id="user_id" name="user_id" required>
                <!-- Options will be populated by JavaScript -->
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="role" required>
                <option value="">Select Role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Assign Role</button>
    </form>
</div>

<script>
document.getElementById('user_type').addEventListener('change', function() {
    var userType = this.value;
    var userSelect = document.getElementById('user_id');

    // Clear existing options
    userSelect.innerHTML = '';

    // Fetch the users based on the selected type
    fetch(`/get-users?type=${userType}`)
        .then(response => response.json())
        .then(data => {
            data.forEach(user => {
                var option = document.createElement('option');
                option.value = user.id;
                option.text = user.name;
                userSelect.add(option);
            });
        });
});
</script>
@endsection
