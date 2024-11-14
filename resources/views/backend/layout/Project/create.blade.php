@extends('backend.app')

@section('title', 'Create Project')
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
                                    <h4 class="card-title">Create Project</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="name">Name <span class="danger">*</span></label>
                                        <input type="text" name="name"
                                            class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            id="name" value="{{ old('name') }}" placeholder="Enter Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="name">Description <span class="danger">*</span></label>
                                       <textarea name="description" id="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" cols="30" rows="10">{{old('description')}}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="github_link">Github Link <span class="danger">*</span></label>
                                        <input type="url" name="github_link"
                                            class="form-control {{ $errors->has('github_link') ? ' is-invalid' : '' }}"
                                            id="github_link" value="{{old('github_link')}}">
                                        @error('github_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="live_link">Live Link <span class="danger">*</span></label>
                                        <input type="url" name="live_link"
                                            class="form-control {{ $errors->has('live_link') ? ' is-invalid' : '' }}"
                                            id="live_link" value="{{old('live_link')}}">
                                        @error('live_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="my-input">image*</label>
                                        <input class="form-control dropify  @error('image') is-invalid @enderror" accept="image/*" type="file" name="image">
                                        @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
@endpush
