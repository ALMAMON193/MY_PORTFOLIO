@extends('backend.app')

@section('title', 'Create Personal Information')
@push('style')
    <style>
        .card-header {
            background-color: #F3F6F9;
            border-bottom: 1px solid #ddd;
            padding: 10px 15px;
        }
    </style>
@endpush
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-xxl-">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="mb-0 card-title flex-grow-1">Create Personal Information</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.personal.info.store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <!-- Personal Details Card -->
                                <div class="mb-3 card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Personal Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="fnameInput" class="form-label">First Name</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('fname') is-invalid @enderror"
                                                    id="fnameInput" name="fname"
                                                    value="{{ old('fname', $data->fname ?? '') }}"
                                                    placeholder="Enter your first name">
                                                @error('fname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="lnameInput" class="form-label">Last Name</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('lname') is-invalid @enderror"
                                                    id="lnameInput" name="lname"
                                                    value="{{ old('lname', $data->lname ?? '') }}"
                                                    placeholder="Enter your last name">
                                                @error('lname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="emailInput" class="form-label">Email</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="emailInput" name="email"
                                                    value="{{ old('email', $data->email ?? '') }}"
                                                    placeholder="Enter your email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="genderInput" class="form-label">Gender</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <select class="form-control @error('gender') is-invalid @enderror"
                                                    id="genderInput" name="gender">
                                                    <option value="">Select Gender</option>
                                                    <option value="male"
                                                        {{ old('gender', $data->gender ?? '') == 'male' ? 'selected' : '' }}>
                                                        Male
                                                    </option>
                                                    <option value="female"
                                                        {{ old('gender', $data->gender ?? '') == 'female' ? 'selected' : '' }}>
                                                        Female</option>
                                                    <option value="other"
                                                        {{ old('gender', $data->gender ?? '') == 'other' ? 'selected' : '' }}>
                                                        Other
                                                    </option>
                                                </select>
                                                @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="dobInput" class="form-label">Date of Birth</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="date"
                                                    class="form-control @error('date_of_birth') is-invalid @enderror"
                                                    id="dobInput" name="date_of_birth"
                                                    value="{{ old('date_of_birth', $data->date_of_birth ?? '') }}">
                                                @error('date_of_birth')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Personal Details Card -->

                                <!-- Contact Details Card -->
                                <div class="mb-3 card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Contact Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="phoneInput" class="form-label">Phone</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    id="phoneInput" name="phone"
                                                    value="{{ old('phone', $data->phone ?? '') }}" maxlength="20"
                                                    placeholder="Enter your phone number">
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="addressInput" class="form-label">Address</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    id="addressInput" name="address"
                                                    value="{{ old('address', $data->address ?? '') }}" maxlength="255"
                                                    placeholder="Enter your address">
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="cityInput" class="form-label">City</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('city') is-invalid @enderror"
                                                    id="cityInput" name="city"
                                                    value="{{ old('city', $data->city ?? '') }}"
                                                    placeholder="Enter your city">
                                                @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="postalCodeInput" class="form-label">Postal Code</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('postal_code') is-invalid @enderror"
                                                    id="postalCodeInput" name="postal_code"
                                                    value="{{ old('postal_code', $data->postal_code ?? '') }}"
                                                    maxlength="10" placeholder="Enter your postal code">
                                                @error('postal_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="countryInput" class="form-label">Country</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('country') is-invalid @enderror"
                                                    id="countryInput" name="country"
                                                    value="{{ old('country', $data->country ?? '') }}" maxlength="255"
                                                    placeholder="Enter your country">
                                                @error('country')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Contact Details Card -->

                                <!-- Professional Details Card -->
                                <div class="mb-3 card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Professional Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="occupationInput" class="form-label">Occupation</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('occupation') is-invalid @enderror"
                                                    id="occupationInput" name="occupation"
                                                    value="{{ old('occupation', $data->occupation ?? '') }}"
                                                    maxlength="255" placeholder="Enter your occupation">
                                                @error('occupation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="companyNameInput" class="form-label">Company Name</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('company_name') is-invalid @enderror"
                                                    id="companyNameInput" name="company_name"
                                                    value="{{ old('company_name', $data->company_name ?? '') }}"
                                                    maxlength="255" placeholder="Enter your company name">
                                                @error('company_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="bioInput" class="form-label">Bio</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <textarea class="form-control @error('bio') is-invalid @enderror" id="bioInput" name="bio" rows="4"
                                                    placeholder="Write something about yourself">{{ old('bio', $data->bio ?? '') }}</textarea>
                                                @error('bio')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Professional Details Card -->

                                <!-- Emergency Contact Card -->
                                <div class="mb-3 card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Emergency Contact</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <div class="col-lg-3">
                                                <label for="emergencyContactPhoneInput" class="form-label">Emergency
                                                    Contact
                                                    Phone</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text"
                                                    class="form-control @error('emergency_contact_phone') is-invalid @enderror"
                                                    id="emergencyContactPhoneInput" name="emergency_contact_phone"
                                                    value="{{ old('emergency_contact_phone', $data->emergency_contact_phone ?? '') }}"
                                                    maxlength="20" placeholder="Enter emergency contact phone">
                                                @error('emergency_contact_phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Emergency Contact Card -->

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Add Info</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@push('js')
    <script>
        setTimeout(function() {
            var alert = document.getElementById('success-alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 5000);
    </script>
@endpush
