@extends("layouts.master")

@section("content")

<h1 class="mb-4">Create College</h2>
<form>
    <div class="mb-3">
        <label for="" class="form-label">College Name</label>
        <input type="text" class="form-control" id="collegeNameInput">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">College Address</label>
        <input type="text" class="form-control" id="collegeAddressInput">
    </div>
   <button type="submit" class="btn btn-success">Create College</button>
</form>

@endsection