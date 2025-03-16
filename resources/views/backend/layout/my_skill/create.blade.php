@extends('backend.app')

@section('title', 'Create Project')
@push('style')
    <style>
        .preview-img {
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

        .icon-preview-container {
            margin-top: 10px;
            height: auto;
            width: 160px;
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

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #ddd;
            padding: 10px 15px;
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

                <div class="col-xxl-">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="mb-0 card-title flex-grow-1">Project Create</h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <form action="{{ route('admin.my.skill.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <div class="col-lg-3">
                                        <label for="skill_type" class="form-label">Skill Type<span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <select name="skill_type" id="skill_type"
                                            class="form-control @error('skill_type') is-invalid @enderror">
                                            <option value="">Select Skill Type</option>
                                            @foreach (['front-end', 'backend', 'server-side', 'database', 'devops', 'full-stack', 'cms', 'version-control', 'testing', 'security', 'mobile-development', 'ui-ux-design'] as $type)
                                                <option value="{{ $type }}"
                                                    {{ old('skill_type') == $type ? 'selected' : '' }}>
                                                    {{ ucfirst(str_replace('-', ' ', $type)) }}</option>
                                            @endforeach
                                        </select>
                                        @error('skill_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-lg-3">
                                        <label for="name" class="form-label">Skill Name <span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="name" id="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Enter skill name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-lg-3">
                                        <label for="name" class="form-label">Percentage</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="number" name="percentage" id="percentage"
                                            class="form-control @error('percentage') is-invalid @enderror"
                                            placeholder="Enter skill percentage" value="{{ old('percentage') }}">
                                        @error('percentage')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-lg-3">
                                        <label for="name" class="form-label">Percentage</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="file" name="icon" id="icon"
                                            class="form-control @error('icon') is-invalid @enderror">
                                        @error('icon')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="icon-preview-container" id="iconPreview"></div>

                                        {{-- Script --}}
                                        <script>
                                            const iconPreviewInput = document.getElementById('icon');
                                            const certificatePreview = document.getElementById('iconPreview');

                                            iconPreviewInput.addEventListener('change', function(event) {
                                                const file = event.target.files[0];
                                                if (file) {
                                                    const reader = new FileReader();
                                                    reader.onload = function() {
                                                        const imagePreview = document.createElement('img');
                                                        imagePreview.src = reader.result;
                                                        imagePreview.alt = file.name;
                                                        imagePreview.classList.add('img-fluid');

                                                        certificatePreview.innerHTML = ''; // Clear previous previews

                                                        // Create a container to hold the image and remove button
                                                        const previewContainer = document.createElement('div');
                                                        previewContainer.classList.add('preview-container');
                                                        previewContainer.style.position = 'relative';

                                                        // Create remove button
                                                        const removeBtn = document.createElement('button');
                                                        removeBtn.classList.add('btn', 'btn-danger', 'btn-sm', 'remove-btn');
                                                        removeBtn.textContent = 'X';
                                                        removeBtn.addEventListener('click', function() {
                                                            iconPreviewInput.value = ''; // Reset file input
                                                            certificatePreview.innerHTML = ''; // Clear preview
                                                        });

                                                        previewContainer.appendChild(imagePreview);
                                                        previewContainer.appendChild(removeBtn);
                                                        certificatePreview.appendChild(previewContainer);
                                                    };
                                                    reader.readAsDataURL(file);
                                                } else {
                                                    certificatePreview.innerHTML = '';
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-lg-3">
                                        <label for="description" class="form-label">Description</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                            placeholder="Enter a description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Save Skill</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div> <!-- container-fluid -->

    <!-- End Page-content -->

@endsection

@push('script')
    <script>
        function previewFile(input) {
            let file = input.files[0];
            let preview = document.getElementById('icon-preview');

            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    preview.src = event.target.result;
                    preview.style.display = "block";
                };
                reader.readAsDataURL(file);
            } else {
                preview.style.display = "none";
            }
        }
    </script>
@endpush
