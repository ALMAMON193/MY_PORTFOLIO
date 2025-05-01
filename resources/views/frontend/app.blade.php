
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/nft-landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Nov 2024 15:57:36 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Landing | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

@include('frontend.partials.style')

</head>

<body  data-bs-spy="scroll" data-bs-target="#navbar-example">

<!-- Begin page -->
<div class="layout-wrapper landing">
    @include('frontend.partials.nav')
    <div class="bg-overlay bg-overlay-pattern"></div>
    <!-- end navbar -->
    @yield('content')
   @extends('frontend.partials.footer')

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

</div>
<!-- end layout wrapper -->


<!-- JAVASCRIPT -->
@include('frontend.partials.script')
</body>


<!-- Mirrored from themesbrand.com/velzon/html/master/nft-landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Nov 2024 15:57:41 GMT -->
</html>
