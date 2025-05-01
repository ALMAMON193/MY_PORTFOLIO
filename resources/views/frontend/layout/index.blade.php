@extends('frontend.app')
@section('content')
    <!-- start hero section -->
    <section class="section nft-hero" id="hero">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Left Content -->
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1 class="display-4 fw-medium mb-4 lh-base text-white animated fadeInUp">Hi, I'm Al Mamon!</h1>
                        <h2 class="display-4 fw-medium mb-4 lh-base text-white animated fadeInUp delay-1s">Web <span class="text-danger">Developer!</span></h2>
                        <p class="lead text-white-50 lh-base mb-4 pb-2 animated fadeInUp delay-2s">
                            I'm a passionate Full Stack Developer with a mission to build scalable, high-performance web applications.
                            With expertise in both frontend and backend technologies, I specialize in crafting seamless user experiences and robust architectures that drive efficiency and innovation.
                        </p>
                        <a href="#contact" class="btn btn-danger btn-hover animated fadeInUp delay-3s">Hire Me Now!</a>
                    </div>
                </div>
                <!-- Right Stats -->
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="row text-center mt-4">
                        <div class="col-md-4 mb-4">
                            <div class="progress-bar-wrapper">
                                <!-- Circle Progress -->
                                <div class="progress-circle" data-progress="75">
                                    <h2 class="text-danger">1.5+</h2>
                                </div>
                                <p class="text-white-50">Years of Awesome Experience</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="progress-bar-wrapper">
                                <!-- Circle Progress -->
                                <div class="progress-circle" data-progress="85">
                                    <h2 class="text-danger">15+</h2>
                                </div>
                                <p class="text-white-50">Projects Completed This Year</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="progress-bar-wrapper">
                                <!-- Circle Progress -->
                                <div class="progress-circle" data-progress="90">
                                    <h2 class="text-danger">25+</h2>
                                </div>
                                <p class="text-white-50">Successful Projects Worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end hero section -->
    @include('frontend.layout.about.index')
      <!-- start Skill Process -->
      @include('frontend.layout.skill.index')
      <!-- end Skill Process -->

    <!-- start wallet -->
    @include('frontend.layout.service.index')<!-- end wallet -->

    <!-- start marketplace -->
   @include('frontend.layout.portfolio.index')
    <!-- end marketplace -->
    <!-- start education -->
    @include('frontend.layout.education.index')
    <!-- start candidates -->
    <section class="section bg-light" id="my-team">
        <div class="bg-overlay bg-overlay-pattern"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Hire Experts <span class="text-primary">Team</span></h1>
                        <p class="text-muted mb-4">Hiring experts costs more per hour than hiring entry- or mid-level freelancers, but they can usually get the work done faster—and better.</p>
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
                                        <img src="frontend/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-md mx-auto d-block">
                                        <h5 class="fs-17 mt-3 mb-2">Nancy Martino</h5>
                                        <p class="text-muted fs-13 mb-3">Creative Designer</p>

                                        <p class="text-muted mb-4 fs-14">
                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Escondido, California
                                        </p>

                                        <a href="#!" class="btn btn-primary w-100">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center">
                                    <div class="card-body p-4">
                                        <img src="frontend/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-md mx-auto d-block">
                                        <h5 class="fs-17 mt-3 mb-2">Glen Matney</h5>
                                        <p class="text-muted fs-13 mb-3">Marketing Director</p>

                                        <p class="text-muted mb-4 fs-14">
                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Escondido, California
                                        </p>

                                        <a href="#!" class="btn btn-primary w-100">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center">
                                    <div class="card-body p-4">
                                        <img src="frontend/images/users/avatar-10.jpg" alt="" class="rounded-circle avatar-md mx-auto d-block">
                                        <h5 class="fs-17 mt-3 mb-2">Alexis Clarke</h5>
                                        <p class="text-muted fs-13 mb-3">Product Manager</p>

                                        <p class="text-muted mb-4 fs-14">
                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Escondido, California
                                        </p>

                                        <a href="#!" class="btn btn-primary w-100">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center">
                                    <div class="card-body p-4">
                                        <img src="frontend/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-md mx-auto d-block" />
                                        <h5 class="fs-17 mt-3 mb-2">James Price</h5>
                                        <p class="text-muted fs-13 mb-3">Product Designer</p>

                                        <p class="text-muted mb-4 fs-14">
                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Escondido, California
                                        </p>

                                        <a href="#!" class="btn btn-primary w-100">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center">
                                    <div class="card-body p-4">
                                        <img src="frontend/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-md mx-auto d-block" />
                                        <h5 class="fs-17 mt-3 mb-2">Michael Morris</h5>
                                        <p class="text-muted fs-13 mb-3">Full Stack Developer</p>

                                        <p class="text-muted mb-4 fs-14">
                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Escondido, California
                                        </p>

                                        <a href="#!" class="btn btn-primary w-100">View Profile</a>
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

    <!-- start blog -->
    <section class="section" id="blogs">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Our Latest <span class="text-primary">News</span></h1>
                        <p class="text-muted mb-4">We thrive when coming up with innovative ideas but also understand that a smart concept should be supported with faucibus sapien odio measurable results.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="frontend/images/small/img-8.jpg" alt="" class="img-fluid rounded" />
                        </div>
                        <div class="card-body">
                            <ul class="list-inline fs-14 text-muted">
                                <li class="list-inline-item">
                                    <i class="ri-calendar-line align-bottom me-1"></i> 30 Oct, 2021
                                </li>
                                <li class="list-inline-item">
                                    <i class="ri-message-2-line align-bottom me-1"></i> 364 Comment
                                </li>
                            </ul>
                            <a href="javascript:void(0);">
                                <h5>Design your apps in your own way ?</h5>
                            </a>
                            <p class="text-muted fs-14">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>

                            <div>
                                <a href="#!" class="link-success">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="frontend/images/small/img-6.jpg" alt="" class="img-fluid rounded" />
                        </div>
                        <div class="card-body">
                            <ul class="list-inline fs-14 text-muted">
                                <li class="list-inline-item">
                                    <i class="ri-calendar-line align-bottom me-1"></i> 02 Oct, 2021
                                </li>
                                <li class="list-inline-item">
                                    <i class="ri-message-2-line align-bottom me-1"></i> 245 Comment
                                </li>
                            </ul>
                            <a href="javascript:void(0);">
                                <h5>Smartest Applications for Business ?</h5>
                            </a>
                            <p class="text-muted fs-14">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception.</p>

                            <div>
                                <a href="#!" class="link-success">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="frontend/images/small/img-9.jpg" alt="" class="img-fluid rounded" />
                        </div>
                        <div class="card-body">
                            <ul class="list-inline fs-14 text-muted">
                                <li class="list-inline-item">
                                    <i class="ri-calendar-line align-bottom me-1"></i> 23 Sept, 2021
                                </li>
                                <li class="list-inline-item">
                                    <i class="ri-message-2-line align-bottom me-1"></i> 354 Comment
                                </li>
                            </ul>
                            <a href="javascript:void(0);">
                                <h5>How apps is changing the IT world</h5>
                            </a>
                            <p class="text-muted fs-14">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>

                            <div>
                                <a href="#!" class="link-success">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->

  

@endsection
