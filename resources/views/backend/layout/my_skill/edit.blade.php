@extends('backend.app')

@section('title', 'Edit Project')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="col-xxl-">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Project Edit</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.project.update', $data->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="nameInput" class="form-label">Name <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="nameInput" name="name" value="{{ old('name', $data->name) }}" placeholder="Enter your project name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="inputImage" class="form-label">Image <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="imageInput" multiple name="image[]" accept="image/*">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @else
                                            <span class="text-warning">Only png, jpg, jpeg files are allowed</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <div id="previewContainer">
                                            @foreach($projectImages as $image)
                                                <div class="card mb-2 bg-light border-success hover-shadow" style="padding: 10px;" data-index="{{ $loop->index }}">
                                                    <div class="d-flex align-items-center" style="height: 80px; width: 100%; padding: 7px;">
                                                        <img src="{{ asset('storage/' . $image->image_path) }}" style="height: 100%; flex-shrink: 0;">
                                                        <div class="d-flex flex-column ms-3">
                                                            <div class="fw-bold">{{ basename($image->image_path) }}</div>
                                                            <div class="text-muted">{{ round(filesize(public_path('storage/' . $image->image_path)) / 1024 / 1024, 2) }} MB</div>
                                                        </div>
                                                        <button type="button" class="btn btn-danger ms-auto btn-sm" onclick="removeImage({{ $image->id }})">Remove</button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="descriptionInput" class="form-label">Description <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="descriptionInput" name="description" rows="3" placeholder="Enter your project description">{{ old('description', $data->description) }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="videoInput" class="form-label">Video</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control @error('video') is-invalid @enderror" id="videoInput" multiple name="video[]" accept="video/*">
                                        @error('video')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @else
                                            <small class="text-warning">Only mp4, mov, avi, wmv files are allowed.</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <div id="videoPreviewContainer">
                                            @foreach($projectVideos as $video)
                                                <div class="card mb-2 bg-light border-success hover-shadow" style="padding: 10px;" data-index="{{ $loop->index }}">
                                                    <div class="d-flex align-items-center" style="height: 80px; width: 100%; padding: 7px;">
                                                        <video src="{{ asset('storage/' . $video->video_path) }}" style="height: 100%; flex-shrink: 0;" controls></video>
                                                        <div class="d-flex flex-column ms-3">
                                                            <div class="fw-bold">{{ basename($video->video_path) }}</div>
                                                            <div class="text-muted">{{ round(filesize(public_path('storage/' . $video->video_path)) / 1024 / 1024, 2) }} MB</div>
                                                        </div>
                                                        <button type="button" class="btn btn-danger ms-auto btn-sm" onclick="removeVideo({{ $video->id }})">Remove</button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="githubLinkInput" class="form-label">Github Link</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="url" class="form-control @error('github_link') is-invalid @enderror" id="githubLinkInput" name="github_link" value="{{ old('github_link', $data->github_link) }}" placeholder="Enter your project github link">
                                        @error('github_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="liveLinkInput" class="form-label">Live Link</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="url" class="form-control @error('live_link') is-invalid @enderror" id="liveLinkInput" name="live_link" value="{{ old('live_link', $data->live_link) }}" placeholder="Enter your project live link">
                                        @error('live_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="startDateInput" class="form-label">Start Date <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control @error('start_date') is-invalid @enderror" id="startDateInput" name="start_date" value="{{ old('start_date', $data->start_date) }}" placeholder="Enter your project start date">
                                        @error('start_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="endDateInput" class="form-label">End Date <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control @error('end_date') is-invalid @enderror" id="endDateInput" name="end_date" value="{{ old('end_date', $data->end_date) }}" placeholder="Enter your project end date">
                                        @error('end_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Update Project</button>
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
    <script>
        document.getElementById('imageInput').addEventListener('change', function(event) {
            handleFileSelection(event, 'image');
        });

        document.getElementById('videoInput').addEventListener('change', function(event) {
            handleFileSelection(event, 'video');
        });

        function handleFileSelection(event, type) {
            const inputElement = event.target;
            const previewContainer = type === 'image' ? document.getElementById('previewContainer') : document.getElementById('videoPreviewContainer');

            const maxImageSize = 50 * 1024 * 1024; // 50MB in bytes
            const maxVideoSize = 500 * 1024 * 1024; // 500MB in bytes

            const newFileList = new DataTransfer();

            Array.from(inputElement.files).forEach((file, index) => {
                const isImage = type === 'image' && file.type.startsWith('image/');
                const isVideo = type === 'video' && file.type.startsWith('video/');
                const isValidSize = (isImage && file.size <= maxImageSize) || (isVideo && file.size <= maxVideoSize);

                if (!isValidSize) {
                    alert("${file.name}" exceeds the size limit (${isImage ? '50MB' : '500MB'}).);
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    const card = document.createElement('div');
                    card.classList.add('card', 'mb-2', 'bg-light', 'border-success', 'hover-shadow');
                    card.style.padding = '10px';
                    card.dataset.index = index;

                    const previewCard = document.createElement('div');
                    previewCard.classList.add('d-flex', 'align-items-center');
                    previewCard.style.height = '80px';
                    previewCard.style.width = '100%';
                    previewCard.style.padding = '7px';

                    let mediaElement;
                    if (isImage) {
                        mediaElement = document.createElement('img');
                        mediaElement.src = e.target.result;
                        mediaElement.style.height = '100%';
                        mediaElement.style.flexShrink = '0';
                    } else {
                        mediaElement = document.createElement('video');
                        mediaElement.src = e.target.result;
                        mediaElement.controls = true;
                        mediaElement.style.height = '100%';
                        mediaElement.style.flexShrink = '0';
                    }

                    const textContainer = document.createElement('div');
                    textContainer.classList.add('d-flex', 'flex-column', 'ms-3');

                    const fileName = document.createElement('div');
                    fileName.classList.add('fw-bold');
                    fileName.innerText = file.name;

                    const fileSize = document.createElement('div');
                    fileSize.classList.add('text-muted');
                    fileSize.innerText = (file.size / 1024 / 1024).toFixed(2) + ' MB';

                    textContainer.appendChild(fileName);
                    textContainer.appendChild(fileSize);

                    const removeBtn = document.createElement('button');
                    removeBtn.innerText = 'Remove';
                    removeBtn.classList.add('btn', 'btn-danger', 'ms-auto', 'btn-sm');
                    removeBtn.addEventListener('click', function() {
                        card.remove();
                        removeFileFromInput(file.name, type);
                    });

                    previewCard.appendChild(mediaElement);
                    previewCard.appendChild(textContainer);
                    previewCard.appendChild(removeBtn);
                    card.appendChild(previewCard);
                    previewContainer.appendChild(card);
                };
                reader.readAsDataURL(file);

                newFileList.items.add(file);
            });

            inputElement.files = newFileList.files;
        }

        function removeFileFromInput(fileName, type) {
            const inputElement = type === 'image' ? document.getElementById('imageInput') : document.getElementById('videoInput');
            const fileList = Array.from(inputElement.files).filter(file => file.name !== fileName);

            const newFileList = new DataTransfer();
            fileList.forEach(file => newFileList.items.add(file));

            inputElement.files = newFileList.files;
        }

        function removeImage(imageId) {
            if (confirm('Are you sure you want to remove this image?')) {
                fetch(`/admin/project/image/${imageId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                }).then(response => {
                    if (response.ok) {
                        location.reload();
                    }
                });
            }
        }

        function removeVideo(videoId) {
            if (confirm('Are you sure you want to remove this video?')) {
                fetch(`/admin/project/video/${videoId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                }).then(response => {
                    if (response.ok) {
                        location.reload();
                    }
                });
            }
        }
    </script>
@endpush