@extends("layouts.master")

@section("content")
<h1 class="mb-4">List of Students</h2>
<a class="btn btn-sm btn-success" href="{{ route('students.create') }}" role="button">Create a student</a>
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Student Phone</th>
                    <th scope="col">Student Date of Birth</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>John Doe</td>
                    <td>johndoe@test.com</td>
                    <td>+35612345678</td>
                    <td>01/01/2000</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="#" role="button">View</a>
                        <a class="btn btn-sm btn-warning" href="" role="button">Edit</a>
                        <a class="btn btn-sm btn-danger" href="" role="button">Delete</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jane Doe</td>
                    <td>janedoe@test.com</td>
                    <td>+35687654321</td>
                    <td>01/01/2000</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="#" role="button">View</a>
                        <a class="btn btn-sm btn-warning" href="" role="button">Edit</a>
                        <a class="btn btn-sm btn-danger" href="" role="button">Delete</a>
                    </td>
                </tr>
            </tbody>
            <table>
    </div>

    @endsection