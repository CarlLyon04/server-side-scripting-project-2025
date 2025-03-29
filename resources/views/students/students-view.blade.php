@extends("layouts.master")

@section("content")

<h1 class="mb-4">View Students</h2>
<form>
<div class="mb-3">
        <label for="studentNameInput" class="form-label">Student Name</label>
        <input type="text" class="form-control" id="studentNameInput" disabled>
    </div>
    <div class="mb-3">
        <label for="studentEmailInput" class="form-label">Student Email</label>
        <input type="text" class="form-control" id="studentEmailInput" disabled>
    </div>
    <div class="mb-3">
        <label for="studentPhoneInput" class="form-label">Student Phone</label>
        <input type="text" class="form-control" id="studentPhoneInput" disabled>
    </div>
    <div class="mb-3">
        <label for="studentDateInput" class="form-label">Student Date of Birth</label>
        <input type="text" class="form-control" id="studentDateInput" disabled>
    </div>
    <a class="btn btn-primary" href="{{ route('students.index') }}" role="button">Go back to students index page</a>
</form>

@endsection