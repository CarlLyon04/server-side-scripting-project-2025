<!--Uses the master webpage layout-->
@extends("layouts.master")

<!--The modular section to be using the 'yield'-->
@section("content")
<h1 class="mb-4">List of Colleges</h2>
    <!--When the form fields have been validated and the records have been created/updated, a bootstrap 5 success alert will be displayed-->
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <!--Bootstrap link to redirect the user to the college create form-->
    <a class="btn btn-sm btn-success" href="{{ route('colleges.create') }}" role="button">Create a college</a>

    <!--Bootstrap 5 table with the college columns-->
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-primary">
                <tr>
                    <th scope="col">College ID</th>
                    <th scope="col">College Name</th>
                    <th scope="col">College Address</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!--For every existing college, add a new table row with the corresponding college details-->
                @forelse($colleges as $college)
                <tr>
                    <th scope="row">{{$college->id}}</th>
                    <td>{{$college->name}}</td>
                    <td>{{$college->address}}</td>
                    <td>
                        <!--Viewing and Editing bootstrap links that will redirect the user to the corresponding form-->
                        <a class="btn btn-sm btn-primary" href="{{ route('colleges.show', $college->id) }}"
                            role="button">View</a>
                        <a class="btn btn-sm btn-warning" href="{{ route('colleges.edit', $college->id) }}"
                            role="button">Edit</a>
                    </td>
                </tr>
                <!--If no colleges, exist display that no colleges were found-->
                @empty
                <p>No Colleges found</p>
                @endforelse
            </tbody>
            <table>
    </div>

    @endsection