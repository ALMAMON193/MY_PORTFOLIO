@extends('backend.app')
@section('title', 'Admin Dashboard | Edit Project')

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
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

        .remove-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background: red;
            color: white;
            border: none;
            padding: 2px 5px;
            cursor: pointer;
            font-size: 12px;
            border-radius: 50%;
        }
        .note-editor .note-toolbar, .note-popover .popover-content{
            background: #E1E1E3 !important;
        }
    </style>
@endpush

@section('content')
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Edit Project</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0 card-title">Edit Project Details</h4>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Basic Information Card -->
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="mb-0 text-muted">Basic Information</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="mb-3 col-md-4">
                                                    <label for="nameInput" class="form-label">Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                           id="nameInput" name="name" value="{{ old('name', $project->name) }}"
                                                           placeholder="Enter project name" required>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3 col-md-4">
                                                    <label for="startDateInput" class="form-label">Start Date <span class="text-danger">*</span></label>
                                                    <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                                                           id="startDateInput" name="start_date" value="{{ old('start_date', $project->start_date) }}" required>
                                                    @error('start_date')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3 col-md-4">
                                                    <label for="endDateInput" class="form-label">End Date</label>
                                                    <input type="date" class="form-control @error('end_date') is-invalid @enderror"
                                                           id="endDateInput" name="end_date" value="{{ old('end_date', $project->end_date) }}">
                                                    @error('end_date')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Specifications Card -->
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="mb-0">Project Specifications<span class="text-danger">*</span></h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="mb-3 col-md-4">
                                                    <label for="categoryInput" class="form-label">Category<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('category') is-invalid @enderror"
                                                           id="categoryInput" name="category" value="{{ old('category', $project->category) }}"
                                                           placeholder="Web Application, Mobile App, etc." required>
                                                    @error('category')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3 col-md-4">
                                                    <label for="repositoryInput" class="form-label">Repository Visibility</label>
                                                    <select class="form-control @error('repository') is-invalid @enderror"
                                                            id="repositoryInput" name="repository" required>
                                                        <option value="private" {{ old('repository', $project->repository) == 'private' ? 'selected' : '' }}>Private</option>
                                                        <option value="public" {{ old('repository', $project->repository) == 'public' ? 'selected' : '' }}>Public</option>
                                                    </select>
                                                    @error('repository')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3 col-md-4">
                                                    <label for="teamSizeInput" class="form-label">Team Size</label>
                                                    <input type="number" class="form-control @error('team_size') is-invalid @enderror"
                                                           id="teamSizeInput" name="team_size" value="{{ old('team_size', $project->team_size) }}"
                                                           placeholder="Number of team members" min="1">
                                                    @error('team_size')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Links Card -->
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="mb-0 text-muted">Project Links</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="githubLinkInput" class="form-label">Github Link</label>
                                                    <input type="url" class="form-control @error('github_link') is-invalid @enderror"
                                                           id="githubLinkInput" name="github_link" value="{{ old('github_link', $project->github_link) }}"
                                                           placeholder="https://github.com/your-project">
                                                    @error('github_link')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="liveLinkInput" class="form-label">Live Link</label>
                                                    <input type="url" class="form-control @error('live_link') is-invalid @enderror"
                                                           id="liveLinkInput" name="live_link" value="{{ old('live_link', $project->live_link) }}"
                                                           placeholder="https://your-project.com">
                                                    @error('live_link')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Description Card -->
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6 class="mb-0">Project Description <span class="text-danger">*</span></h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="summernote" name="description"
                                              rows="5" required>{{ old('description', $project->description) }}</textarea>
                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Media Upload Card -->
                                    <!-- Image Upload -->
                                    <div class="mb-3">
                                        <label for="imageInput" class="form-label">Upload Images (JPEG, PNG, JPG, GIF,
                                            SVG)</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                               id="imageInput" multiple name="image[]" accept=".jpeg,.png,.jpg,.gif,.svg">
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Display Existing Images -->
                                    <div class="image-preview-container" id="previewContainer">
                                        @foreach ($projectImages as $image)
                                            <div class="preview-card">
                                                <img src="{{ asset($image->image) }}" class="preview-img"
                                                     alt="Project Image">
                                                <div class="text-muted">{{ basename($image->image) }}</div>
                                                <button type="button" class="remove-btn"
                                                        onclick="deleteImage({{ $image->id }})">X</button>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Video Upload -->
                                    <div class="mb-3">
                                        <label for="videoInput" class="form-label">Upload Videos (MP4, AVI, MOV,
                                            MKV)</label>
                                        <input type="file" class="form-control @error('video') is-invalid @enderror"
                                               id="videoInput" multiple name="video[]" accept=".mp4,.avi,.mov,.mkv">
                                        @error('video')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Display Existing Videos -->
                                    <div class="video-preview-container" id="videoPreviewContainer">
                                        @foreach ($projectVideos as $video)
                                            <div class="preview-card">
                                                <video src="{{ asset($video->video) }}" class="preview-video"
                                                       controls></video>
                                                <div class="text-muted">{{ basename($video->video) }}</div>
                                                <button type="button" class="remove-btn"
                                                        onclick="deleteVideo({{ $video->id }})">X</button>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Project Features Card -->
                                    <div class="card mb-4" id="featuresSection">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0 text-muted">Project Features <span class="text-danger">*</span></h6>
                                            <button type="button" class="btn btn-sm btn-primary" id="addFeatureBtn">Add Feature</button>
                                        </div>
                                        <div class="card-body">
                                            <div id="featuresContainer">
                                                @foreach($project->features as $index => $feature)
                                                    <div class="feature-item mb-3 border p-3 rounded">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="form-label">Feature Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control @error('feature_name.'.$index) is-invalid @enderror"
                                                                       name="feature_name[]" value="{{ old('feature_name.'.$index, $feature->feature_name) }}"
                                                                       placeholder="Feature name" required>
                                                                @error('feature_name.'.$index)
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Description</label>
                                                                <textarea class="form-control @error('feature_description.'.$index) is-invalid @enderror" name="feature_description[]"
                                                                          rows="1" placeholder="Feature description">{{ old('feature_description.'.$index, $feature->feature_description) }}</textarea>
                                                                @error('feature_description.'.$index)
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                            @if($index > 0)
                                                                <div class="col-12 mt-2 text-end">
                                                                    <button type="button" class="btn btn-sm btn-danger remove-item">Remove</button>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach

                                                @if(count($project->features) == 0)
                                                    <div class="feature-item mb-3 border p-3 rounded">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="form-label">Feature Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control @error('feature_name.0') is-invalid @enderror"
                                                                       name="feature_name[]" value="{{ old('feature_name.0', '') }}"
                                                                       placeholder="Feature name" required>
                                                                @error('feature_name.0')
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Description</label>
                                                                <textarea class="form-control @error('feature_description.0') is-invalid @enderror" name="feature_description[]"
                                                                          rows="1" placeholder="Feature description">{{ old('feature_description.0', '') }}</textarea>
                                                                @error('feature_description.0')
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Technologies Card -->
                                    <div class="card mb-4" id="technologiesSection">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0">Technologies Used <span class="text-danger">*</span></h6>
                                            <button type="button" class="btn btn-sm btn-primary" id="addTechnologyBtn">Add Technology</button>
                                        </div>
                                        <div class="card-body">
                                            <div id="technologiesContainer">
                                                @foreach($project->technologies as $index => $technology)
                                                    <div class="technology-item mb-3 border p-3 rounded">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="form-label">Technology Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control @error('technology_name.'.$index) is-invalid @enderror"
                                                                       name="technology_name[]" value="{{ old('technology_name.'.$index, $technology->technology_name) }}"
                                                                       placeholder="Technology name" required>
                                                                @error('technology_name.'.$index)
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Icon</label>
                                                                @if($technology->icon)
                                                                    <div class="mb-2">
                                                                        <img src="{{ asset('storage/' . $technology->icon) }}" alt="Technology Icon" height="30">
                                                                    </div>
                                                                @endif
                                                                <input type="file" class="form-control @error('icon.'.$index) is-invalid @enderror"
                                                                       name="icon[]">
                                                                @error('icon.'.$index)
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                            @if($index > 0)
                                                                <div class="col-12 mt-2 text-end">
                                                                    <button type="button" class="btn btn-sm btn-danger remove-item">Remove</button>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach

                                                @if(count($project->technologies) == 0)
                                                    <div class="technology-item mb-3 border p-3 rounded">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="form-label">Technology Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control @error('technology_name.0') is-invalid @enderror"
                                                                       name="technology_name[]" value="{{ old('technology_name.0', '') }}"
                                                                       placeholder="Technology name" required>
                                                                @error('technology_name.0')
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Icon</label>
                                                                <input type="file" class="form-control @error('icon.0') is-invalid @enderror"
                                                                       name="icon[]">
                                                                @error('icon.0')
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Challenges Card -->
                                    <div class="card mb-4" id="challengesSection">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0">Challenges & Solutions <span class="text-danger">*</span></h6>
                                            <button type="button" class="btn btn-sm btn-primary" id="addChallengeBtn">Add Challenge</button>
                                        </div>
                                        <div class="card-body">
                                            <div id="challengesContainer">
                                                @foreach($project->challenges as $index => $challenge)
                                                    <div class="challenge-item mb-3 border p-3 rounded">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="form-label">Challenge Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control @error('challenge_name.'.$index) is-invalid @enderror"
                                                                       name="challenge_name[]" value="{{ old('challenge_name.'.$index, $challenge->challenge_name) }}"
                                                                       placeholder="Challenge name" required>
                                                                @error('challenge_name.'.$index)
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="form-label">Problem Description</label>
                                                                <textarea class="form-control @error('problem_description.'.$index) is-invalid @enderror" name="problem_description[]"
                                                                          rows="1" placeholder="Describe the problem">{{ old('problem_description.'.$index, $challenge->problem_description) }}</textarea>
                                                                @error('problem_description.'.$index)
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="form-label">Solution</label>
                                                                <textarea class="form-control @error('solution_description.'.$index) is-invalid @enderror" name="solution_description[]"
                                                                          rows="1" placeholder="Describe the solution">{{ old('solution_description.'.$index, $challenge->solution_description) }}</textarea>
                                                                @error('solution_description.'.$index)
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                            @if($index > 0)
                                                                <div class="col-12 mt-2 text-end">
                                                                    <button type="button" class="btn btn-sm btn-danger remove-item">Remove</button>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach

                                                @if(count($project->challenges) == 0)
                                                    <div class="challenge-item mb-3 border p-3 rounded">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="form-label">Challenge Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control @error('challenge_name.0') is-invalid @enderror"
                                                                       name="challenge_name[]" value="{{ old('challenge_name.0', '') }}"
                                                                       placeholder="Challenge name" required>
                                                                @error('challenge_name.0')
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="form-label">Problem Description</label>
                                                                <textarea class="form-control @error('problem_description.0') is-invalid @enderror" name="problem_description[]"
                                                                          rows="1" placeholder="Describe the problem">{{ old('problem_description.0', '') }}</textarea>
                                                                @error('problem_description.0')
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="form-label">Solution</label>
                                                                <textarea class="form-control @error('solution_description.0') is-invalid @enderror" name="solution_description[]"
                                                                          rows="1" placeholder="Describe the solution">{{ old('solution_description.0', '') }}</textarea>
                                                                @error('solution_description.0')
                                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="mb-4">
                                        <div class="gap-2 d-grid d-md-flex justify-content-md-end">
                                            <a href="{{ route('admin.project.index') }}" class="btn btn-secondary me-md-2">Cancel</a>
                                            <button type="submit" class="px-4 btn btn-primary">Update Project</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <script>
        // Store original files for each input
        const originalFiles = {
            imageInput: [],
            videoInput: []
        };

        // Add feature
        document.getElementById('addFeatureBtn')?.addEventListener('click', function() {
            const container = document.getElementById('featuresContainer');
            const index = container.querySelectorAll('.feature-item').length;

            const html = `
        <div class="feature-item mb-3 border p-3 rounded">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Feature Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="feature_name[]" placeholder="Feature name" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="feature_description[]" rows="1" placeholder="Feature description"></textarea>
                </div>
                <div class="col-12 mt-2 text-end">
                    <button type="button" class="btn btn-sm btn-danger remove-item">Remove</button>
                </div>
            </div>
        </div>
        `;

            container.insertAdjacentHTML('beforeend', html);
        });

        // Add technology
        document.getElementById('addTechnologyBtn')?.addEventListener('click', function() {
            const container = document.getElementById('technologiesContainer');
            const index = container.querySelectorAll('.technology-item').length;

            const html = `
        <div class="technology-item mb-3 border p-3 rounded">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Technology Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="technology_name[]" placeholder="Technology name" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Icon</label>
                    <input type="file" class="form-control" name="icon[]">
                </div>
                <div class="col-12 mt-2 text-end">
                    <button type="button" class="btn btn-sm btn-danger remove-item">Remove</button>
                </div>
            </div>
        </div>
        `;

            container.insertAdjacentHTML('beforeend', html);
        });

        // Add challenge
        document.getElementById('addChallengeBtn')?.addEventListener('click', function() {
            const container = document.getElementById('challengesContainer');
            const index = container.querySelectorAll('.challenge-item').length;

            const html = `
        <div class="challenge-item mb-3 border p-3 rounded">
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label">Challenge Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="challenge_name[]" placeholder="Challenge name" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Problem Description</label>
                    <textarea class="form-control" name="problem_description[]" rows="1" placeholder="Describe the problem"></textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Solution</label>
                    <textarea class="form-control" name="solution_description[]" rows="1" placeholder="Describe the solution"></textarea>
                </div>
                <div class="col-12 mt-2 text-end">
                    <button type="button" class="btn btn-sm btn-danger remove-item">Remove</button>
                </div>
            </div>
        </div>
        `;

            container.insertAdjacentHTML('beforeend', html);
        });

        // Remove item functionality
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-item')) {
                if (confirm('Are you sure you want to remove this item?')) {
                    e.target.closest('.feature-item, .technology-item, .challenge-item').remove();
                }
            }
        });

        // Form validation
        document.querySelector('form')?.addEventListener('submit', function(e) {
            let valid = true;

            // Validate required fields
            const requiredFields = document.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    valid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            // Validate at least one feature
            if (document.querySelectorAll('.feature-item').length === 0) {
                alert('Please add at least one feature');
                valid = false;
            }

            // Validate at least one technology
            if (document.querySelectorAll('.technology-item').length === 0) {
                alert('Please add at least one technology');
                valid = false;
            }

            // Validate at least one challenge
            if (document.querySelectorAll('.challenge-item').length === 0) {
                alert('Please add at least one challenge');
                valid = false;
            }

            if (!valid) {
                e.preventDefault();
                // Scroll to the first error
                document.querySelector('.is-invalid')?.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        });

        function handleFileSelect(event, inputId, previewContainerId, isImage = true) {
            const input = document.getElementById(inputId);
            const previewContainer = document.getElementById(previewContainerId);
            const newFileList = new DataTransfer();

            // Store original files on first selection
            if (originalFiles[inputId].length === 0 && input.files.length > 0) {
                originalFiles[inputId] = Array.from(input.files);
            }

            // Combine original files with new selections
            const allFiles = [...originalFiles[inputId], ...Array.from(input.files)];
            const uniqueFiles = [];
            const fileNames = new Set();

            // Process all files to ensure no duplicates
            allFiles.forEach(file => {
                const fileType = isImage ? 'image/' : 'video/';
                if (!file.type.startsWith(fileType)) {
                    alert(`"${file.name}" is not a valid ${isImage ? 'image' : 'video'} file.`);
                    return;
                }

                if (!fileNames.has(file.name)) {
                    fileNames.add(file.name);
                    uniqueFiles.push(file);
                    newFileList.items.add(file);
                }
            });

            // Update preview container
            previewContainer.innerHTML = '';
            uniqueFiles.forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const card = document.createElement('div');
                    card.classList.add('preview-card');
                    card.dataset.index = index;

                    let mediaElement;
                    if (isImage) {
                        mediaElement = document.createElement('img');
                        mediaElement.classList.add('preview-img');
                    } else {
                        mediaElement = document.createElement('video');
                        mediaElement.classList.add('preview-video');
                        mediaElement.controls = true;
                    }
                    mediaElement.src = e.target.result;

                    const fileInfo = document.createElement('div');
                    fileInfo.classList.add('text-muted');
                    const fileSize = (file.size / 1024).toFixed(2); // size in KB
                    fileInfo.innerHTML = `${file.name} (${fileSize} KB)`;

                    const removeBtn = document.createElement('button');
                    removeBtn.innerText = 'X';
                    removeBtn.classList.add('remove-btn');
                    removeBtn.addEventListener('click', function() {
                        if (confirm('Are you sure you want to remove this file?')) {
                            card.remove();
                            removeFileFromInput(file.name, inputId);
                        }
                    });

                    card.appendChild(mediaElement);
                    card.appendChild(fileInfo);
                    card.appendChild(removeBtn);
                    previewContainer.appendChild(card);
                };
                reader.readAsDataURL(file);
            });

            input.files = newFileList.files;
        }

        function removeFileFromInput(fileName, inputId) {
            const input = document.getElementById(inputId);
            const fileList = Array.from(input.files).filter(file => file.name !== fileName);
            const newFileList = new DataTransfer();
            fileList.forEach(file => newFileList.items.add(file));
            input.files = newFileList.files;

            // Update original files
            originalFiles[inputId] = originalFiles[inputId].filter(file => file.name !== fileName);
        }

        function deleteImage(imageId) {
            if (confirm('Are you sure you want to permanently remove this image?')) {
                fetch(`{{ url('admin/project/image') }}/${imageId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        }
                    });
            }
        }

        function deleteVideo(videoId) {
            if (confirm('Are you sure you want to permanently remove this video?')) {
                fetch(`{{ url('admin/project/video') }}/${videoId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        }
                    });
            }
        }

        // Initialize file inputs
        document.getElementById('imageInput')?.addEventListener('change', function(event) {
            handleFileSelect(event, 'imageInput', 'previewContainer', true);
        });

        document.getElementById('videoInput')?.addEventListener('change', function(event) {
            handleFileSelect(event, 'videoInput', 'videoPreviewContainer', false);
        });

        // Load existing files into originalFiles on page load
        document.addEventListener('DOMContentLoaded', function() {
            const imageInput = document.getElementById('imageInput');
            const videoInput = document.getElementById('videoInput');

            if (imageInput && imageInput.files.length > 0) {
                originalFiles.imageInput = Array.from(imageInput.files);
            }

            if (videoInput && videoInput.files.length > 0) {
                originalFiles.videoInput = Array.from(videoInput.files);
            }
        });
    </script>
@endpush
