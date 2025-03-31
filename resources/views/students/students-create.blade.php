<!--Uses the master webpage layout-->
@extends("layouts.master")

<!--The modular section to be using the 'yield'-->
@section("content")

<h1 class="mb-4">Create Student</h2>

    <!--A bootstrap validation form that calls the 'students.store' function in the student controller-->
    <form action="{{ route('students.store') }}" method="POST">
        <!--Cross site request forgery protection (required for the form to work)-->
        @csrf

        <!--Retrieve the student form partial view-->
        @include('students.students-form')

        <!--Form submit button-->
        <button type="submit" class="btn btn-success">Create Student</button>

        <!--Bootstrap link to redirect the user back to the students index page-->
        <a class="btn btn-primary" href="{{ route('students.index') }}" role="button">Go back to students index page</a>

    </form>

    @endsection