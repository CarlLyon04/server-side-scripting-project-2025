<!--Dropdown 'form' for filtering students-->
<form method="GET" action="{{ route('students.index') }}">
    <label for="sortStudents" class="form-label">Sort: Students</label>
    
    <!--Select menu for sorting students-->
    <select name="sortStudents" id="sortStudents" class="form-select" onchange="this.form.submit()">
        <!--Option to see students by ID (unfiltered / default)-->
        <option value="id" @selected($sortStudents == 'id')>By ID</option>

        <!--Option to see students by name-->
        <option value="name" @selected($sortStudents == 'name')>By Name</option>
    </select>
</form>