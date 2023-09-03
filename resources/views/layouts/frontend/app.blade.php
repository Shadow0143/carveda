<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--meta-->
    <meta name="description"
        content="Car Rental HTML Template, auto parts technology, car dealership & business Bootstrap 5 Html template. It is best and famous car rental company website template." />
    <meta name="author" content="carveda" />

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('frontend/assets/img/favicon.png') }}" type="image/png" sizes="16x16" />


    <!--title-->
    @yield('title')
    @laravelPWA

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}" />
    <!-- endbuild -->

    <!--custom css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Zen+Dots&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">

</head>

<body>
    @include('sweetalert::alert')
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    <div class="main-wrapper">
        @include('layouts.frontend.header')
        <!-- End of Page Navbar -->
        @yield('content')
        <!-- footer -->
        @include('layouts.frontend.footer')
        <!-- end of page footer -->
    </div>
    <!--whatsapp button-->
    <a href="https://wa.me/9508592006" target="_blank" class="whatsapp-link"><i class="fab fa-whatsapp"></i></a>
    <!--scrolltop button end-->

    <!--scrolltop button-->
    <button class="theme-scrolltop-btn">
        <i class="fa-regular fa-hand-pointer"></i>
    </button>
    <!--scrolltop button end-->

    <!--build:js-->
    <script src="{{ asset('frontend/assets/js/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/massonry.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/bootstrap-slider.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/isotop.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/moment.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/date-picker.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/progressbar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/custom-scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/price-range.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/image-rotate.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>


    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    @yield('js')
</body>

</html>