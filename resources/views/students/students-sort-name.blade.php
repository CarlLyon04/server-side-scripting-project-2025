<form method="GET" action="{{ route('students.index') }}">
    <label for="sortStudents" class="form-label">Sort: Students</label>
    <select name="sortStudents" od="sortStudents" class="form-select" onchange="this.form.submit()">
        <option value="id" @selected($sortStudents == 'id')>By ID</option>
        <option value="name"  @selected($sortStudents == 'name')>By Name</option>
    </select>
</form>