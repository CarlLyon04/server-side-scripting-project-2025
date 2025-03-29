@extends("layouts.master")

@section("content")

<h1 class="mb-4">Edit College</h2>
<form action="{{ route('colleges.update', $college->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="collegeNameInput" class="form-label">College Name</label>
        <input type="text" name="name" class="form-control" value="{{ $college->name }}" id="collegeNameInput">
    </div>
    <div class="mb-3">
        <label for="collegeAddressInput" class="form-label">College Address</label>
        <input type="text" name="address" class="form-control" value="{{ $college->address}}" id="collegeAddressInput">
    </div>
   <button type="submit" class="btn btn-success">Edit College</button>
   <a class="btn btn-primary" href="{{ route('colleges.index') }}" role="button">Go back to colleges index page</a>

</form>

@endsection