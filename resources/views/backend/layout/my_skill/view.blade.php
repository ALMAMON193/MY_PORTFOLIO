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
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">View Skill Details</h4>
                        </div>
                    </div>
                </div>

                <!-- Educational Qualification Details Card -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0 card-title">Skill Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="label">Name:</div>
                                    <div class="value">{{ $skill->name }}</div>
                                </div>

                                <div class="mb-3">
                                    <div class="label">Skill Type:</div>
                                    <div class="value">{{ $skill->skill_type }}</div>
                                </div>

                                <div class="mb-3">
                                    <div class="label">Description:</div>
                                    <div class="value">{{ $skill->description ?? 'N/A' }}</div>
                                </div>

                                <div class="mb-3">
                                    <div class="label">Percentage:</div>
                                    <div class="value">{{ $skill->percentage ?? 'N/A' }} %</div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0 card-title">Icon</h4>
                            </div>
                            <div class="text-center card-body">
                                @if ($skill->icon)
                                    <img src="{{ asset($skill->icon) }}" alt="Skill Preview" class="preview-img">
                                @else
                                    <span>No Skill Image uploaded.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-end">
                            <a href="{{ route('admin.my.skill.index') }}" class="btn btn-secondary">Back to
                                List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
