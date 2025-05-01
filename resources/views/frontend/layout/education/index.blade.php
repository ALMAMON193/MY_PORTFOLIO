<!-- Education Section Alternative Design -->
<section class="section bg-light" id="education">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">My <span class="text-gradient-primary">Education</span></h2>
                <p class="lead text-muted">Academic journey that shaped my professional expertise</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach ($educational_qualifications as $edu)
                <div class="col-lg-12">
                    <div class="card card-hover-border-primary">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row">
                                <div class="flex-shrink-0 text-center mb-3 mb-md-0">
                                    <div class="avatar-lg mx-auto mb-2">
                                        <div class="avatar-title bg-light rounded-circle">
                                            <img src="{{ asset($edu->certificate ?? 'frontend/images/education/graduation-cap.png') }}"
                                                 alt="Degree" class="img-fluid" style="width: 40px;">
                                        </div>
                                    </div>
                                    <span class="badge bg-primary-subtle text-primary">{{ $edu->start_date }} - {{ $edu->end_date ?? 'Present' }}</span>
                                </div>
                                <div class="flex-grow-1 ms-md-4">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="mb-1">{{ $edu->degree ?? 'N/A' }}</h4>
                                            <h5 class="text-muted mb-2">{{ $edu->institution_name ?? 'N/A' }}</h5>
                                            <div class="d-flex flex-wrap gap-2 mb-2">
                                            <span class="badge bg-info-subtle text-info">
                                                <i class="ri-book-open-line align-middle me-1"></i> {{ $edu->field_of_study ?? 'N/A' }}
                                            </span>
                                                <span class="badge bg-success-subtle text-success">
                                                <i class="ri-medal-line align-middle me-1"></i> {{ $edu->cgpa ?? 'N/A' }}
                                            </span>
                                                <span class="badge bg-warning-subtle text-warning">
                                                <i class="ri-map-pin-line align-middle me-1"></i> {{ $edu->location ?? 'N/A' }}
                                            </span>
                                            </div>
                                        </div>
                                        @if($edu->certificate)
                                            <a href="{{ asset($edu->certificate) }}" class="btn btn-sm btn-light" download>
                                                <i class="ri-download-line"></i> Certificate
                                            </a>
                                        @endif
                                    </div>
                                    @if($edu->description)
                                        <div class="mt-2">
                                            <p class="text-muted mb-0">{!! $edu->description !!}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
