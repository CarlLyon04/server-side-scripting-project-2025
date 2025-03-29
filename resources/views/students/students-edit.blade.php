@extends("layouts.master")

@section("content")

<h1 class="mb-4">Edit Student</h2>
<form>
    <div class="mb-3">
        <label for="studentNameInput" class="form-label">Student Name</label>
        <input type="text" class="form-control" id="studentNameInput">
    </div>
    <div class="mb-3">
        <label for="studentEmailInput" class="form-label">Student Email</label>
        <input type="text" class="form-control" id="studentEmailInput">
    </div>
    <div class="mb-3">
        <label for="studentPhoneInput" class="form-label">Student Phone</label>
        <input type="text" class="form-control" id="studentPhoneInput">
    </div>
    <div class="mb-3">
        <label for="studentDateInput" class="form-label">Student Date of Birth</label>
        <input type="text" class="form-control" id="studentDateInput">
    </div>
   <button type="submit" class="btn btn-success">Edit Student</button>
</form>

@endsection