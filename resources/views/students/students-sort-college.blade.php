<!--Dropdown 'form' for filtering by the college-->
<form method="GET" action="{{ route('students.index') }}">
    <label for="sortColleges" class="form-label">Sort: Colleges</label>

    <!--Select menu for sorting by colleges-->
    <select name="sortColleges" id="sortColleges" class="form-select" onchange="this.form.submit()">
        <!--Option to see students of all colleges (unfiltered / default)-->
        <option value="">All Colleges</option>

        <!--For loop going over every existing college to filter-->
        @forelse($colleges as $college)
        <option value="{{ $college->id }}" @selected($sortColleges==$college->id)>{{$college->name}}</option>
        @empty

        <!--Disable the option if no colleges exist-->
        <option disabled>There are no colleges. Please create a college to assign a student.</option>
        @endforelse
    </select>
</form>