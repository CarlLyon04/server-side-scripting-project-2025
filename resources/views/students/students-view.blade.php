@extends("layouts.master")

@section("content")

<h1 class="mb-4">View Student</h2>
<form action="{{ route('students.show', $student->id) }}" method="POST">
    @csrf
<div class="mb-3">
        <label for="studentNameInput" class="form-label">Student Name</label>
        <input type="text" class="form-control" id="studentNameInput" value="{{ $student->name }}" disabled>
    </div>
    <div class="mb-3">
        <label for="studentEmailInput" class="form-label">Student Email</label>
        <input type="text" class="form-control" id="studentEmailInput" value="{{ $student->email }}" disabled>
    </div>
    <div class="mb-3">
        <label for="studentPhoneInput" class="form-label">Student Phone</label>
        <input type="text" class="form-control" id="studentPhoneInput" value="{{ $student->phone }}" disabled>
    </div>
    <div class="mb-3">
        <label for="studentDateInput" class="form-label">Student Date of Birth</label>
        <input type="text" class="form-control" id="studentDateInput" value="{{ $student->dob }}" disabled>
    </div>
    <div class="mb-3">
        <label for="studentDateInput" class="form-label">Student College ID</label>
        <input type="text" class="form-control" id="studentDateInput" value="{{ $student->college_id }}" disabled>
    </div>
    <a class="btn btn-primary" href="{{ route('students.index') }}" role="button">Go back to students index page</a>
</form>

@endsection