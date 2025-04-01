<!--IF statement so that if any fields are invalid, a bootstrap 5 danger alert will be displayed-->
@if($errors->any())

<!--Bootstrap 5 danger alert-->
<div class="alert alert-danger" role="alert">
    <h4>There were problems with submitting the form: Kindly check the below details.</h4>
</div>
@endif

<!--Label and input field for the student name. 'old("name")' is so that when the form is invalid, the valid details are not lost-->
<div class="mb-3">
    <label for="name" class="form-label">Student Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
        value="{{ old('name') }}">

    <!--Display a validation error if the name is invalid along with the reason for the issue-->
    @error('address')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<!--Label and input field for the student email. 'old("email")' is so that when the form is invalid, the valid details are not lost-->
<div class="mb-3">
    <label for="email" class="form-label">Student Email</label>
    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
        value="{{ old('email') }}">

    <!--Display a validation error if the email is invalid along with the reason for the issue-->
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<!--Label and input field for the student phone. 'old("phone")' is so that when the form is invalid, the valid details are not lost-->
<div class="mb-3">
    <label for="phone" class="form-label">Student Phone</label>
    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"
        value="{{ old('phone') }}">
    
    <!--Display a validation error if the phone format is invalid along with the reason for the issue-->
    @error('phone')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<!--Label and input field for the student date of birth. 'old("dob")' is so that when the form is invalid, the valid details are not lost-->
<div class="mb-3">
    <label for="dob" class="form-label">Student Date of Birth: YYYY/MM/DD</label>
    <input type="text" name="dob" class="form-control @error('dob') is-invalid @enderror" id="dob"
        value="{{ old('dob') }}">
        
    <!--Display a validation error if the date of birth format is invalid along with the reason for the issue-->
    @error('dob')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<!--Label and input field for the student college name. 'old("collegeName")' is so that when the form is invalid, the valid details are not lost-->
<div class="mb-3">
    <label for="collegeName" class="form-label">Student College designation</label>
    <input list="colleges" name="collegeName" class="form-control @error('collegeName') is-invalid @enderror"
        id="collegeName" value="{{ old('collegeName') }}">

    <!--Display a validation error if the name is invalid along with the reason for the issue-->
    @error('collegeName')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

    <!--A list of options based on the existing colleges to be chosen from for assigning the college name (eventually college id in the controller) to the student-->
    <datalist id="colleges">
        @forelse($colleges as $college)
        <option value="{{ $college->name}}">
            <!--Should there be no existing colleges, a message will be shown that there are no colleges to choose from-->
            @empty
        <option value="No colleges to choose from... Please create a college prior to creating a student">
            @endforelse
</div>