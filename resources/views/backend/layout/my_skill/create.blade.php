@extends('backend.app')

@section('title', 'Create Project')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="col-xxl-">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Project Create</h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <form action="{{ route('admin.my.skill.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
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

                                <div class="row mb-3">
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
                                <div class="row mb-3">
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

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="icon" class="form-label">Icon</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="file" name="icon" id="icon"
                                            class="form-control @error('icon') is-invalid @enderror"
                                            onchange="previewFile(this)">
                                        <img id="icon-preview" src=""
                                            style="max-width: 100%; margin-top: 10px; display: none;">
                                        @error('icon')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
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
    </div>
    <!-- End Page-content -->

    </div>
@endsection

@push('js')
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
