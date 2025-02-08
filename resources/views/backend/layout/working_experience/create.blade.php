@extends('backend.app')

@section('title', 'Create Work Experience')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="col-xxl-">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Work Experience Create</h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.working.experience.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="job_title" class="form-label">Job Title<span
                                                class="text-danger">*</span> </label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="job_title" id="job_title"
                                            class="form-control @error('job_title') is-invalid @enderror"
                                            value="{{ old('job_title') }}" placeholder="Enter job title">
                                        @error('job_title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="company_name" class="form-label">Company Name<span
                                                class="text-danger">*</span> </label></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="company_name" id="company_name"
                                            class="form-control @error('company_name') is-invalid @enderror"
                                            value="{{ old('company_name') }}" placeholder="Enter company name">
                                        @error('company_name')
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
                                            value="{{ old('location') }}" placeholder="Enter a location">
                                        @error('location')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="start_date" class="form-label">Start Date<span
                                                class="text-danger">*</span> </label></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="date" name="start_date" id="start_date"
                                            class="form-control @error('start_date') is-invalid @enderror"
                                            value="{{ old('start_date') }}" placeholder="Enter ">
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
                                            value="{{ old('end_date') }}">
                                        @error('end_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="job_description" class="form-label">Job Description</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea name="job_description" id="job_description"
                                            class="form-control @error('job_description') is-invalid @enderror" placeholder="Enter a description">{{ old('job_description') }}</textarea>
                                        @error('job_description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="employment_type" class="form-label">Employment Type</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="employment_type" id="employment_type"
                                            class="form-control @error('employment_type') is-invalid @enderror"
                                            value="{{ old('employment_type') }}" placeholder="Enter a employment type">
                                        @error('employment_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Add Project</button>
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
