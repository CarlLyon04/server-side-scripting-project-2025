@extends("layouts.master")

@section("content")

<h1 class="mb-4">Edit College</h2>
<form>
    <div class="mb-3">
        <label for="collegeNameInput" class="form-label">College Name</label>
        <input type="text" class="form-control" id="collegeNameInput">
    </div>
    <div class="mb-3">
        <label for="collegeAddressInput" class="form-label">College Address</label>
        <input type="text" class="form-control" id="collegeAddressInput">
    </div>
   <button type="submit" class="btn btn-success">Edit College</button>
</form>

@endsection