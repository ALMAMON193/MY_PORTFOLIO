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
    <!-- start wallet -->
    <section class="section" id="wallet">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-semibold lh-base">Connect NFT Marketplace</h2>
                        <p class="text-muted">A non-fungible token is a non-interchangeable unit of data stored on a blockchain, a form of digital ledger, that can be sold and traded.</p>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card text-center border shadow-none material-shadow">
                        <div class="card-body py-5 px-4">
                            <img src="frontend/images/nft/wallet/metamask.png" alt="" height="55" class="mb-3 pb-2">
                            <h5>Metamask</h5>
                            <p class="text-muted pb-1">MetaMask is a popular cryptocurrency wallet known for its ease of use, availability on both desktops.</p>
                            <a href="#!" class="btn btn-soft-info">Connect Wallet</a>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-4">
                    <div class="card text-center border shadow-none material-shadow">
                        <div class="card-body py-5 px-4">
                            <img src="frontend/images/nft/wallet/coinbase.png" alt="" height="55" class="mb-3 pb-2">
                            <h5>Coinbase Wallet</h5>
                            <p class="text-muted pb-1">Coinbase Wallet is a self-custody wallet that gives you complete control of your crypto for your Wallet.</p>
                            <a href="#!" class="btn btn-info">Change Wallet</a>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="card text-center border shadow-none material-shadow">
                        <div class="card-body py-5 px-4">
                            <img src="frontend/images/nft/wallet/binance.png" alt="" height="55" class="mb-3 pb-2">
                            <h5>Binance</h5>
                            <p class="text-muted pb-1">Binance is considered a safe exchange that allows user account protection via the use of Two Authentication.</p>
                            <a href="#!" class="btn btn-soft-info">Connect Wallet</a>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end wallet -->

    <!-- start marketplace -->
    <section class="section bg-light" id="marketplace">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-semibold lh-base">Explore Products</h2>
                        <p class="text-muted mb-4">Collection widgets specialize in displaying many elements of the same type, such as a collection of pictures from a collection of articles.</p>
                        <ul class="nav nav-pills filter-btns justify-content-center" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-medium active" type="button" data-filter="all">All Items</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-medium" type="button" data-filter="artwork">Artwork</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-medium" type="button" data-filter="music">Music</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-medium" type="button" data-filter="games">Games</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-medium" type="button" data-filter="crypto-card">Crypto Card</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-medium" type="button" data-filter="3d-style">3d Style</button>
                            </li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-4 product-item artwork crypto-card 3d-style">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="frontend/images/nft/img-03.jpg" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Creative Filtered Portrait</a></h5>
                            <p class="text-muted mb-0">Photography</p>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">75.3ETH</span>
                                </div>
                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">67.36 ETH</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 product-item music crypto-card games">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="frontend/images/nft/img-02.jpg" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 23.63k </p>
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">The Chirstoper</a></h5>
                            <p class="text-muted mb-0">Music</p>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">412.30ETH</span>
                                </div>
                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">394.7 ETH</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 product-item artwork music games">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="https://img.themesbrand.com/velzon/images/img-4.gif" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 15.93k </p>
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Evolved Reality</a></h5>
                            <p class="text-muted mb-0">Video</p>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">2.75ETH</span>
                                </div>
                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">3.167 ETH</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 product-item crypto-card 3d-style">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="frontend/images/nft/img-01.jpg" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 14.85k </p>
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Abstract Face Painting</a></h5>
                            <p class="text-muted mb-0">Collectibles</p>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">122.34ETH</span>
                                </div>
                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">97.8 ETH</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 product-item games music 3d-style">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="frontend/images/nft/img-05.jpg" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 64.10k </p>
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Long-tailed Macaque</a></h5>
                            <p class="text-muted mb-0">Artwork</p>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">874.01ETH</span>
                                </div>
                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">745.14 ETH</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 product-item artwork music crypto-card">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="frontend/images/nft/img-06.jpg" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="text-muted mb-0">Artwork</p>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">41.658 ETH</span>
                                </div>
                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">34.81 ETH</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </section>
    <!-- end marketplace -->

    <!-- start features -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-semibold lh-base">Create and Sell Your NFTs</h2>
                        <p class="text-muted">The process of creating an NFT may cost less than a dollar, but the process of selling it can cost up to a thousand dollars. For example, Allen Gannett, a software developer.</p>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-lg-3">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <img src="frontend/images/nft/wallet.png" alt="" class="avatar-sm">
                            <h5 class="mt-4">Set up your wallet</h5>
                            <p class="text-muted fs-14">You have to choose whether to use a hot wallet a cold wallet.</p>
                            <a href="#!" class="link-success fs-14">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <img src="frontend/images/nft/money.png" alt="" class="avatar-sm">
                            <h5 class="mt-4">Create your collection</h5>
                            <p class="text-muted fs-14">Create a collection in Opensea and give it a proper art.</p>
                            <a href="#!" class="link-success fs-14">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <img src="frontend/images/nft/add.png" alt="" class="avatar-sm">
                            <h5 class="mt-4">Add your NFT's</h5>
                            <p class="text-muted fs-14">Go to your profile icon and top right corner creation page.</p>
                            <a href="#!" class="link-success fs-14">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <img src="frontend/images/nft/sell.png" alt="" class="avatar-sm">
                            <h5 class="mt-4">Sell Your NFT's</h5>
                            <p class="text-muted fs-14">Create a collection in Opensea and give Add items and art.</p>
                            <a href="#!" class="link-success fs-14">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!-- end container -->
    </section><!-- end features -->

    <!-- start plan -->
    <section class="section bg-light" id="categories">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-semibold lh-base">Trending All Categories</h2>
                        <p class="text-muted">The process of creating an NFT may cost less than a dollar, but the process of selling it can cost up to a thousand dollars. For example, Allen Gannett, a software developer.</p>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Swiper -->
                    <div class="swiper mySwiper pb-4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-1 mb-3">
                                            <div class="col-6">
                                                <img src="frontend/images/nft/img-06.jpg" alt="" class="img-fluid rounded">
                                                <img src="https://img.themesbrand.com/velzon/images/img-2.gif" alt="" class="img-fluid rounded mt-1">
                                            </div><!--end col-->
                                            <div class="col-6">
                                                <img src="https://img.themesbrand.com/velzon/images/img-5.gif" alt="" class="img-fluid rounded mb-1">
                                                <img src="frontend/images/nft/img-03.jpg" alt="" class="img-fluid rounded">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <a href="#!" class="float-end"> View All <i class="ri-arrow-right-line align-bottom"></i></a>
                                        <h5 class="mb-0 fs-16"><a href="#!">Artwork <span class="badge bg-success-subtle text-success">206</span></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-1 mb-3">
                                            <div class="col-6">
                                                <img src="frontend/images/nft/img-05.jpg" alt="" class="img-fluid rounded">
                                                <img src="https://img.themesbrand.com/velzon/images/img-1.gif" alt="" class="img-fluid rounded mt-1">
                                            </div><!--end col-->
                                            <div class="col-6">
                                                <img src="https://img.themesbrand.com/velzon/images/img-4.gif" alt="" class="img-fluid rounded mb-1">
                                                <img src="frontend/images/nft/img-04.jpg" alt="" class="img-fluid rounded">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <a href="#!" class="float-end"> View All <i class="ri-arrow-right-line align-bottom"></i></a>
                                        <h5 class="mb-0 fs-16"><a href="#!">Crypto Card <span class="badge bg-success-subtle text-success">743</span></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-1 mb-3">
                                            <div class="col-6">
                                                <img src="frontend/images/nft/img-02.jpg" alt="" class="img-fluid rounded">
                                                <img src="https://img.themesbrand.com/velzon/images/img-3.gif" alt="" class="img-fluid rounded mt-1">
                                            </div><!--end col-->
                                            <div class="col-6">
                                                <img src="https://img.themesbrand.com/velzon/images/img-1.gif" alt="" class="img-fluid rounded mb-1">
                                                <img src="frontend/images/nft/img-01.jpg" alt="" class="img-fluid rounded">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <a href="#!" class="float-end"> View All <i class="ri-arrow-right-line align-bottom"></i></a>
                                        <h5 class="mb-0 fs-16"><a href="#!">Music <span class="badge bg-success-subtle text-success">679</span></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-1 mb-3">
                                            <div class="col-6">
                                                <img src="frontend/images/nft/img-03.jpg" alt="" class="img-fluid rounded">
                                                <img src="https://img.themesbrand.com/velzon/images/img-5.gif" alt="" class="img-fluid rounded mt-1">
                                            </div><!--end col-->
                                            <div class="col-6">
                                                <img src="https://img.themesbrand.com/velzon/images/img-2.gif" alt="" class="img-fluid rounded mb-1">
                                                <img src="frontend/images/nft/img-05.jpg" alt="" class="img-fluid rounded">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <a href="#!" class="float-end"> View All <i class="ri-arrow-right-line align-bottom"></i></a>
                                        <h5 class="mb-0 fs-16"><a href="#!">Games <span class="badge bg-success-subtle text-success">341</span></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-1 mb-3">
                                            <div class="col-6">
                                                <img src="frontend/images/nft/img-02.jpg" alt="" class="img-fluid rounded">
                                                <img src="https://img.themesbrand.com/velzon/images/img-3.gif" alt="" class="img-fluid rounded mt-1">
                                            </div><!--end col-->
                                            <div class="col-6">
                                                <img src="https://img.themesbrand.com/velzon/images/img-1.gif" alt="" class="img-fluid rounded mb-1">
                                                <img src="frontend/images/nft/img-01.jpg" alt="" class="img-fluid rounded">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <a href="#!" class="float-end"> View All <i class="ri-arrow-right-line align-bottom"></i></a>
                                        <h5 class="mb-0 fs-16"><a href="#!">Photography <span class="badge bg-success-subtle text-success">1452</span></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-dark"></div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </section>
    <!-- end plan -->

    <!-- start Discover Items-->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center mb-5">
                        <h2 class="mb-0 fw-semibold lh-base flex-grow-1">Discover Items</h2>
                        <a href="apps-nft-explore.html" class="btn btn-primary">View All <i class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card explore-box card-animate border">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="frontend/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle">
                                <div class="ms-2 flex-grow-1">
                                    <a href="#!"><h6 class="mb-0 fs-15">Nancy Martino</h6></a>
                                    <p class="mb-0 text-muted fs-13">Owners</p>
                                </div>
                                <div class="bookmark-icon">
                                    <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                </div>
                            </div>
                            <div class="explore-place-bid-img overflow-hidden rounded">
                                <img src="frontend/images/nft/img-05.jpg" alt="" class="explore-img w-100">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                                <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 97.8 ETH </h5>
                                <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Patterns arts &amp; culture</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card explore-box card-animate border">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="frontend/images/users/avatar-9.jpg" alt="" class="avatar-xs rounded-circle">
                                <div class="ms-2 flex-grow-1">
                                    <a href="#!"><h6 class="mb-0 fs-15">Henry Baird</h6></a>
                                    <p class="mb-0 text-muted fs-13">Creators</p>
                                </div>
                                <div class="bookmark-icon">
                                    <button type="button" class="btn btn-icon" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                </div>
                            </div>
                            <div class="explore-place-bid-img overflow-hidden rounded">
                                <img src="frontend/images/nft/img-03.jpg" alt="" class="explore-img w-100">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 31.64k </p>
                                <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 475.23 ETH </h5>
                                <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Evolved Reality</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card explore-box card-animate border">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="frontend/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle">
                                <div class="ms-2 flex-grow-1">
                                    <a href="#!"><h6 class="mb-0 fs-15">Diana Kohler</h6></a>
                                    <p class="mb-0 text-muted fs-13">Owners</p>
                                </div>
                                <div class="bookmark-icon">
                                    <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                </div>
                            </div>
                            <div class="explore-place-bid-img overflow-hidden rounded">
                                <img src="https://img.themesbrand.com/velzon/images/img-1.gif" alt="" class="img-fluid explore-img">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 8.34k </p>
                                <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 701.38 ETH </h5>
                                <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Long-tailed macaque</a></h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!--end Discover Items-->

    <!-- start Skill Process -->
    @include('frontend.layout.skill.index')
   <!-- end Skill Process -->

    <!-- start cta -->
    <section class="py-5 bg-primary position-relative">
        <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-sm">
                    <div>
                        <h4 class="text-white mb-0 fw-semibold">Create and Sell Your NFT's</h4>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-sm-auto">
                    <div>
                        <a href="apps-nft-create.html" class="btn bg-gradient btn-danger">Create NFT</a>
                        <a href="apps-nft-explore.html" class="btn bg-gradient btn-info">Discover More</a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta -->

@endsection
