@extends('frontend.project_app')
@section('project')
    <section class="section bg-light" id="projects">
        <div class="container">
            <section class="portfolio-details-section py-5 py-lg-6 bg-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- Project Header -->
                            <div class="text-center mb-5">
                                <h6 class="text-uppercase text-success mb-2">Project Details</h6>
                                <h1 class="mb-3">
                                    {{ $project->name ?? '' }}
                                </h1>
                                <div class="d-flex flex-wrap justify-content-center gap-3">
                                    <span class="badge bg-success bg-opacity-10 text-success fs-6 py-2 px-3">
                                        <i class="ri-calendar-line me-1"></i> {{ $project->start_date }} -
                                        {{ $project->end_date }}
                                    </span>
                                    <span class="badge bg-success bg-opacity-10 text-success fs-6 py-2 px-3">
                                        <i class="ri-user-line me-1"></i> Client: ShopEasy Inc.
                                    </span>
                                    <span class="badge bg-success bg-opacity-10 text-success fs-6 py-2 px-3">
                                        <i class="ri-code-s-slash-line me-1"></i> MERN Stack
                                    </span>
                                </div>
                            </div>

                            <!-- Main Project Image -->
                            <div class="card border-0 shadow-sm mb-5 overflow-hidden">
                                <img src="{{ asset('backend/images/blog/img-1.jpg') }}" alt="Project Main Image"
                                    class="img-fluid w-100" style="height: 500px; object-fit: cover;">
                            </div>

                            <!-- Project Summary -->
                            <div class="row gy-4 mb-5">
                                <div class="col-lg-8">
                                    <h3 class="mb-4">Project Overview</h3>
                                    <p class="fs-5 text-muted">
                                        {!! $project->description ?? '' !!}
                                    </p>

                                </div>
                                <div class="col-lg-4">
                                    <div class="card bg-success bg-opacity-10 border-0 p-4 h-100">
                                        <h5 class="text-success mb-4">Quick Facts</h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-3 d-flex align-items-center">
                                                <i class="ri-stack-line text-success me-2 fs-5"></i>
                                                <span><strong>Category:</strong>{{ $project->category ?? '' }}</span>
                                            </li>
                                            <li class="mb-3 d-flex align-items-center">
                                                <i class="ri-git-repository-line text-success me-2 fs-5"></i>
                                                <span><strong>Repository:</strong> {{ $project->repository ?? '' }}</span>
                                            </li>
                                            <li class="mb-3 d-flex align-items-center">
                                                <i class="ri-group-line text-success me-2 fs-5"></i>
                                                <span><strong>Team Size:</strong>{{ $project->team_size ?? '' }}
                                                    Members</span>
                                            </li>
                                            <li class="mb-3 d-flex align-items-center">
                                                <i class="ri-lightbulb-flash-line text-success me-2 fs-5"></i>
                                                <span><strong>My Role:</strong> Lead Developer</span>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="ri-links-line text-success me-2 fs-5"></i>
                                                <span><strong>Status:</strong> <span
                                                        class="badge bg-success">Live</span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Links -->
                            <div class="d-flex flex-wrap gap-3 mb-5">
                                <a href="https://github.com/username/project-repo" target="_blank"
                                    class="btn btn-dark btn-lg flex-grow-1 flex-lg-grow-0">
                                    <i class="ri-github-fill me-2"></i> View on GitHub
                                </a>
                                <a href="https://shopeasy-demo.com" target="_blank"
                                    class="btn btn-success btn-lg flex-grow-1 flex-lg-grow-0">
                                    <i class="ri-external-link-line me-2"></i> Live Demo
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-lg flex-grow-1 flex-lg-grow-0">
                                    <i class="ri-file-pdf-line me-2"></i> Download Case Study
                                </a>
                            </div>

                            <!-- Project Features -->
                            <div class="mb-5">
                                <h3 class="mb-4">Key Features</h3>
                                <div class="row gy-4">
                                    @foreach ($project->features as $item)
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card border-0 h-100 shadow-sm">
                                                <div class="card-body p-4">
                                                    <h5 class="mb-3">{{ $item->feature_name ?? 'Feature Title' }}</h5>
                                                    <p class="text-muted mb-0">
                                                        {!! $item->feature_description ?? 'Feature description goes here.' !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Technology Stack -->
                            <div class="mb-5">
                                <h3 class="mb-4">Technology Stack</h3>
                                <div class="d-flex flex-wrap gap-3">
                                    @foreach ($project->technologies as $item)
                                        <span class="badge bg-light text-dark fs-6 py-2 px-3">
                                            <img src="{{ asset($item->icon ?? '') }}" alt="">
                                            {{ $item->technology_name ?? '' }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Project Gallery (Images) -->
                            <div class="mb-5">
                                <h3 class="mb-4">Screenshots</h3>
                                <div class="row g-3">
                                    @foreach ($project->images as $item)
                                        <div class="col-md-6 col-lg-4">
                                            <a href="{{ asset($item->image ?? '') }}" data-fancybox="gallery"
                                                class="d-block card border-0 shadow-sm overflow-hidden">
                                                <img src="{{ asset($item->image ?? 'backend/images/blog/img-1.jpg') }}"
                                                    alt="Homepage" class="img-fluid w-100"
                                                    style="height: 250px; object-fit: cover;">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Project Videos -->
                            <div class="mb-5">
                                <h3 class="mb-4">Project Videos</h3>
                                <div class="row g-4">
                                    @foreach ($project->videos as $item)
                                    <div class="col-lg-6">
                                        <div class="card border-0 shadow-sm overflow-hidden">
                                         <div class="ratio ratio-16x9">
                                            <iframe src="{{ asset($item->video ?? '') }}" title="Project Demo"
                                                allowfullscreen></iframe>
                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Challenges & Solutions -->
                            <div class="mb-5">
                                <h3 class="mb-4">Challenges & Solutions</h3>
                                <div class="accordion" id="challengesAccordion">
                                    @foreach($project->challenges as $index => $item)
                                        <div class="accordion-item border-0 shadow-sm mb-3">
                                            <h2 class="accordion-header" id="heading{{ $index }}">
                                                <button class="accordion-button collapsed bg-light" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                                    aria-expanded="false" aria-controls="collapse{{ $index }}">
                                                    <i class="ri-shield-cross-line text-warning me-2"></i>
                                                    {{ $item->title ?? 'Challenge Title' }}
                                                </button>
                                            </h2>
                                            <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                                                aria-labelledby="heading{{ $index }}" data-bs-parent="#challengesAccordion">
                                                <div class="accordion-body">
                                                    <p><strong>Problem:</strong>{{ $item->challenge_description ?? 'Challenge description here...' }}</p>
                                                    <p><strong>Solution:</strong> {{ $item->solution_description ?? 'Solution description here...' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            

                            <!-- Client Testimonial -->
                            <!-- start candidates -->
                            <section class="section bg-light" id="candidates">
                                <div class="bg-overlay bg-overlay-pattern"></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="text-center mb-5">
                                                <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Hire
                                                    Experts <span class="text-primary">Team</span></h1>
                                                <p class="text-muted mb-4">Hiring experts costs more per hour than
                                                    hiring entry- or mid-level freelancers, but they can usually get the
                                                    work done faster—and better.</p>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="swiper candidate-swiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="card text-center">
                                                            <div class="card-body p-4">
                                                                <img src="{{ asset('frontend/images/users/avatar-2.jpg') }}"
                                                                    alt=""
                                                                    class="rounded-circle avatar-md mx-auto d-block">
                                                                <h5 class="fs-17 mt-3 mb-2">Nancy Martino</h5>
                                                                <p class="text-muted fs-13 mb-3">Creative Designer</p>

                                                                <p class="text-muted mb-4 fs-14">
                                                                    <i
                                                                        class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                                                    Escondido, California
                                                                </p>

                                                                <a href="#!" class="btn btn-primary w-100">View
                                                                    Profile</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card text-center">
                                                            <div class="card-body p-4">
                                                                <img src="{{ asset('frontend/images/users/avatar-2.jpg') }}"
                                                                    alt=""
                                                                    class="rounded-circle avatar-md mx-auto d-block">
                                                                <h5 class="fs-17 mt-3 mb-2">Glen Matney</h5>
                                                                <p class="text-muted fs-13 mb-3">Marketing Director</p>

                                                                <p class="text-muted mb-4 fs-14">
                                                                    <i
                                                                        class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                                                    Escondido, California
                                                                </p>

                                                                <a href="#!" class="btn btn-primary w-100">View
                                                                    Profile</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card text-center">
                                                            <div class="card-body p-4">
                                                                <img src="{{ asset('frontend/images/users/avatar-2.jpg') }}"
                                                                    alt=""
                                                                    class="rounded-circle avatar-md mx-auto d-block">
                                                                <h5 class="fs-17 mt-3 mb-2">Alexis Clarke</h5>
                                                                <p class="text-muted fs-13 mb-3">Product Manager</p>

                                                                <p class="text-muted mb-4 fs-14">
                                                                    <i
                                                                        class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                                                    Escondido, California
                                                                </p>

                                                                <a href="#!" class="btn btn-primary w-100">View
                                                                    Profile</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card text-center">
                                                            <div class="card-body p-4">
                                                                <img src="{{ asset('frontend/images/users/avatar-2.jpg') }}"
                                                                    alt=""
                                                                    class="rounded-circle avatar-md mx-auto d-block">
                                                                <h5 class="fs-17 mt-3 mb-2">James Price</h5>
                                                                <p class="text-muted fs-13 mb-3">Product Designer</p>

                                                                <p class="text-muted mb-4 fs-14">
                                                                    <i
                                                                        class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                                                    Escondido, California
                                                                </p>

                                                                <a href="#!" class="btn btn-primary w-100">View
                                                                    Profile</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card text-center">
                                                            <div class="card-body p-4">
                                                                <img src="{{ asset('frontend/images/users/avatar-2.jpg') }}"
                                                                    alt=""
                                                                    class="rounded-circle avatar-md mx-auto d-block">
                                                                <h5 class="fs-17 mt-3 mb-2">Michael Morris</h5>
                                                                <p class="text-muted fs-13 mb-3">Full Stack
                                                                    Developer</p>

                                                                <p class="text-muted mb-4 fs-14">
                                                                    <i
                                                                        class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                                                    Escondido, California
                                                                </p>

                                                                <a href="#!" class="btn btn-primary w-100">View
                                                                    Profile</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end container -->
                            </section>
                            <!-- end candidates -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Related Projects -->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <h3 class="mb-5 text-center">More Projects You Might Like</h3>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4">
                                    <div class="card border-0 shadow-sm overflow-hidden portfolio-item">
                                        <img src="{{ asset('backend/images/blog/img-1.jpg') }}" alt="Project"
                                            class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                                        <div class="card-body p-4">
                                            <span class="badge bg-success bg-opacity-10 text-success mb-2">Web
                                                Application</span>
                                            <h5 class="mb-2">Task Management System</h5>
                                            <p class="text-muted mb-0">A collaborative project management tool with
                                                real-time updates.</p>
                                            <a href="portfolio-details.html" class="stretched-link"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card border-0 shadow-sm overflow-hidden portfolio-item">
                                        <img src="{{ asset('backend/images/blog/img-1.jpg') }}" alt="Project"
                                            class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                                        <div class="card-body p-4">
                                            <span class="badge bg-success bg-opacity-10 text-success mb-2">Mobile
                                                App</span>
                                            <h5 class="mb-2">Fitness Tracker App</h5>
                                            <p class="text-muted mb-0">Health and workout tracking application with AI
                                                recommendations.</p>
                                            <a href="portfolio-details.html" class="stretched-link"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card border-0 shadow-sm overflow-hidden portfolio-item">
                                        <img src="{{ asset('backend/images/blog/img-1.jpg') }}" alt="Project"
                                            class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                                        <div class="card-body p-4">
                                            <span class="badge bg-success bg-opacity-10 text-success mb-2">Dashboard</span>
                                            <h5 class="mb-2">Analytics Platform</h5>
                                            <p class="text-muted mb-0">Business intelligence dashboard with custom
                                                reporting.</p>
                                            <a href="portfolio-details.html" class="stretched-link"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
