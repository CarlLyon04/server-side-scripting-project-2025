@extends("layouts.master")

@section("content")

<h1 class="mb-4">Edit Student</h2>
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="studentNameInput" class="form-label">Student Name</label>
        <input type="text" name="name" class="form-control" value="{{ $student->name }}" id="studentNameInput">
    </div>
    <div class="mb-3">
        <label for="studentEmailInput" class="form-label">Student Email</label>
        <input type="text" name="email" class="form-control" value="{{ $student->email }}" id="studentEmailInput">
    </div>
    <div class="mb-3">
        <label for="studentPhoneInput" class="form-label">Student Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ $student->phone }}" id="studentPhoneInput">
    </div>
    <div class="mb-3">
        <label for="studentDateInput" class="form-label">Student Date of Birth</label>
        <input type="text" name="dob" class="form-control" value="{{ $student->dob }}" id="studentDateInput">
    </div>
    <div class="mb-3">
        <label for="collegeNameInput" class="form-label">Student College designation</label>
        <input list="colleges" name="collegeName" class="form-control" id="collegeNameInput">
        <datalist id="colleges">
            @forelse($colleges as $college)
                <option value="{{ $college->name}}">
            @empty
                <option value="No Colleges to choose from... Please create a college prior to creating a student">
            @endforelse
    </div>
   <button type="submit" class="btn btn-success">Edit Student</button>
   <a class="btn btn-primary" href="{{ route('students.index') }}" role="button">Go back to students index page</a>

</form>

@endsection