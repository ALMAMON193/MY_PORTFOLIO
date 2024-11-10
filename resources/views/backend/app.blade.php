{{--
@php
    $settings = \App\Models\Setting::first();
@endphp --}}
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>  @yield('title') </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}" />

    @include('backend.partials.style')


</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    @include('backend.partials.sidebar')
    @yield('content')
    <!-- Library Bundle Script -->
    @include('backend.partials.script')

</body>

</html>
