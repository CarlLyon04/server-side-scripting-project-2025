@if($errors->any())
<div class="alert alert-danger" role="alert">
    <h4>There were problems with submitting the form: Kindly check the below details.</h4>
</div>
@endif

<div class="mb-3">
    <label for="name" class="form-label">College Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="address" class="form-label">College Address</label>
    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ old('address') }}">
    @error('address')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>