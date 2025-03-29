@extends("layouts.master")

@section("content")

<h1 class="mb-4">Create Student</h2>
<form>
    <div class="mb-3">
        <label for="" class="form-label">Student Name</label>
        <input type="text" class="form-control" id="collegeNameInput">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Student Email</label>
        <input type="text" class="form-control" id="collegeAddressInput">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Student Phone</label>
        <input type="text" class="form-control" id="collegeNameInput">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Student Date of Birth</label>
        <input type="text" class="form-control" id="collegeAddressInput">
    </div>
   <button type="submit" class="btn btn-success">Create Student</button>
</form>

@endsection