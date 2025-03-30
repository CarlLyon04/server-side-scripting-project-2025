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