<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TOKASH Letting </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Start Here -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon-homlisti.svg') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <!-- Bootstrap Css Start Here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Animate Css Start Here -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Owl Carousel Start Here -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owlcarousel/owl.theme.default.min.css') }}">
    <!-- Swiper Css Start Here -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <!-- Flaticon Css Start Here -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon/font/flaticon.css') }}">
    <!-- Select Css Start Here -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Animate Css Start Here -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Pop Up Css Start Here -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- All min Css Start Here -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- Pannellum -->
    <link rel="stylesheet" href="{{ asset('assets/css/pannellum.css') }}">
    <!-- noUIrangle slider -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/noUiSlider/nouislider.min.css') }}">
    <!-- Style Css Start Here -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Google Font Start Here -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="sticky-header">

    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <!--=====================================-->
    <!--=   Preloader     Start             =-->
    <!--=====================================-->

    <div id="preloader"></div>
    <!--=====================================-->
    <!--=   Preloader     End               =-->
    <!--=====================================-->
    <div class="wrapper" id="wrapper">
    <!--=====================================-->
    <!--=   Header     Start             =-->
    <!--=====================================-->
    <!-- Header -->

    @include('partials.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    @include('partials.scripts')
    @stack('scripts')

</body>
</html>
