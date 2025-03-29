@extends("layouts.master")

@section("content")

<h1 class="mb-4">View College</h2>
<form>
    <div class="mb-3">
        <label for="" class="form-label">College Name</label>
        <input type="text" class="form-control" id="collegeNameInput" disabled>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">College Address</label>
        <input type="text" class="form-control" id="collegeAddressInput" disabled>
    </div>
    <a class="btn btn-primary" href="{{ route('colleges.index') }}" role="button">Go back to colleges index page</a>
</form>

@endsection