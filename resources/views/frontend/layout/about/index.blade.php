<section class="about-section position-relative py-5 py-lg-6 bg-gradient overflow-hidden">
    <!-- Background floating elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="position-absolute rounded-circle bg-success bg-opacity-10" style="width: 150px; height: 150px; top: 10%; left: 10%; animation: float 8s ease-in-out infinite;"></div>
        <div class="position-absolute rounded-circle bg-success bg-opacity-10" style="width: 80px; height: 80px; top: 60%; left: 20%; animation: float 6s ease-in-out infinite 1s;"></div>
        <div class="position-absolute rounded-circle bg-success bg-opacity-10" style="width: 120px; height: 120px; top: 30%; right: 15%; animation: float 7s ease-in-out infinite 2s;"></div>
        <div class="position-absolute rounded-circle bg-success bg-opacity-10" style="width: 60px; height: 60px; bottom: 20%; right: 10%; animation: float 5s ease-in-out infinite 1.5s;"></div>
    </div>
    <div class="container" id="about">
        <div class="row align-items-center justify-content-lg-between justify-content-center gy-4">
            <div class="col-lg-5 col-sm-7">
                <div class="mb-5 mb-lg-0 text-center position-relative">
                    <!-- Main profile image -->
                    <div class="position-relative d-inline-block rounded-3 overflow-hidden" style="height: 600px; width: 100%;">
                        <img src="frontend/images/about.jpg" alt="" class="img-fluid h-100 w-100 object-fit-cover mx-auto rounded-3 shadow">
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-success opacity-10 rounded-3" style="filter: blur(15px); z-index: -1;"></div>
                    </div>

                    <!-- Job search card -->
                    <div class="card rounded shadow-lg position-absolute top-0 start-0 d-none d-lg-block" style="animation: float-animation 5s ease-in-out infinite;">
                        <div class="card-body d-flex align-items-center">
                            <div class="avatar-sm flex-shrink-0 me-3">
                                <div class="avatar-title bg-secondary-subtle text-secondary rounded-circle fs-5">
                                    <i class="ri-briefcase-2-line"></i>
                                </div>
                            </div>
                            <h5 class="fs-6 lh-base mb-0">Worked on <span class="text-gradient fw-semibold">150+</span> Projects</h5>
                        </div>
                    </div>

                    <!-- Feedback card -->
                    <div class="card position-absolute bottom-0 end-0 shadow-lg" style="animation: float-animation-reverse 6s ease-in-out infinite;">
                        <div class="card-body d-flex">
                            <div class="flex-shrink-0 me-3">
                                <img src="frontend/images/users/avatar-10.jpg" alt="" class="avatar-sm rounded-circle">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-6 lh-base mb-0">Client Testimonial</h5>
                                <p class="text-muted fs-7 mb-1">Exceptional work!</p>
                                <div class="text-warning">
                                    <i class="ri-star-s-fill"></i>
                                    <i class="ri-star-s-fill"></i>
                                    <i class="ri-star-s-fill"></i>
                                    <i class="ri-star-s-fill"></i>
                                    <i class="ri-star-s-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Experience badge -->
                    <div class="position-absolute" style="right: -15px; top: 50%; width: 100px; height: 100px; background: linear-gradient(to right, #00b4db, #0083b0); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); z-index: 10; animation: rotate-slow 12s linear infinite;">
                        <div class="bg-white rounded-circle d-flex flex-column align-items-center justify-content-center" style="width: 85px; height: 85px;">
                            <span class="text-gradient fw-bold fs-5">5+</span>
                            <span class="text-muted fs-8 text-uppercase text-center" style="font-size: 10px;">Years Experience</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-muted">
                    <div class="mb-4">
                        <h6 class="text-uppercase text-gradient mb-2">Who Am I</h6>
                        <h1 class="mb-3 lh-base text-light">
                            Building <span class="text-gradient">Digital Experiences</span> That Matter
                        </h1>
                    </div>

                    <p class="fs-5 mb-4 text-light">
                        {{$personal_info->bio ?? 'I am a passionate web developer with over 5 years of experience in creating dynamic and user-friendly websites. I specialize in both frontend and backend development, ensuring a seamless user experience across all platforms.'}}
                    </p>

                    <!-- Skills progress bars -->
                    <div class="mb-4">
                        <h5 class="text-gradient mb-3">Technical Skills</h5>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1 text-light">
                                <span>Frontend Development</span>
                                <span>90%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background: linear-gradient(to right, #00b4db, #0083b0);" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1 text-light">
                                <span>Backend Development</span>
                                <span>85%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background: linear-gradient(to right, #00b4db, #0083b0);" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1 text-light">
                                <span>REST API Integration</span>
                                <span>95%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%; background: linear-gradient(to right, #00b4db, #0083b0);" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="text-gradient mb-3">Personal Details</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2 d-flex align-items-center text-light">
                                    <i class="ri-user-3-line text-gradient me-2 fs-5"></i>
                                    <span><strong>Name:</strong> {{$personal_info->fname ?? 'AL'}} {{$personal_info->lname ?? 'Mamon'}} </span>
                                </li>
                                <li class="mb-2 d-flex align-items-center text-light">
                                    <i class="ri-mail-line text-gradient me-2 fs-5"></i>
                                    <span><strong>Email:</strong> {{$personal_info->email ?? ''}}</span>
                                </li>
                                <li class="mb-2 d-flex align-items-center text-light">
                                    <i class="ri-phone-line text-gradient me-2 fs-5"></i>
                                    <span><strong>Phone:</strong> {{$personal_info->phone ?? ''}}</span>
                                </li>
                                <li class="mb-2 d-flex align-items-center text-light">
                                    <i class="ri-calendar-line text-gradient me-2 fs-5"></i>
                                    <span><strong>Experience:</strong> 5+ Years</span>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <h5 class="text-gradient mb-3">Location & Work</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2 d-flex align-items-center text-light">
                                    <i class="ri-map-pin-line text-gradient me-2 fs-5"></i>
                                    <span><strong>Address:</strong> {{$personal_info->address ?? ''}}</span>
                                </li>
                                <li class="mb-2 d-flex align-items-center text-light">
                                    <i class="ri-flag-line text-gradient me-2 fs-5"></i>
                                    <span><strong>Country:</strong> {{$personal_info->country ?? ''}}</span>
                                </li>
                                <li class="mb-2 d-flex align-items-center text-light">
                                    <i class="ri-briefcase-line text-gradient me-2 fs-5"></i>
                                    <span><strong>Occupation:</strong> {{$personal_info->occupation ?? ''}}</span>
                                </li>
                                <li class="mb-2 d-flex align-items-center text-light">
                                    <i class="ri-building-line text-gradient me-2 fs-5"></i>
                                    <span><strong>Company:</strong> {{$personal_info->company_name ?? ''}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Action buttons -->
                    <div class="mt-4">
                        <a href="#contact" class="btn btn-lg" style="background: linear-gradient(to right, #00b4db, #0083b0); color: white;">
                            <span>Hire Me</span>
                            <i class="ri-arrow-right-line ms-2"></i>
                        </a>
                        <a href="#portfolio" class="btn btn-lg" style="background: linear-gradient(to right, #00b4db, #0083b0); color: white; margin-left: 10px;">
                            <span>View Resume</span>
                            <i class="ri-image-line ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
 

  

    /* Minimal necessary animations */
    @keyframes float {
        0% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
        100% { transform: translateY(0) rotate(0deg); }
    }

    @keyframes float-animation {
        0% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0); }
    }

    @keyframes float-animation-reverse {
        0% { transform: translateY(0); }
        50% { transform: translateY(10px); }
        100% { transform: translateY(0); }
    }

    @keyframes rotate-slow {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .about-section .position-absolute[style*="right: -15px"] {
            right: 10px !important;
            top: 10px !important;
            width: 80px !important;
            height: 80px !important;
        }

        .about-section .position-absolute[style*="right: -15px"] div {
            width: 65px !important;
            height: 65px !important;
        }

        .about-section .card.position-absolute {
            position: static !important;
            margin: 15px auto !important;
            max-width: 280px !important;
            display: block !important;
            animation: none !important;
        }

        .about-section .col-lg-5 {
            margin-bottom: 30px;
        }
    }

    /* Progress bar styling */
    .progress {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
    }

    /* Card styling */
    .card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Animate progress bars
        document.querySelectorAll('.progress-bar').forEach(bar => {
            const width = bar.getAttribute('aria-valuenow') + '%';
            setTimeout(() => {
                bar.style.width = width;
            }, 300);
        });

        // Counter animation
        const counterElement = document.querySelector('.text-gradient.fw-semibold');
        if (counterElement) {
            let count = 0;
            const target = 150;
            const duration = 2000;
            const interval = 30;
            const increment = target / (duration / interval);

            const timer = setInterval(() => {
                count += increment;
                if (count >= target) {
                    clearInterval(timer);
                    count = target;
                }
                counterElement.textContent = Math.floor(count) + '+';
            }, interval);
        }
    });
</script>
