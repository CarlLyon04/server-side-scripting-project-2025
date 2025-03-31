<!--Uses the master webpage layout-->
@extends("layouts.master")

<!--The modular section to be using the 'yield'-->
@section("content")

<h1 class="mb-4">Edit Student</h2>
    <!--A bootstrap form that calls the 'students.show' function from the students controller-->
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        <!--Cross site request forgery protection (required for the form to work)-->
        @csrf

        <!--PUT method used for updating the students-->
        @method('PUT')

        <!-- Partial view Form -->
        @include('students.students-form')

        <!--Form submit button-->
        <button type="submit" class="btn btn-success">Edit Student</button>

        <!--Bootstrap link to redirect the user back to the students index page-->
        <a class="btn btn-primary" href="{{ route('students.index') }}" role="button">Go back to students index page</a>

    </form>

    @endsection