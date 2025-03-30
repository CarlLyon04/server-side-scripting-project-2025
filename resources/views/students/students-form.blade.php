<div class="mb-3">
    <label for="studentNameInput" class="form-label">Student Name</label>
    <input type="text" name="name" class="form-control" id="studentNameInput">
</div>
<div class="mb-3">
    <label for="studentEmailInput" class="form-label">Student Email</label>
    <input type="text" name="email" class="form-control" id="studentEmailInput">
</div>
<div class="mb-3">
    <label for="studentPhoneInput" class="form-label">Student Phone</label>
    <input type="text" name="phone" class="form-control" id="studentPhoneInput">
</div>
<div class="mb-3">
    <label for="studentDateInput" class="form-label">Student Date of Birth</label>
    <input type="text" name="dob" class="form-control" id="studentDateInput">
</div>
<div class="mb-3">
    <label for="collegeNameInput" class="form-label">Student College designation</label>
    <input list="colleges" name="collegeName" class="form-control" id=collegeNameInput>
    <datalist id="colleges">
        @forelse($colleges as $college)
            <option value="{{ $college->name}}">
        @empty
            <option value="No colleges to choose from... Please create a college prior to creating a student">
        @endforelse
</div>