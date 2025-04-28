<section class="section" id="services">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="mb-3 fw-semibold">Our Development Services</h2>
            <p class="text-muted">We deliver end-to-end digital transformation solutions tailored to your business needs, leveraging the latest technologies to ensure scalability, performance, and exceptional user experiences.</p>
        </div>

        <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="card text-center border shadow-none material-shadow h-100">
                                <div class="card-body py-5 px-4">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1084/1084984.png" height="55" class="mb-3 pb-2">
                                    <h5>Frontend Development</h5>
                                    <p class="text-muted pb-1">We create pixel-perfect, responsive interfaces using React.js, Vue.js, and Angular frameworks. Our frontend solutions focus on performance optimization, accessibility standards, and seamless cross-browser compatibility to deliver engaging user experiences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center border shadow-none material-shadow h-100">
                                <div class="card-body py-5 px-4">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1084/1084990.png" height="55" class="mb-3 pb-2">
                                    <h5>Backend Development</h5>
                                    <p class="text-muted pb-1">Our backend solutions utilize Node.js, Python (Django/Flask), and Java Spring Boot to build scalable, secure APIs and microservices. We implement robust database architectures, caching mechanisms, and cloud integrations to ensure high availability and performance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center border shadow-none material-shadow h-100">
                                <div class="card-body py-5 px-4">
                                    <img src="https://cdn-icons-png.flaticon.com/512/2489/2489715.png" height="55" class="mb-3 pb-2">
                                    <h5>API Integration</h5>
                                    <p class="text-muted pb-1">We specialize in seamless integration with RESTful and GraphQL APIs, payment gateways (Stripe, PayPal), CRM systems, and third-party services. Our solutions include comprehensive documentation, version control, and thorough testing for reliable connectivity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="card text-center border shadow-none material-shadow h-100">
                                <div class="card-body py-5 px-4">
                                    <img src="https://cdn-icons-png.flaticon.com/512/8649/8649597.png" height="55" class="mb-3 pb-2">
                                    <h5>AI Chatbot Solutions</h5>
                                    <p class="text-muted pb-1">We develop intelligent conversational AI using natural language processing (NLP) and machine learning. Our chatbots handle complex queries, integrate with knowledge bases, and provide 24/7 customer support with human-like interaction capabilities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center border shadow-none material-shadow h-100">
                                <div class="card-body py-5 px-4">
                                    <img src="https://cdn-icons-png.flaticon.com/512/2489/2489717.png" height="55" class="mb-3 pb-2">
                                    <h5>Payment Integration</h5>
                                    <p class="text-muted pb-1">Secure PCI-compliant payment solutions with Stripe, PayPal, and Razorpay integrations. We implement recurring billing, subscription management, fraud detection, and multi-currency support with seamless checkout experiences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center border shadow-none material-shadow h-100">
                                <div class="card-body py-5 px-4">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1084/1084967.png" height="55" class="mb-3 pb-2">
                                    <h5>UI/UX Design</h5>
                                    <p class="text-muted pb-1">Our design process includes user research, wireframing, prototyping in Figma, and usability testing. We create intuitive interfaces with attention to visual hierarchy, consistent design systems, and responsive layouts that enhance user engagement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

            <!-- Pagination -->
            <div class="swiper-pagination swiper-pagination-dark position-relative mt-4"></div>
        </div>
    </div>
</section>

<style>
    .material-shadow {
        box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border-radius: 8px;
    }
    .material-shadow:hover {
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        transform: translateY(-5px);
    }
    .card-body {
        transition: all 0.3s ease;
    }
    .card:hover .card-body {
        transform: scale(1.02);
    }
    .text-muted {
        color: #6c757d !important;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    .pb-1 {
        padding-bottom: 0.25rem !important;
    }
    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: rgba(0,0,0,0.3);
        opacity: 1;
        margin: 0 5px !important;
    }
    .swiper-pagination-bullet-active {
        background: #0d6efd;
        transform: scale(1.2);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize carousel with pagination
        var carousel = new bootstrap.Carousel(document.getElementById('servicesCarousel'), {
            interval: 5000
        });

        // Custom pagination functionality
        var items = document.querySelectorAll('.carousel-item');
        var pagination = document.querySelector('.swiper-pagination');

        items.forEach((item, index) => {
            let bullet = document.createElement('span');
            bullet.className = 'swiper-pagination-bullet';
            if(index === 0) bullet.classList.add('swiper-pagination-bullet-active');

            bullet.addEventListener('click', () => {
                carousel.to(index);
                updatePagination(index);
            });
            pagination.appendChild(bullet);
        });

        function updatePagination(activeIndex) {
            document.querySelectorAll('.swiper-pagination-bullet').forEach((bullet, index) => {
                bullet.classList.toggle('swiper-pagination-bullet-active', index === activeIndex);
            });
        }

        document.getElementById('servicesCarousel').addEventListener('slid.bs.carousel', function() {
            let activeIndex = [...items].findIndex(item => item.classList.contains('active'));
            updatePagination(activeIndex);
        });
    });
</script>
