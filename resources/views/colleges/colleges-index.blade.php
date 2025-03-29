@extends("layouts.master")

@section("content")
<h1 class="mb-4">List of Colleges</h2>
<a class="btn btn-sm btn-success" href="{{ route('colleges.create') }}" role="button">Create a college</a>
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
                <tr>
                    <th scope="row">1</th>
                    <td>MCAST</td>
                    <td>Poala</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="#" role="button">View</a>
                        <a class="btn btn-sm btn-warning" href="" role="button">Edit</a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>UoM</td>
                    <td>Msida</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="#" role="button">View</a>
                        <a class="btn btn-sm btn-warning" href="" role="button">Edit</a>
                    </td>
                </tr>
            </tbody>
            <table>
    </div>

    @endsection