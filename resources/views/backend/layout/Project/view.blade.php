@extends('backend.app')
@section('title', 'Admin Dashboard | View Project')

@push('style')
    <style>
        .preview-img,
        .preview-video {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .text-muted {
            font-size: 12px;
            color: #6c757d;
            max-width: 120px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .image-preview-container,
        .video-preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .preview-card {
            position: relative;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 150px;
        }

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
    </style>
@endpush

@section('content')
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">View Project</h4>
                        </div>
                    </div>
                </div>

                <!-- Project Details Card -->
                <div class="row">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0 card-title">Project Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label"><strong>Name:</strong></label>
                                                <p>{{ $data->name }}</p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"><strong>Github Link:</strong></label>
                                                <p>
                                                    <a href="{{ $data->github_link }}"
                                                        target="_blank">{{ $data->github_link }}</a>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"><strong>Live Link:</strong></label>
                                                <p>
                                                    <a href="{{ $data->live_link }}"
                                                        target="_blank">{{ $data->live_link }}</a>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"><strong>Status:</strong></label>
                                                <p
                                                    class="badge {{ $data->status == 'Active' ? 'bg-success' : 'bg-danger' }} text-white">
                                                    {{ $data->status }}</p>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">

                                                <div class="mb-3">
                                                    <label class="form-label"><strong>Start Date:</strong></label>
                                                    <p>{{ $data->start_date }}</p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"><strong>End Date:</strong></label>
                                                    <p>{{ $data->end_date }}</p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label"><strong>Description:</strong></label>
                                                    <p>{{ $data->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Images Card -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0 card-title">Project Images</h4>
                                </div>
                                <div class="card-body">
                                    <div class="image-preview-container">
                                        @forelse($projectImages as $image)
                                            <div class="preview-card">
                                                <img src="{{ asset($image->image) }}" class="preview-img"
                                                    alt="Project Image">
                                                <div class="text-muted">{{ basename($image->image) }}</div>
                                            </div>
                                        @empty
                                            <p>No images uploaded for this project.</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Videos Card -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0 card-title">Project Videos</h4>
                                </div>
                                <div class="card-body">
                                    <div class="video-preview-container">
                                        @forelse($projectVideos as $video)
                                            <div class="preview-card">
                                                <video src="{{ asset($video->video) }}" class="preview-video"
                                                    controls></video>
                                                <div class="text-muted">{{ basename($video->video) }}</div>
                                            </div>
                                        @empty
                                            <p>No videos uploaded for this project.</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
