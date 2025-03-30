@extends("layouts.master")

@section("content")

<h1 class="mb-4">Edit Student</h2>
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('students.students-form')
   <button type="submit" class="btn btn-success">Edit Student</button>
   <a class="btn btn-primary" href="{{ route('students.index') }}" role="button">Go back to students index page</a>

</form>

@endsection