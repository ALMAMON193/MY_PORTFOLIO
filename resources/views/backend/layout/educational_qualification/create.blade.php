@extends('backend.app')

@section('title', 'Create Work Experience')
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

        .image-preview-container {
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
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="col-xxl-">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="mb-0 card-title flex-grow-1">Work Experience Create</h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.educational.qualification.store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3 row">
                                    <div class="col-lg-3">
                                        <label for="degree" class="form-label">Degree<span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="degree" id="degree"
                                            class="form-control @error('degree') is-invalid @enderror"
                                            value="{{ old('degree') }}" placeholder="Enter degree">
                                        @error('degree')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-lg-3">
                                        <label for="field_of_study" class="form-label">Field of Study</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="field_of_study" id="field_of_study"
                                            class="form-control @error('field_of_study') is-invalid @enderror"
                                            value="{{ old('field_of_study') }}" placeholder="Enter field of study">
                                        @error('field_of_study')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-lg-3">
                                        <label for="institution_name" class="form-label">Institution Name<span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="institution_name" id="institution_name"
                                            class="form-control @error('institution_name') is-invalid @enderror"
                                            value="{{ old('institution_name') }}" placeholder="Enter institution name">
                                        @error('institution_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-lg-3">
                                        <label for="location" class="form-label">Location</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="location" id="location"
                                            class="form-control @error('location') is-invalid @enderror"
                                            value="{{ old('location') }}" placeholder="Enter location">
                                        @error('location')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-lg-3">
                                        <label for="start_date" class="form-label">Start Date<span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="date" name="start_date" id="start_date"
                                            class="form-control @error('start_date') is-invalid @enderror"
                                            value="{{ old('start_date') }}">
                                        @error('start_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
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

                                <div class="mb-3 row">
                                    <div class="col-lg-3">
                                        <label for="cgpa" class="form-label">CGPA</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="number" step="0.01" name="cgpa" id="cgpa"
                                            class="form-control @error('cgpa') is-invalid @enderror"
                                            value="{{ old('cgpa') }}" placeholder="Enter CGPA">
                                        @error('cgpa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-lg-3">
                                        <label for="certificate" class="form-label">Certificate (optional)</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="file" name="certificate" id="certificate"
                                            class="form-control @error('certificate') is-invalid @enderror">
                                        @error('certificate')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="image-preview-container" id="certificatePreview"></div>

                                        {{-- Script --}}
                                        <script>
                                            const certificateInput = document.getElementById('certificate');
                                            const certificatePreview = document.getElementById('certificatePreview');

                                            certificateInput.addEventListener('change', function(event) {
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
                                                            certificateInput.value = ''; // Reset file input
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
                                    <button type="submit" class="btn btn-primary">Create
                                    </button>

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
