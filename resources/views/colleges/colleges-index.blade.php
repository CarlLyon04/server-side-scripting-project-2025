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
                @forelse($colleges as $college)
                <tr>
                    <th scope="row">{{$college->id}}</th>
                    <td>{{$college->name}}</td>
                    <td>{{$college->address}}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('colleges.show', $college->id) }}" role="button">View</a>
                        <a class="btn btn-sm btn-warning" href="{{ route('colleges.edit', $college->id) }}" role="button">Edit</a>
                    </td>
                </tr>
                @empty
                    <p>No Colleges found</p>
                @endforelse
            </tbody>
            <table>
    </div>

    @endsection