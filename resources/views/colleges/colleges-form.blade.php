<!--IF statement so that if any fields are invalid, a bootstrap 5 danger alert will be displayed-->
@if($errors->any())

<!--Bootstrap 5 danger alert-->
<div class="alert alert-danger" role="alert">
    <h4>There were problems with submitting the form: Kindly check the below details.</h4>
</div>

@endif

<!--Label and input field for the college name. 'old("name")' is so that when the form is invalid, the valid details are not lost-->
<div class="mb-3">
    <label for="name" class="form-label">College Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
        value="{{ old('name') }}">

    <!--Display a validation error if the name is invalid along with the reason for the issue-->
    @error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<!--Label and input field for the college address. 'old("address")' is so that when the form is invalid, the valid details are not lost-->
<div class="mb-3">
    <label for="address" class="form-label">College Address</label>
    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address"
        value="{{ old('address') }}">

    <!--Display a validation error if the address is invalid along with the reason for the issue-->
    @error('address')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>