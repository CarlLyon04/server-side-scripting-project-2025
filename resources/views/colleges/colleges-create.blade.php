@extends("layouts.master")

@section("content")

<h1 class="mb-4">Create College</h2>
<form action="{{ route('colleges.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="collegeNameInput" class="form-label">College Name</label>
        <input type="text" name="name" class="form-control" id="collegeNameInput">
    </div>
    <div class="mb-3">
        <label for="collegeAddressInput" class="form-label">College Address</label>
        <input type="text" name="address" class="form-control" id="collegeAddressInput">
    </div>
   <button type="submit" class="btn btn-success">Create College</button>
   <a class="btn btn-primary" href="{{ route('colleges.index') }}" role="button">Go back to colleges index page</a>
</form>

@endsection