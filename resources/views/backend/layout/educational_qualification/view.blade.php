@extends('backend.app')

@section('title', 'View Educational Qualification')

@push('style')
    <style>
        .card {
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #ddd;
            padding: 10px 15px;
        }

        .card-title {
            margin: 0;
            font-size: 18px;
            font-weight: 500;
        }

        .card-body {
            padding: 15px;
        }

        .preview-img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            max-width: 300px;
        }

        .text-muted {
            font-size: 14px;
            color: #6c757d;
        }

        .label {
            font-weight: 500;
            color: #495057;
        }

        .value {
            margin-bottom: 10px;
        }
    </style>
@endpush

@section('content')

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">View Educational Qualification</h4>
                        </div>
                    </div>
                </div>

                <!-- Educational Qualification Details Card -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0 card-title">Educational Qualification Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="label">Degree:</div>
                                    <div class="value">{{ $educationalQualification->degree }}</div>
                                </div>

                                <div class="mb-3">
                                    <div class="label">Field of Study:</div>
                                    <div class="value">{{ $educationalQualification->field_of_study ?? 'N/A' }}</div>
                                </div>

                                <div class="mb-3">
                                    <div class="label">Institution Name:</div>
                                    <div class="value">{{ $educationalQualification->institution_name }}</div>
                                </div>

                                <div class="mb-3">
                                    <div class="label">Location:</div>
                                    <div class="value">{{ $educationalQualification->location ?? 'N/A' }}</div>
                                </div>

                                <div class="mb-3">
                                    <div class="label">Start Date:</div>
                                    <div class="value">{{ $educationalQualification->start_date }}</div>
                                </div>

                                <div class="mb-3">
                                    <div class="label">End Date:</div>
                                    <div class="value">{{ $educationalQualification->end_date ?? 'N/A' }}</div>
                                </div>

                                <div class="mb-3">
                                    <div class="label">CGPA:</div>
                                    <div class="value">{{ $educationalQualification->cgpa ?? 'N/A' }}</div>
                                </div>

                                <div class="mb-3">
                                    <div class="label">Description:</div>
                                    <div class="value">{{ $educationalQualification->description ?? 'N/A' }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0 card-title">Certificate</h4>
                            </div>
                            <div class="text-center card-body">
                                @if ($educationalQualification->certificate)
                                    <img src="{{ asset($educationalQualification->certificate) }}" alt="Certificate Preview"
                                        class="preview-img">
                                @else
                                    <span>No certificate uploaded.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-end">
                            <a href="{{ route('admin.educational.qualification.index') }}" class="btn btn-secondary">Back to
                                List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('script')
@endpush
