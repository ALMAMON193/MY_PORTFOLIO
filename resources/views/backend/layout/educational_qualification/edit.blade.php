@extends('backend.app')

@section('title', 'Edit Working Experience')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="col-xxl-">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Working Experience Edit</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <form method="POST"
                                action="{{ route('admin.educational.qualification.update', $educationalQualification->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="degree" class="form-label">Degree<span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="degree" id="degree"
                                            class="form-control @error('degree') is-invalid @enderror"
                                            value="{{ old('degree', $educationalQualification->degree) }}"
                                            placeholder="Enter degree">
                                        @error('degree')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="field_of_study" class="form-label">Field of Study</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="field_of_study" id="field_of_study"
                                            class="form-control @error('field_of_study') is-invalid @enderror"
                                            value="{{ old('field_of_study', $educationalQualification->field_of_study) }}"
                                            placeholder="Enter field of study">
                                        @error('field_of_study')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="institution_name" class="form-label">Institution Name<span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="institution_name" id="institution_name"
                                            class="form-control @error('institution_name') is-invalid @enderror"
                                            value="{{ old('institution_name', $educationalQualification->institution_name) }}"
                                            placeholder="Enter institution name">
                                        @error('institution_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="location" class="form-label">Location</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="location" id="location"
                                            class="form-control @error('location') is-invalid @enderror"
                                            value="{{ old('location', $educationalQualification->location) }}"
                                            placeholder="Enter location">
                                        @error('location')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="start_date" class="form-label">Start Date<span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="date" name="start_date" id="start_date"
                                            class="form-control @error('start_date') is-invalid @enderror"
                                            value="{{ old('start_date', $educationalQualification->start_date) }}">
                                        @error('start_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="date" name="end_date" id="end_date"
                                            class="form-control @error('end_date') is-invalid @enderror"
                                            value="{{ old('end_date', $educationalQualification->end_date) }}">
                                        @error('end_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="cgpa" class="form-label">CGPA</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="number" step="0.01" name="cgpa" id="cgpa"
                                            class="form-control @error('cgpa') is-invalid @enderror"
                                            value="{{ old('cgpa', $educationalQualification->cgpa) }}"
                                            placeholder="Enter CGPA">
                                        @error('cgpa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="certificate" class="form-label">Certificate (optional)</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="file" name="certificate" id="certificate"
                                            class="form-control @error('certificate') is-invalid @enderror">
                                        @error('certificate')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="description" class="form-label">Description</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                            placeholder="Enter a description">{{ old('description', $educationalQualification->description) }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-9 offset-lg-3">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
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

    </div>
@endsection

@push('js')
@endpush
