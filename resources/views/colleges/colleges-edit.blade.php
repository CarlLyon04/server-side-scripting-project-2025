<!--Uses the master webpage layout-->
@extends("layouts.master")

<!--The modular section to be using the 'yield'-->
@section("content")

<h1 class="mb-4">Edit College</h2>

    <!--A bootstrap form that calls the 'colleges.show' function from the college controller-->
    <form action="{{ route('colleges.update', $college->id) }}" method="POST">
        <!--Cross site request forgery protection (required for the form to work)-->
        @csrf
        <!--PUT method used for updating the colleges-->
        @method('PUT')

        <!-- Partial view Form -->
        @include('colleges.colleges-form')

        <!--Form submit button-->
        <button type="submit" class="btn btn-success">Edit College</button>

        <!--Bootstrap link to redirect the user back to the colleges index page-->
        <a class="btn btn-primary" href="{{ route('colleges.index') }}" role="button">Go back to colleges index page</a>

    </form>

    @endsection