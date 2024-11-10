<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Home || Lariv - HTML Portfolio Web Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   @include('frontend.partials.style')
</head>

<body>

    <!-- Preloader Start-->

    <div class="InitLoader">
        <div class="fingerprint-spinner">
            <div class="spinner-ring"></div>
            <div class="spinner-ring"></div>
            <div class="spinner-ring"></div>
            <div class="spinner-ring"></div>
            <div class="spinner-ring"></div>
            <div class="spinner-ring"></div>
            <div class="spinner-ring"></div>
            <div class="spinner-ring"></div>
            <div class="spinner-ring"></div>
        </div>
    </div>

    <!-- back href top start  -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back href top end -->

    <!-- Bg image start-->
    <div class="bg-img" style="background-image: url('{{ asset('') }}frontend/images/show/bg.png')"></div>
    <!-- Bg image end-->

    <!-- header-area-start -->
   @include('frontend.partials.header')
    <!-- header-area-end -->

    <!-- side bar start -->
 @include('frontend.partials.sidebar')
    <!-- side bar end -->

 @yield('content')

    <!-- footer start -->
    @include('frontend.partials.footer')
    <!-- footer end -->

    @include('frontend.partials.script')
</body>

</html>
