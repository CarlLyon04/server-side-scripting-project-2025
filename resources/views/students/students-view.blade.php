<!--Uses the master webpage layout-->
@extends("layouts.master")

<!--The modular section to be using the 'yield'-->
@section("content")

<h1 class="mb-4">View Student</h2>

    <!--A bootstrap form that calls the 'students.show' function from the students controller-->
    <form action="{{ route('students.show', $student->id) }}" method="POST">
        <!--Cross site request forgery protection (required for the form to work)-->
        @csrf

        <!--Label and Input field for the retrieved studdent Name-->
        <div class="mb-3">
            <label for="studentNameInput" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="studentNameInput" value="{{ $student->name }}" disabled>
        </div>

        <!--Label and Input field for the retrieved student email-->
        <div class="mb-3">
            <label for="studentEmailInput" class="form-label">Student Email</label>
            <input type="text" class="form-control" id="studentEmailInput" value="{{ $student->email }}" disabled>
        </div>

        <!--Label and Input field for the retrieved student phone-->
        <div class="mb-3">
            <label for="studentPhoneInput" class="form-label">Student Phone</label>
            <input type="text" class="form-control" id="studentPhoneInput" value="{{ $student->phone }}" disabled>
        </div>

        <!--Label and Input field for the retrieved student date of birth-->
        <div class="mb-3">
            <label for="studentDateInput" class="form-label">Student Date of Birth</label>
            <input type="text" class="form-control" id="studentDateInput" value="{{ $student->dob }}" disabled>
        </div>

        <!--Label and Input field for the retrieved student college ID-->
        <div class="mb-3">
            <label for="studentDateInput" class="form-label">Student College ID</label>
            <input type="text" class="form-control" id="studentDateInput" value="{{ $student->college_id }}" disabled>
        </div>

        <!--Bootstrap link to redirect the user back to the colleges index page-->
        <a class="btn btn-primary" href="{{ route('students.index') }}" role="button">Go back to students index page</a>
    </form>

    @endsection