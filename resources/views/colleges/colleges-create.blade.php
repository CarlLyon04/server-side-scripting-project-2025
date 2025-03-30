@extends("layouts.master")

@section("content")

<h1 class="mb-4">Create College</h2>
<form action="{{ route('colleges.store') }}" method="POST" class="needs-validation" novalidate>
    @csrf
    @include('colleges.colleges-form', ['college' => new \App\Models\College()])
   <button type="submit" class="btn btn-success">Create College</button>
   <a class="btn btn-primary" href="{{ route('colleges.index') }}" role="button">Go back to colleges index page</a>
</form>

@endsection