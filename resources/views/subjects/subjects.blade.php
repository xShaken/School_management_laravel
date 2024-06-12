@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Manage Subjects</h2>
    
    <!-- Display existing subjects and their assigned teachers -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Subject</th>
                <th scope="col">Assigned Teacher</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subjects as $subject)
            <tr>
                <td>{{ $subject->name }}</td>
                <td>{{ $subject->teacher ? $subject->teacher->name : 'None' }}</td>
                <td>
                    <!-- Button to trigger modal for assigning teacher -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#assignTeacherModal" data-subject-id="{{ $subject->id }}" data-subject-name="{{ $subject->name }}">
                        Assign Teacher
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal for assigning teacher -->
    <div class="modal fade" id="assignTeacherModal" tabindex="-1" aria-labelledby="assignTeacherModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="assignTeacherModalLabel">Assign Teacher to Subject</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="assignTeacherForm" action="{{ route('subjects.assignTeacher') }}" method="POST">
                        @csrf
                        <input type="hidden" name="subject_id" id="subject_id">
                        
                        <div class="mb-3">
                            <label for="subject_name" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject_name" readonly>
                        </div>
                        
                        <div class="mb-3">
                            <label for="teacher_id" class="form-label">Teacher</label>
                            <select class="form-control" id="teacher_id" name="teacher_id" required>
                                @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Assign Teacher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var assignTeacherModal = document.getElementById('assignTeacherModal');
    assignTeacherModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var subjectId = button.getAttribute('data-subject-id');
        var subjectName = button.getAttribute('data-subject-name');

        var modalTitle = assignTeacherModal.querySelector('.modal-title');
        var subjectIdInput = assignTeacherModal.querySelector('#subject_id');
        var subjectNameInput = assignTeacherModal.querySelector('#subject_name');

        modalTitle.textContent = 'Assign Teacher to ' + subjectName;
        subjectIdInput.value = subjectId;
        subjectNameInput.value = subjectName;
    });
});
</script>
@endsection
