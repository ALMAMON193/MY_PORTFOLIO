@extends('backend.app')
@section('title', 'Admin Dashboard | Create Service Image')

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
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0 card-title">Service Image Upload</h4>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('admin.project.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
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
                                    <div class="mb-3">
                                        <label for="githubLinkInput" class="form-label">Github Link</label>
                                        <input type="url"
                                            class="form-control @error('github_link') is-invalid @enderror"
                                            id="githubLinkInput" name="github_link" value="{{ old('github_link') }}"
                                            placeholder="Enter your project github link">
                                        @error('github_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="liveLinkInput" class="form-label">Live Link</label>
                                        <input type="url" class="form-control @error('live_link') is-invalid @enderror"
                                            id="liveLinkInput" name="live_link" value="{{ old('live_link') }}"
                                            placeholder="Enter your project live link">
                                        @error('live_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="startDateInput" class="form-label">Start Date</label>
                                        <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                                            id="startDateInput" name="start_date" value="{{ old('start_date') }}"
                                            placeholder="Enter project start date">
                                        @error('start_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="mb-3">
                                        <label for="endDateInput" class="form-label">End Date</label>
                                        <input type="date" class="form-control @error('end_date') is-invalid @enderror"
                                            id="endDateInput" name="end_date" value="{{ old('end_date') }}"
                                            placeholder="Enter project end date">
                                        @error('end_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="mb-3">
                                        <label for="descriptionInput" class="form-label">Description</label>
                                        <div class="snow-editor" style="height: 300px;">
                                            <textarea class="form-control @error('description') is-invalid @enderror" id="descriptionInput" name="description"
                                                rows="3" placeholder="Enter project description">{{ old('description') }}</textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div> <!-- end Snow-editor-->
                                    </div>
                                    <!-- end col -->

                                    <!-- Image Upload -->
                                    <div class="mb-3">
                                        <label for="imageInput" class="form-label">Upload Images (JPEG, PNG, JPG, GIF,
                                            SVG)</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            id="imageInput" multiple name="image[]" accept=".jpeg,.png,.jpg,.gif,.svg"
                                            value="{{ old('image' ?? '') }}">

                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="image-preview-container" id="previewContainer"></div>

                                    <!-- Video Upload -->
                                    <div class="mb-3">
                                        <label for="videoInput" class="form-label">Upload Videos (MP4, AVI, MOV,
                                            MKV)</label>
                                        <input type="file" class="form-control @error('video') is-invalid @enderror"
                                            id="videoInput" multiple name="video[]" accept=".mp4,.avi,.mov,.mkv"
                                            value="{{ old('video' ?? '') }}">

                                        @error('video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="video-preview-container" id="videoPreviewContainer"></div>
                                    <button type="submit" class="mt-3 btn btn-primary">Upload Files</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('script')
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
