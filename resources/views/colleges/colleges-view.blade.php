<!--Uses the master webpage layout-->
@extends("layouts.master")

<!--The modular section to be using the 'yield'-->
@section("content")

<h1 class="mb-4">View College</h2>

    <!--A bootstrap form that calls the 'colleges.show' function from the college controller-->
    <form action="{{ route('colleges.show', $college->id) }}" method="POST">
        <!--Cross site request forgery protection (required for the form to work)-->
        @csrf

        <!--Label and Input field for the retrieved college Name-->
        <div class="mb-3">
            <label for="collegeNameInput" class="form-label">College Name</label>
            <input type="text" class="form-control" id="collegeNameInput" value="{{ $college->name}}" disabled>
        </div>

        <!--Label and Input field for the retrieved college Address-->
        <div class="mb-3">
            <label for="collegeAddressInput" class="form-label">College Address</label>
            <input type="text" class="form-control" id="collegeAddressInput" value="{{ $college->address}}" disabled>
        </div>

        <!--Bootstrap link to redirect the user back to the colleges index page-->
        <a class="btn btn-primary" href="{{ route('colleges.index') }}" role="button">Go back to colleges index page</a>
    </form>

    @endsection