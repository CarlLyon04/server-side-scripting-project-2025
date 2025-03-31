<!--Uses the master webpage layout-->
@extends("layouts.master")

<!--The modular section to be using the 'yield'-->
@section("content")
<h1 class="mb-4">List of Students</h2>

    <!--When the form fields have been validated and the records have been created/updated, a bootstrap 5 success alert will be displayed-->
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <!--Retrieve student name sort partial form-->
    @include('students.students-sort-name')
    <br>
    <!--Retrieve student college sort partial form-->
    @include('students.students-sort-college')

    <!--Bootstrap link to redirect the user to the college create form-->
    <a class="btn btn-sm btn-success" href="{{ route('students.create') }}" role="button">Create a student</a>

    <!--Bootstrap 5 table with the college columns-->
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Student Phone</th>
                    <th scope="col">Student Date of Birth</th>
                    <th scope="col">College ID</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!--For every existing college, add a new table row with the corresponding college details-->
                @forelse($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->college_id}}</td>
                    <td>
                        <!--Viewing and Editing bootstrap links that will redirect the user to the corresponding form-->
                        <a class="btn btn-sm btn-primary" href="{{ route('students.show', $student->id) }}"
                            role="button">View</a>
                        <a class="btn btn-sm btn-warning" href="{{ route('students.edit', $student->id) }}"
                            role="button">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            <!--Cross site request forgery protection (required for the form to work)-->
                            @csrf

                            <!--DELETE method used for deleting the specified student-->
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <!--If no colleges exist, display that no colleges were found-->
                @empty
                <p>No Students found</p>

                @endforelse
            </tbody>
            <table>
    </div>

    @endsection