<!--Uses the master webpage layout-->
@extends("layouts.master")

<!--The modular section to be using the 'yield'-->
@section("content")

<h1 class="mb-4">Create College</h2>

    <!--A bootstrap validation form that calls the 'colleges.store' function in the college controller-->
    <form action="{{ route('colleges.store') }}" method="POST" class="needs-validation" novalidate>
        <!--Cross site request forgery protection (required for the form to work)-->
        @csrf

        <!--Retrieve the college form partial view-->
        @include('colleges.colleges-form')

        <!--Form submit button-->
        <button type="submit" class="btn btn-success">Create College</button>

        <!--Bootstrap link to redirect the user back to the colleges index page-->
        <a class="btn btn-primary" href="{{ route('colleges.index') }}" role="button">Go back to colleges index page</a>
    </form>

    @endsection