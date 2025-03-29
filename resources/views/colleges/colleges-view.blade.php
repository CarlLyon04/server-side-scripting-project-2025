@extends("layouts.master")

@section("content")

<h1 class="mb-4">View College</h2>
<form action="{{ route('colleges.show', $college->id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">College Name</label>
        <input type="text" class="form-control" id="collegeNameInput" value="{{ $college->name}}" disabled>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">College Address</label>
        <input type="text" class="form-control" id="collegeAddressInput" value="{{ $college->address}}" disabled>
    </div>
    <a class="btn btn-primary" href="{{ route('colleges.index') }}" role="button">Go back to colleges index page</a>
</form>

@endsection