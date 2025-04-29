<!-- start services -->
<section class="section bg-light" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-5">
                    <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Web Development <span
                            class="text-primary">Services</span> Offered</h1>
                    <p class="text-muted">Expert solutions for your digital needs. From chatbots to responsive designs,
                        we deliver quality web development services tailored to your business.</p>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
            @foreach ($services as $item)
                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-none text-center py-3 hover-effect">
                        <div class="card-body py-4">
                            <div class="avatar-sm position-relative mb-4 mx-auto">
                                <div class="job-icon-effect"></div>
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <img src="{{ asset($item->image ?? 'frontend/images/skills/git_4494740.png') }}" alt=""
                                        style="height: 40px; wwidth: 40px; border-radius: 20%;">
                                </div>
                            </div>
                            <a href="#!" class="stretched-link">
                                <h5 class="fs-17 pt-1">{{ $item->name ?? 'N/A'}}</h5>
                            </a>
                            <p class="mb-0 text-muted">{!! $item->description ?? 'N/A' !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end services -->

<style>
    /* Hover effects for service cards */
    .hover-effect {
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }

    .hover-effect:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        border: 1px solid #e6f7e9;
    }

    /* Animated effect for icons */
    .job-icon-effect {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        border-radius: 50%;
        background: rgba(67, 209, 135, 0.1);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(0.95);
            opacity: 0.7;
        }

        50% {
            transform: scale(1.05);
            opacity: 0.4;
        }

        100% {
            transform: scale(0.95);
            opacity: 0.7;
        }
    }

    /* Enhanced icon styling */
    .avatar-title i {
        transition: all 0.3s ease;
    }

    .card:hover .avatar-title i {
        transform: scale(1.2);
        color: #28a745;
    }

    /* Smooth transition for links */
    .stretched-link::after {
        transition: all 0.3s ease;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .card {
            margin-bottom: 20px;
        }
    }
</style>
