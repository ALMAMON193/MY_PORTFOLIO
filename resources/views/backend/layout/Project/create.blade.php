@extends('backend.app')
@section('title', 'Admin Dashboard | Create Service Image')

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

        .note-editor .note-toolbar,
        .note-popover .popover-content {
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
                        <h4 class="mb-sm-0">File Upload</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Basic Information Card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="mb-0 text-muted">Basic Information</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label for="nameInput" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="nameInput" name="name" value="{{ old('name') }}"
                                            placeholder="Enter project name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="startDateInput" class="form-label">Start Date</label>
                                        <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                                            id="startDateInput" name="start_date" value="{{ old('start_date') }}">
                                        @error('start_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="endDateInput" class="form-label">End Date</label>
                                        <input type="date" class="form-control @error('end_date') is-invalid @enderror"
                                            id="endDateInput" name="end_date" value="{{ old('end_date') }}">
                                        @error('end_date')
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
                                        <input type="url"
                                            class="form-control @error('github_link') is-invalid @enderror"
                                            id="githubLinkInput" name="github_link" value="{{ old('github_link') }}"
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
                                            id="liveLinkInput" name="live_link" value="{{ old('live_link') }}"
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
                                <h6 class="mb-0 text-muted">Project Description</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="summernote" name="description"
                                        rows="5">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Media Upload Card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="mb-0 text-muted">Media Upload</h6>
                            </div>
                            <div class="card-body">
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
                                    <div class="form-text">Maximum file size: 5MB each</div>
                                </div>
                                <div class="mb-3 image-preview-container row g-2" id="previewContainer"></div>

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
                                    <div class="form-text">Maximum file size: 20MB each</div>
                                </div>
                                <div class="mb-3 video-preview-container row g-2" id="videoPreviewContainer">
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="mb-0 text-muted">Project Specifications</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label for="categoryInput" class="form-label">Category</label>
                                        <input type="text" class="form-control @error('category') is-invalid @enderror"
                                               id="categoryInput" name="category" value="{{ old('category') }}"
                                               placeholder="Web Application, Mobile App, etc.">
                                        @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="repositoryInput" class="form-label">Repository Visibility</label>
                                        <select class="form-control @error('repository') is-invalid @enderror"
                                                id="repositoryInput" name="repository">
                                            <option value="private" {{ old('repository') == 'private' ? 'selected' : '' }}>Private</option>
                                            <option value="public" {{ old('repository') == 'public' ? 'selected' : '' }}>Public</option>
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
                                               id="teamSizeInput" name="team_size" value="{{ old('team_size') }}"
                                               placeholder="Number of team members">
                                        @error('team_size')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project Features Card - Always show at least one field -->
                        <div class="card mb-4" id="featuresSection">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="mb-0 text-muted">Project Features</h6>
                                <button type="button" class="btn btn-sm btn-primary" id="addFeatureBtn">Add
                                    Feature</button>
                            </div>
                            <div class="card-body">
                                <div id="featuresContainer">
                                    <div class="feature-item mb-3 border p-3 rounded">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Feature Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('feature_name.0') is-invalid @enderror"
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

                                    @if (old('feature_name') && count(old('feature_name')) > 1)
                                        @foreach (array_slice(old('feature_name'), 1) as $index => $feature)
                                            <div class="feature-item mb-3 border p-3 rounded">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Feature Name</label>
                                                        <input type="text"
                                                            class="form-control @error('feature_name.' . $loop->iteration) is-invalid @enderror"
                                                            name="feature_name[]" value="{{ $feature }}"
                                                            placeholder="Feature name" required>
                                                        @error('feature_name.' . $loop->iteration)
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Description</label>
                                                        <textarea class="form-control @error('feature_description.' . $loop->iteration) is-invalid @enderror"
                                                            name="feature_description[]" rows="1" placeholder="Feature description">{{ old('feature_description.' . $loop->iteration) }}</textarea>
                                                        @error('feature_description.' . $loop->iteration)
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12 d-flex align-items-end">
                                                        <button type="button"
                                                            class="btn btn-sm btn-danger remove-item">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Project Technologies Card - Always show at least one field -->
                        <div class="card mb-4" id="technologiesSection">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="mb-0 text-muted">Technologies Used</h6>
                                <button type="button" class="btn btn-sm btn-primary" id="addTechnologyBtn">Add
                                    Technology</button>
                            </div>
                            <div class="card-body">
                                <div id="technologiesContainer">
                                    <div class="technology-item mb-3 border p-3 rounded">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Technology Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('technology_name.0') is-invalid @enderror"
                                                    name="technology_name[]" value="{{ old('technology_name.0', '') }}"
                                                    placeholder="Technology name" required>
                                                @error('technology_name.0')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Icon URL</label>
                                                <input type="file"
                                                    class="form-control @error('icon.0') is-invalid @enderror"
                                                    name="icon[]" value="{{ old('icon.0', '') }}"
                                                    placeholder="Optional icon URL">
                                                @error('icon.0')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    @if (old('technology_name') && count(old('technology_name')) > 1)
                                        @foreach (array_slice(old('technology_name'), 1) as $index => $technology)
                                            <div class="technology-item mb-3 border p-3 rounded">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Technology Name</label>
                                                        <input type="text"
                                                            class="form-control @error('technology_name.' . $loop->iteration) is-invalid @enderror"
                                                            name="technology_name[]" value="{{ $technology }}"
                                                            placeholder="Technology name" required>
                                                        @error('technology_name.' . $loop->iteration)
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Icon URL</label>
                                                        <input type="file"
                                                            class="form-control @error('icon.' . $loop->iteration) is-invalid @enderror"
                                                            name="icon[]" value="{{ old('icon.' . $loop->iteration) }}"
                                                            placeholder="Optional icon URL">
                                                        @error('icon.' . $loop->iteration)
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md12 d-flex align-items-end">
                                                        <button type="button"
                                                            class="btn btn-sm btn-danger remove-item">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Project Challenges Card - Always show at least one field -->
                        <div class="card mb-4" id="challengesSection">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="mb-0 text-muted">Challenges & Solutions</h6>
                                <button type="button" class="btn btn-sm btn-primary" id="addChallengeBtn">Add
                                    Challenge</button>
                            </div>
                            <div class="card-body">
                                <div id="challengesContainer">
                                    <div class="challenge-item mb-3 border p-3 rounded">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-label">Challenge Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('challenge_name.0') is-invalid @enderror"
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

                                    @if (old('challenge_name') && count(old('challenge_name')) > 1)
                                        @foreach (array_slice(old('challenge_name'), 1) as $index => $challenge)
                                            <div class="challenge-item mb-3 border p-3 rounded">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="form-label">Challenge Name</label>
                                                        <input type="text"
                                                            class="form-control @error('challenge_name.' . $loop->iteration) is-invalid @enderror"
                                                            name="challenge_name[]" value="{{ $challenge }}"
                                                            placeholder="Challenge name" required>
                                                        @error('challenge_name.' . $loop->iteration)
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Problem Description</label>
                                                        <textarea class="form-control @error('problem_description.' . $loop->iteration) is-invalid @enderror"
                                                            name="problem_description[]" rows="1" placeholder="Describe the problem">{{ old('problem_description.' . $loop->iteration) }}</textarea>
                                                        @error('problem_description.' . $loop->iteration)
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Solution</label>
                                                        <textarea class="form-control @error('solution_description.' . $loop->iteration) is-invalid @enderror"
                                                            name="solution_description[]" rows="1" placeholder="Describe the solution">{{ old('solution_description.' . $loop->iteration) }}</textarea>
                                                        @error('solution_description.' . $loop->iteration)
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12 mt-2 text-end">
                                                        <button type="button"
                                                            class="btn btn-sm btn-danger remove-item">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- Submit Button -->

                        <div class="card-body">
                            <div class="gap-2 d-grid d-md-flex justify-content-md-end">
                                <button type="submit" class="px-4 btn btn-primary">Save Project</button>
                            </div>
                        </div>

                    </form>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Common template for remove button (simple cross)
            const removeBtn = `
            <button type="button" class="btn btn-sm btn-light remove-item position-absolute"
                style="top: 10px; right: 10px; background: red; color: white; padding: 0.2rem 0.5rem; font-size: 1.2rem; line-height: 1;">
                &times;
            </button>`;

            // Add Feature
            document.getElementById('addFeatureBtn').addEventListener('click', function() {
                const container = document.getElementById('featuresContainer');
                const html = `
            <div class="feature-item mb-3 border p-3 rounded position-relative">
                ${removeBtn}
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Feature Name</label>
                        <input type="text" class="form-control" name="feature_name[]" placeholder="Feature name" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="feature_description[]" rows="1" placeholder="Feature description"></textarea>
                    </div>
                </div>
            </div>`;
                container.insertAdjacentHTML('beforeend', html);
            });

            // Add Technology
            document.getElementById('addTechnologyBtn').addEventListener('click', function() {
                const container = document.getElementById('technologiesContainer');
                const html = `
            <div class="technology-item mb-3 border p-3 rounded position-relative">
                ${removeBtn}
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Technology Name</label>
                        <input type="text" class="form-control" name="technology_name[]" placeholder="Technology name" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Icon URL</label>
                        <input type="file" class="form-control" name="icon[]" placeholder="Optional icon URL">
                    </div>
                </div>
            </div>`;
                container.insertAdjacentHTML('beforeend', html);
            });

            // Add Challenge
            document.getElementById('addChallengeBtn').addEventListener('click', function() {
                const container = document.getElementById('challengesContainer');
                const html = `
            <div class="challenge-item mb-3 border p-3 rounded position-relative">
                ${removeBtn}
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Challenge Name</label>
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
                </div>
            </div>`;
                container.insertAdjacentHTML('beforeend', html);
            });

            // Remove item
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-item')) {
                    const item = e.target.closest('.feature-item, .technology-item, .challenge-item');
                    item.remove();
                }
            });

            // Basic form validation
            document.querySelector('form').addEventListener('submit', function(e) {
                let isValid = true;

                const checkRequired = (selector) => {
                    const inputs = document.querySelectorAll(selector);
                    return inputs.length === 1 && !inputs[0].value.trim();
                };

                if (checkRequired('#featuresContainer input[name="feature_name[]"]')) {
                    isValid = false;
                    document.querySelector('#featuresContainer input[name="feature_name[]"]').focus();
                }
                if (checkRequired('#technologiesContainer input[name="technology_name[]"]')) {
                    isValid = false;
                    document.querySelector('#technologiesContainer input[name="technology_name[]"]')
                .focus();
                }
                if (checkRequired('#challengesContainer input[name="challenge_name[]"]')) {
                    isValid = false;
                    document.querySelector('#challengesContainer input[name="challenge_name[]"]').focus();
                }

                if (!isValid) {
                    e.preventDefault();
                    alert('Please fill in all required fields (marked with *)');
                }
            });
        });
    </script>

    <script>
        function handleFileSelect(event, inputId, previewContainerId, isImage = true) {
            const input = document.getElementById(inputId);
            const previewContainer = document.getElementById(previewContainerId);
            const newFileList = new DataTransfer();
            const existingFiles = new Set();

            // Preserve existing previews
            Array.from(previewContainer.children).forEach(card => {
                const fileName = card.querySelector('.text-muted').textContent.split(' ')[0];
                existingFiles.add(fileName);
            });

            // Process new files
            Array.from(input.files).forEach((file, index) => {
                const fileType = isImage ? 'image/' : 'video/';
                if (!file.type.startsWith(fileType)) {
                    alert(`"${file.name}" is not a valid ${isImage ? 'image' : 'video'} file.`);
                    return;
                }
                if (existingFiles.has(file.name)) {
                    alert(`"${file.name}" is already added.`);
                    return;
                }
                newFileList.items.add(file);
                existingFiles.add(file.name);

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
                        card.remove();
                        removeFileFromInput(file.name, inputId);
                    });

                    card.appendChild(mediaElement);
                    card.appendChild(fileInfo);
                    card.appendChild(removeBtn);
                    previewContainer.appendChild(card);
                };
                reader.readAsDataURL(file);
            });

            if (newFileList.files.length < 1) {
                alert(`You must upload at least 1 ${isImage ? 'image' : 'video'}.`);
                return;
            }

            input.files = newFileList.files;
        }

        function removeFileFromInput(fileName, inputId) {
            const input = document.getElementById(inputId);
            const fileList = Array.from(input.files).filter(file => file.name !== fileName);
            const newFileList = new DataTransfer();
            fileList.forEach(file => newFileList.items.add(file));
            input.files = newFileList.files;
        }

        document.getElementById('imageInput').addEventListener('change', function(event) {
            handleFileSelect(event, 'imageInput', 'previewContainer', true);
        });

        document.getElementById('videoInput').addEventListener('change', function(event) {
            handleFileSelect(event, 'videoInput', 'videoPreviewContainer', false);
        });
    </script>
@endpush
