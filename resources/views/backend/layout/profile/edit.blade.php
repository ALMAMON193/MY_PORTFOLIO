@extends('backend.app')
@section('title', 'Profile Setting')
@section('content')
    <main class="main-content">
        <div class="position-relative iq-banner">
            <!--Nav Start-->
            @include('backend.partials.header')
            <!--Nav End-->
        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div>
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Profile Settings</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="tm-form">
                                    <div class="tm-settings-img-upload-area ">
                                        <div class="tm-settings-img-space">
                                            <img style="height:100px; width:100px" id="adminImage"
                                                src="{{ asset(Auth::user()->avatar ?? 'backend/images/avatars/01.png') }}"
                                                alt="user">
                                        </div>
                                        <div class="input-group">
                                            <input type="file" accept="image/*" name="avatar" id="fileInputAdmin"
                                                class="d-none">
                                        </div>
                                        <div class="mt-3">
                                            <a href="javascript:void(0);" id="uploadBtnAdmin"
                                                class="upload-img-btn upload-img-btn btn btn-primary">Upload</a>
                                        </div>
                                    </div>

                                </form>
                                <br>
                                <h4 class="card-title">User Information</h4>
                                <form class="tm-form" action="{{ route('profile.settings.index') }}" method="post">
                                    @csrf
                                    <div class="form-field-wrapper">
                                        <div class="form-group">

                                            <input class="form-control" type="text" name="name"
                                                placeholder="First Name" value="{{ Auth::user()->name ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                                <input class="form-control" type="email" name="email"
                                                placeholder="Email Address" value="{{ Auth::user()->email ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                    </div>
                                </form>
                                <br>
                                <h4 class="card-title">Chang Password</h4>
                                <form class="tm-form" action="{{ route('profile.settings.update.password') }}"
                                    method="post">
                                    @csrf
                                    <div class="form-field-wrapper">
                                        <div class="form-group">

                                            <input class="form-control @error('old_password') is-invalid @enderror"
                                                type="password" name="old_password" placeholder="Current Password"
                                                id="old-password">
                                            @error('old_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">

                                            <input class="form-control @error('password') is-invalid @enderror"
                                                type="password" name="password" placeholder="New Password"
                                                id="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">

                                            <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                                type="password" name="password_confirmation"
                                                placeholder="Confirm New Password" id="password-confirm">
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                height: '500px'
            })
            .catch(error => {
                console.error(error);
            });
    </script>

<script>
    $(document).ready(function() {
        // Show file input when the button is clicked
        $('#uploadBtnAdmin').on('click', function(e) {
            e.preventDefault();
            $('#fileInputAdmin').click();
        });

        // Handle file selection
        $('#fileInputAdmin').on('change', function() {
            const file = this.files[0];

            // Check if a file is selected
            if (!file) {
                toastr.error('No file selected.');
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                $('#adminImage').attr('src', e.target.result); // Update the image preview
            }
            reader.readAsDataURL(file);

            // Prepare to upload the file via AJAX
            const formData = new FormData();
            formData.append('avatar', file);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '{{ route('profile.settings.update.avatar') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    toastr.success(response.message);
                    setTimeout(function() {
                        window.location.reload(); // Reload page after success
                    }, 1000);
                },
                error: function(xhr) {
                    // Log the error for debugging
                    console.error('Error uploading file:', xhr);
                    toastr.error('Error: ' + (xhr.responseJSON.message || 'An error occurred.'));
                }
            });
        });
    });
</script>
@endpush
