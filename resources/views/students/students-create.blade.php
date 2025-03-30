@extends("layouts.master")

@section("content")

<h1 class="mb-4">Create Student</h2>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    @include('students.students-form')
   <button type="submit" class="btn btn-success">Create Student</button>
   <a class="btn btn-primary" href="{{ route('students.index') }}" role="button">Go back to students index page</a>

</form>

@endsection