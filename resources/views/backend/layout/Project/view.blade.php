@extends('backend.app')
@section('title', 'Admin Dashboard | View Project')

@push('style')
    <style>
        .card {
            margin-bottom: 25px;
            border: none;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
            border-radius: 10px;
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #eee;
            padding: 15px 20px;
            border-radius: 10px 10px 0 0 !important;
        }

        .card-title {
            margin: 0;
            font-size: 18px;
            font-weight: 600;
            color: #333;
            display: flex;
            align-items: center;
        }

        .card-title i {
            margin-right: 10px;
            font-size: 20px;
        }

        .detail-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f1f1f1;
        }

        .detail-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .detail-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 5px;
        }

        .detail-value {
            color: #495057;
        }

        .badge {
            padding: 5px 10px;
            font-size: 13px;
            font-weight: 500;
        }

        .media-preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .media-preview-card {
            position: relative;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            width: 160px;
            transition: all 0.3s ease;
        }

        .media-preview-img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 5px;
        }

        .media-preview-video {
            width: 100%;
            height: 120px;
            border-radius: 5px;
        }

        .media-filename {
            font-size: 12px;
            color: #6c757d;
            margin-top: 5px;
            text-align: center;
            word-break: break-all;
        }

        .feature-card, .tech-card, .challenge-card {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #444;
        }

        .empty-state {
            text-align: center;
            padding: 20px;
            color: #6c757d;
        }

        .empty-state i {
            font-size: 40px;
            margin-bottom: 10px;
            color: #ddd;
        }
    </style>
@endpush

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- Breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Project Details</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="">Projects</a></li>
                                <li class="breadcrumb-item active">View Project</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Basic Information Card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0 card-title"><i class="ri-information-line"></i> Basic Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <div class="detail-label">Project Name</div>
                                        <div class="detail-value">{{ $data->name ?? 'N/A' }}</div>
                                    </div>

                                    <div class="detail-item">
                                        <div class="detail-label">Category</div>
                                        <div class="detail-value">{{ $data->category ?? 'N/A' }}</div>
                                    </div>

                                    <div class="detail-item">
                                        <div class="detail-label">Repository Type</div>
                                        <div class="detail-value">
                                            <span class="badge bg-{{ $data->repository == 'public' ? 'success' : 'secondary' }}">
                                                {{ $data->repository ?? 'N/A' }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="detail-item">
                                        <div class="detail-label">Team Size</div>
                                        <div class="detail-value">{{ $data->team_size ?? 'N/A' }}</div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <div class="detail-label">Start Date</div>
                                        <div class="detail-value">{{ $data->start_date ? date('M d, Y', strtotime($data->start_date)) : 'N/A' }}</div>
                                    </div>

                                    <div class="detail-item">
                                        <div class="detail-label">End Date</div>
                                        <div class="detail-value">{{ $data->end_date ? date('M d, Y', strtotime($data->end_date)) : 'N/A' }}</div>
                                    </div>

                                    <div class="detail-item">
                                        <div class="detail-label">Status</div>
                                        <div class="detail-value">
                                            <span class="badge {{ $data->status == 'Active' ? 'bg-success' : 'bg-danger' }}">
                                                {{ $data->status ?? 'N/A' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="detail-item">
                                <div class="detail-label">Description</div>
                                <div class="detail-value" style="white-space: pre-line;">{{ $data->description ?? 'No description provided' }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Links Card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0 card-title"><i class="ri-links-line"></i> Project Links</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <div class="detail-label">GitHub Repository</div>
                                        <div class="detail-value">
                                            @if($data->github_link)
                                                <a href="{{ $data->github_link }}" target="_blank" class="text-primary">
                                                    {{ Str::limit($data->github_link, 40) }}
                                                    <i class="ri-external-link-line"></i>
                                                </a>
                                            @else
                                                N/A
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="detail-item">
                                        <div class="detail-label">Live URL</div>
                                        <div class="detail-value">
                                            @if($data->live_link)
                                                <a href="{{ $data->live_link }}" target="_blank" class="text-primary">
                                                    {{ Str::limit($data->live_link, 40) }}
                                                    <i class="ri-external-link-line"></i>
                                                </a>
                                            @else
                                                N/A
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Media Cards -->
                    <div class="row">
                        <!-- Images Card -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0 card-title"><i class="ri-image-line"></i> Project Images</h4>
                                </div>
                                <div class="card-body">
                                    @if($projectImages->count() > 0)
                                        <div class="media-preview-container">
                                            @foreach($projectImages as $image)
                                                <div class="media-preview-card">
                                                    <img src="{{ asset($image->image) }}" class="media-preview-img" alt="Project Image" loading="lazy">
                                                    <div class="media-filename" title="{{ basename($image->image) }}">
                                                        {{ Str::limit(basename($image->image), 20) }}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="empty-state">
                                            <i class="ri-image-line"></i>
                                            <p>No images uploaded</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Videos Card -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0 card-title"><i class="ri-video-line"></i> Project Videos</h4>
                                </div>
                                <div class="card-body">
                                    @if($projectVideos->count() > 0)
                                        <div class="media-preview-container">
                                            @foreach($projectVideos as $video)
                                                <div class="media-preview-card">
                                                    <video controls class="media-preview-video">
                                                        <source src="{{ asset($video->video) }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                    <div class="media-filename" title="{{ basename($video->video) }}">
                                                        {{ Str::limit(basename($video->video), 20) }}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="empty-state">
                                            <i class="ri-video-line"></i>
                                            <p>No videos uploaded</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Features Card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0 card-title"><i class="ri-function-line"></i> Project Features</h4>
                        </div>
                        <div class="card-body">
                            @if($projectFeatures->count() > 0)
                                @foreach($projectFeatures as $feature)
                                    <div class="feature-card">
                                        <h5 class="section-title">{{ $feature->feature_name ?? '' }}</h5>
                                        <p>{{ $feature->feature_description ?? 'No description provided' }}</p>
                                    </div>
                                @endforeach
                            @else
                                <div class="empty-state">
                                    <i class="ri-function-line"></i>
                                    <p>No features added</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Technologies Card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0 card-title"><i class="ri-code-line"></i> Technologies Used</h4>
                        </div>
                        <div class="card-body">
                            @if($projectTechnologies->count() > 0)
                                <div class="row">
                                    @foreach($projectTechnologies as $tech)
                                        <div class="col-md-4 mb-3">
                                            <div class="tech-card">
                                                <div class="d-flex align-items-center">
                                                    @if($tech->icon)
                                                        <img src="{{ asset($tech->icon) }}" alt="{{ $tech->technology_name }}" width="30" height="30" class="me-2">
                                                    @else
                                                        <i class="ri-code-box-line me-2" style="font-size: 24px;"></i>
                                                    @endif
                                                    <h5 class="section-title mb-0">{{ $tech->technology_name }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="empty-state">
                                    <i class="ri-code-line"></i>
                                    <p>No technologies listed</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Challenges Card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0 card-title"><i class="ri-lightbulb-flash-line"></i> Challenges & Solutions</h4>
                        </div>
                        <div class="card-body">
                            @if($projectChallenges->count() > 0)
                                @foreach($projectChallenges as $challenge)
                                    <div class="challenge-card mb-3">
                                        <h5 class="section-title">{{ $challenge->challenge_name }}</h5>
                                        <div class="mb-2">
                                            <strong>Problem:</strong>
                                            <p>{{ $challenge->problem_description ?? 'No problem description' }}</p>
                                        </div>
                                        <div>
                                            <strong>Solution:</strong>
                                            <p>{{ $challenge->solution_description ?? 'No solution provided' }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="empty-state">
                                    <i class="ri-lightbulb-flash-line"></i>
                                    <p>No challenges documented</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Back Button -->
                    <div class="row mt-3">
                        <div class="col-12">
                            <a href="" class="btn btn-light">
                                <i class="ri-arrow-left-line align-middle me-1"></i> Back to Projects
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
