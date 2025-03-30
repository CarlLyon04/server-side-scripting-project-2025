@extends("layouts.master")

@section("content")
<h1 class="mb-4">List of Students</h2>
    <form method="GET" action="{{ route('students.index') }}">
        <label for="sortStudents" class="form-label">Sort: Students</label>
        <select name="sortStudents" od="sortStudents" class="form-select" onchange="this.form.submit()">
            <option value="id" @selected($sortStudents == 'id')>By ID</option>
            <option value="name"  @selected($sortStudents == 'name')>By Name</option>
        </select>
    </form>
    <br>
    <form method="GET" action="{{ route('students.index') }}">
        <label for="sortColleges" class="form-label">Sort: Colleges</label>
        <select name="sortColleges" id="sortColleges" class="form-select" onchange="this.form.submit()">
            <option value="">All Colleges</option>
            @forelse($colleges as $college)
                <option value="{{ $college->id }}" @selected($sortColleges == $college->id)>{{ $college->name}}</option>
            @empty
            <option disabled>No Students found</option>
            @endforelse
        </select>
    </form>
    <a class="btn btn-sm btn-success" href="{{ route('students.create') }}" role="button">Create a student</a>
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Student Phone</th>
                    <th scope="col">Student Date of Birth</th>
                    <th scope="col">College ID</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)

                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->college_id}}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('students.show', $student->id) }}"
                            role="button">View</a>
                        <a class="btn btn-sm btn-warning" href="{{ route('students.edit', $student->id) }}"
                            role="button">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <p>No Students found</p>

                @endforelse
            </tbody>
            <table>
    </div>

@endsection