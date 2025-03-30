@if($errors->any())
<div class="alert alert-danger" role="alert">
    <h4>There were problems with submitting the form: Kindly check the below details.</h4>
</div>
@endif

<div class="mb-3">
    <label for="name" class="form-label">Student Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
    @error('address')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Student Email</label>
    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Student Phone</label>
    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ old('phone') }}">
    @error('phone')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="dob" class="form-label">Student Date of Birth: YYYY/MM/DD</label>
    <input type="text" name="dob" class="form-control @error('dob') is-invalid @enderror" id="dob" value="{{ old('dob') }}">
    @error('dob')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="collegeName" class="form-label">Student College designation</label>
    <input list="colleges" name="collegeName" class="form-control @error('collegeName') is-invalid @enderror" id="collegeName" value="{{ old('collegeName') }}">
    @error('collegeName')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    <datalist id="colleges">
        @forelse($colleges as $college)
            <option value="{{ $college->name}}">
        @empty
            <option value="No colleges to choose from... Please create a college prior to creating a student">
        @endforelse

</div>