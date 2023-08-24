@extends('layouts.frontend.app')
@section('title')
<title>Carveda</title>
@endsection
@section('content')
<!--main content wrapper start-->

<!--hero section start-->
<section class="rent-hero position-relative overflow-hidden z-1">
    <div class="container">
        <div class="video-container">
            <video autoplay loop muted plays-inline class="background-clip">
                <source src="{{ asset('frontend/assets/img/video.mp4') }}" type="video/mp4" />
            </video>
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-11">
                    <div class="rent-hero-content text-center">
                        <h1 class="text-white mb-4">
                            Search Book & <br class="d-none d-sm-block" />
                            Rent Vehicle Easily
                        </h1>
                        <p class="fw-normal">
                            Minitrinsicly conceptualize enterprise-wide services for
                            high-quality expertise Synergistically sources vis-a-vis
                            bleeding-edge action.
                        </p>
                        <div class="apps-btn-group mt-40 d-flex align-items-center justify-content-center flex-wrap">
                            <a href="#" class="app-btn primary-btn d-inline-flex align-items-center">
                                <span class="icon-wrapper me-2"><i class="fa-brands fa-google-play"></i></span>
                                <div class="app-btn-content text-start">
                                    <span>Get it on</span>
                                    <strong>Google Play</strong>
                                </div>
                            </a>
                            <a href="#" class="app-btn white-btn d-inline-flex align-items-center">
                                <span class="icon-wrapper me-2"><i class="fa-brands fa-apple"></i></span>
                                <div class="app-btn-content text-start">
                                    <span>Get it on</span>
                                    <strong>App Store</strong>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hero section end-->

<div class="footer-top mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="at-section-title text-center">
                    <span class="at-subtitle lead text-primary position-relative h1">Browse Top Car</span>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-xl-6 flip-box">
                <div class="footer-banner position-relative bg-primary z-3 rounded flip-box-inner">
                    <img src="{{ asset('frontend/assets/img/shapes/banner-wave.png') }}" alt="wave"
                        class="position-absolute end-0 top-0 z--1" />
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-banner-left">
                                <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i
                                        class="flaticon-search"></i></span>
                                <h3 class="text-white mt-3 mb-20">Premium</h3>
                                <a href="inventory-listing.html" class="at-explore-btn text-white">
                                    <span class="me-2 text-white"><svg width="39" height="26" viewBox="0 0 39 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M32.6161 7.85693L37.4087 12.9998M37.4087 12.9998L32.6161 18.1426M37.4087 12.9998H18.0671"
                                                stroke="#F1F7FE" stroke-width="1.71429" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <ellipse cx="12.9322" cy="13" rx="11.9815" ry="12" stroke="#F1F7FE"
                                                stroke-width="1.71429" />
                                        </svg>
                                    </span>
                                    Read More
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-end">
                            <div class="footer-banner-right">
                                <img src="{{ asset('frontend/assets/img/home1/footer-car-1.png') }}" alt="car"
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="flip-box-back">
                        <img src="{{ asset('frontend/assets/img/shapes/banner-wave.png') }}" alt="wave"
                            class="position-absolute end-0 top-0 z--1" />
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="footer-banner-left">
                                    <span
                                        class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i
                                            class="flaticon-search"></i></span>
                                    <h3 class="text-white mt-3 mb-20">Premium</h3>
                                    <a href="inventory-listing.html" class="at-explore-btn text-white">
                                        <span class="me-2 text-white"><svg width="39" height="26" viewBox="0 0 39 26"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M32.6161 7.85693L37.4087 12.9998M37.4087 12.9998L32.6161 18.1426M37.4087 12.9998H18.0671"
                                                    stroke="#F1F7FE" stroke-width="1.71429" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <ellipse cx="12.9322" cy="13" rx="11.9815" ry="12" stroke="#F1F7FE"
                                                    stroke-width="1.71429" />
                                            </svg>
                                        </span>
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-end">
                                <div class="footer-banner-right">
                                    <img src="{{ asset('frontend/assets/img/home1/footer-car-1.png') }}" alt="car"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 flip-box">
                <div class="footer-banner position-relative banner-gradient z-3 rounded flip-box-inner">
                    <img src="{{ asset('frontend/assets/img/shapes/banner-wave.png') }}" alt="wave"
                        class="opacity-50 position-absolute end-0 top-0 z--1" />
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-banner-left">
                                <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i
                                        class="flaticon-budget"></i></span>
                                <h3 class="text-white mt-3 mb-20">Normal</h3>
                                <a href="car-listing.html" class="at-explore-btn text-white">
                                    <span class="me-2 text-white">
                                        <svg width="39" height="26" viewBox="0 0 39 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M32.6161 7.85693L37.4087 12.9998M37.4087 12.9998L32.6161 18.1426M37.4087 12.9998H18.0671"
                                                stroke="#F1F7FE" stroke-width="1.71429" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <ellipse cx="12.9322" cy="13" rx="11.9815" ry="12" stroke="#F1F7FE"
                                                stroke-width="1.71429" />
                                        </svg> </span>Read More
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-end">
                            <div class="footer-banner-right">
                                <img src="{{ asset('frontend/assets/img/home1/footer-car-2.png') }}" alt="car"
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="flip-box-back">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('frontend/assets/img/shapes/banner-wave.png') }}" alt="wave"
                                    class="opacity-50 position-absolute end-0 top-0 z--1" />
                                <div class="footer-banner-left">
                                    <span
                                        class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i
                                            class="flaticon-budget"></i></span>
                                    <h3 class="text-white mt-3 mb-20">Normal</h3>
                                    <a href="car-listing.html" class="at-explore-btn text-white">
                                        <span class="me-2 text-white">
                                            <svg width="39" height="26" viewBox="0 0 39 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M32.6161 7.85693L37.4087 12.9998M37.4087 12.9998L32.6161 18.1426M37.4087 12.9998H18.0671"
                                                    stroke="#F1F7FE" stroke-width="1.71429" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <ellipse cx="12.9322" cy="13" rx="11.9815" ry="12" stroke="#F1F7FE"
                                                    stroke-width="1.71429" />
                                            </svg> </span>Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-end">
                                <div class="footer-banner-right">
                                    <img src="{{ asset('frontend/assets/img/home1/footer-car-2.png') }}" alt="car"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--brands section start-->
<section class="brands-section pt-60 mt-5" id="brands">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="at-section-title text-center">
                    <span class="at-subtitle lead text-primary position-relative h1">Browse Top Car</span>
                </div>
            </div>
        </div>
        <div class="brands-filter mt-5">
            <div class="tab-content mt-5">
                <div class="tab-pane fade active show" id="honda">
                    <div class="ct-row d-flex align-items-center justify-content-center flex-wrap">
                        <div class="ct-col">
                            <div class="brand-card text-center bg-white position-relative rounded">
                                <img src="{{ asset('frontend/assets/img/icons/crossover.svg') }}" alt="crossover"
                                    class="img-fluid icon-black" />
                                <img src="{{ asset('frontend/assets/img/icons/crossover-red.svg') }}" alt="crossover"
                                    class="img-fluid icon-red" />
                                <h5 class="mt-3 mb-0">Crossover</h5>
                                <a href="#" class="explore-btn position-absolute text-white"><i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="ct-col">
                            <div class="brand-card text-center bg-white position-relative rounded">
                                <img src="{{ asset('frontend/assets/img/icons/suv.svg') }}" alt="crossover"
                                    class="img-fluid icon-black" />
                                <img src="{{ asset('frontend/assets/img/icons/suv-red.svg') }}" alt="crossover"
                                    class="img-fluid icon-red" />
                                <h5 class="mt-3 mb-0">Suv</h5>
                                <a href="#" class="explore-btn position-absolute text-white"><i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="ct-col">
                            <div class="brand-card text-center bg-white position-relative rounded">
                                <img src="{{ asset('frontend/assets/img/icons/sedan.svg') }}" alt="crossover"
                                    class="img-fluid icon-black" />
                                <img src="{{ asset('frontend/assets/img/icons/sedan-red.svg') }}" alt="crossover"
                                    class="img-fluid icon-red" />
                                <h5 class="mt-3 mb-0">Sedan</h5>
                                <a href="#" class="explore-btn position-absolute text-white"><i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="ct-col">
                            <div class="brand-card text-center bg-white position-relative rounded">
                                <img src="{{ asset('frontend/assets/img/icons/wagon.svg') }}" alt="crossover"
                                    class="img-fluid icon-black" />
                                <img src="{{ asset('frontend/assets/img/icons/wagon-red.svg') }}" alt="crossover"
                                    class="img-fluid icon-red" />
                                <h5 class="mt-3 mb-0">Wagon</h5>
                                <a href="#" class="explore-btn position-absolute text-white"><i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="ct-col">
                            <div class="brand-card text-center bg-white position-relative rounded">
                                <img src="{{ asset('frontend/assets/img/icons/coup.svg') }}" alt="crossover"
                                    class="img-fluid icon-black" />
                                <img src="{{ asset('frontend/assets/img/icons/coup-red.svg') }}" alt="crossover"
                                    class="img-fluid icon-red" />
                                <h5 class="mt-3 mb-0">Coup</h5>
                                <a href="#" class="explore-btn position-absolute text-white"><i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="ct-col">
                            <div class="brand-card text-center bg-white position-relative rounded">
                                <img src="{{ asset('frontend/assets/img/icons/convertible.svg') }}" alt="crossover"
                                    class="img-fluid icon-black" />
                                <img src="{{ asset('frontend/assets/img/icons/convertible-red.svg') }}" alt="crossover"
                                    class="img-fluid icon-red" />
                                <h5 class="mt-3 mb-0">Convertible</h5>
                                <a href="#" class="explore-btn position-absolute text-white"><i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="ct-col">
                            <div class="brand-card text-center bg-white position-relative rounded">
                                <img src="{{ asset('frontend/assets/img/icons/compact.svg') }}" alt="crossover"
                                    class="img-fluid icon-black" />
                                <img src="{{ asset('frontend/assets/img/icons/compact-red.svg') }}" alt="crossover"
                                    class="img-fluid icon-red" />
                                <h5 class="mt-3 mb-0">Compact</h5>
                                <a href="#" class="explore-btn position-absolute text-white"><i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="ct-col">
                            <div class="brand-card text-center bg-white position-relative rounded">
                                <img src="{{ asset('frontend/assets/img/icons/sport-coupe.svg') }}" alt="crossover"
                                    class="img-fluid icon-black" />
                                <img src="{{ asset('frontend/assets/img/icons/sport-coupe-red.svg') }}" alt="crossover"
                                    class="img-fluid icon-red" />
                                <h5 class="mt-3 mb-0">Sport Coupe</h5>
                                <a href="#" class="explore-btn position-absolute text-white"><i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="ct-col">
                            <div class="brand-card text-center bg-white position-relative rounded">
                                <img src="{{ asset('frontend/assets/img/icons/pickup.svg') }}" alt="crossover"
                                    class="img-fluid icon-black" />
                                <img src="{{ asset('frontend/assets/img/icons/pickup-red.svg') }}" alt="crossover"
                                    class="img-fluid icon-red" />
                                <h5 class="mt-3 mb-0">Pickup</h5>
                                <a href="#" class="explore-btn position-absolute text-white"><i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="ct-col">
                            <div class="brand-card text-center bg-white position-relative rounded">
                                <img src="{{ asset('frontend/assets/img/icons/mpv.svg') }}" alt="crossover"
                                    class="img-fluid icon-black" />
                                <img src="{{ asset('frontend/assets/img/icons/mpv-red.svg') }}" alt="crossover"
                                    class="img-fluid icon-red" />
                                <h5 class="mt-3 mb-0">Family MPV</h5>
                                <a href="#" class="explore-btn position-absolute text-white"><i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brands-explore-btn text-center mt-5">
            <a href="inventory-listing.html" class="link-btn fw-bold d-inline-flex align-items-center">
                <span class="me-2"><img src="{{ asset('frontend/assets/img/icons/arrow-black.png') }}"
                        alt="arrow" /></span>
                View All
                <span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>
<!--brands section end-->

<!--latest collection start-->
<section class="latest-collection pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="at-section-title text-center">
                    <span class="at-subtitle lead text-primary position-relative h1">Browse Top Car</span>
                </div>
            </div>
        </div>
        <div class="filter-items-wrapper mt-5">
            <div class="row g-4 justify-content-center filter-grid">
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                        <a href="#" class="icon-btn compare-btn position-absolute"><i
                                class="fa-solid fa-compress"></i></a>
                        <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>

                        <div class="feature-thumb position-relative overflow-hidden">
                            <a href="inventory-details.html"><img
                                    src="{{ asset('frontend/assets/img/home1/car-1.jpg') }}" alt="car"
                                    class="img-fluid" /></a>
                        </div>
                        <div class="filter-card-content">
                            <div class="price-btn text-end position-relative">
                                <span class="small-btn-meta">10-8-2023</span>
                            </div>
                            <a href="inventory-details.html" class="mt-4 d-block">
                                <h5>Ford Explorer XLT</h5>
                            </a>
                            <hr class="spacer mt-3 mb-3" />
                            <span class="meta-content"><strong>Description:</strong> Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry.</span>

                            <a href="#" class="btn outline-btn btn-sm d-block mt-3">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 latest featured popular">
                    <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                        <a href="#" class="icon-btn compare-btn position-absolute"><i
                                class="fa-solid fa-compress"></i></a>
                        <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>

                        <div class="feature-thumb position-relative overflow-hidden">
                            <a href="inventory-details.html"><img
                                    src="{{ asset('frontend/assets/img/home1/car-4.jpg') }}" alt="car"
                                    class="img-fluid" /></a>
                        </div>
                        <div class="filter-card-content">
                            <div class="price-btn text-end position-relative">
                                <span class="small-btn-meta">10-8-2023</span>
                            </div>
                            <a href="inventory-details.html" class="mt-4 d-block">
                                <h5>Camz Ferrari Portofino</h5>
                            </a>
                            <hr class="spacer mt-3 mb-3" />

                            <span class="meta-content"><strong>Description:</strong> Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry.</span>

                            <a href="#" class="btn outline-btn btn-sm d-block mt-3">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 featured">
                    <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                        <a href="#" class="icon-btn compare-btn position-absolute"><i
                                class="fa-solid fa-compress"></i></a>
                        <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                        <div class="feature-thumb position-relative overflow-hidden">
                            <a href="inventory-details.html"><img
                                    src="{{ asset('frontend/assets/img/home1/car-5.jpg') }}" alt="car"
                                    class="img-fluid" /></a>
                        </div>
                        <div class="filter-card-content">
                            <div class="price-btn text-end position-relative">
                                <span class="small-btn-meta">10-8-2023</span>
                            </div>
                            <a href="inventory-details.html" class="mt-4 d-block">
                                <h5>Mercedes-Benz E 400</h5>
                            </a>
                            <hr class="spacer mt-3 mb-3" />

                            <span class="meta-content"><strong>Description:</strong> Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry.</span>

                            <a href="#" class="btn outline-btn btn-sm d-block mt-3">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="inventory-listing.html" class="at-explore-btn color-secondary"><span class="me-2">
                    <svg width="39" height="26" viewBox="0 0 39 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M32.7143 7.85706L37.5142 12.9999M37.5142 12.9999L32.7143 18.1428M37.5142 12.9999H18.1428"
                            stroke="#FC0012" stroke-width="1.71429" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="13" cy="13" r="12" stroke="#FC0012" stroke-width="1.71429" />
                    </svg> </span>View More
            </a>
        </div>
    </div>
</section>
<!--latest collection end-->

<!--about section start-->
<section class="about-section pt-40 mt-3 pb-220 bg-primary-light position-relative z-1 overflow-hidden"
    data-background="assets/img/shapes/about-bg.jpg">
    <img src="{{ asset('frontend/assets/img/shapes/tire-primary-light.png') }}" alt="tire"
        class="tire-primary-light position-absolute end-0 top-0 z--1" />
    <span class="small-circle-shape position-absolute z--1"></span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="about-left position-relative z-1">
                    <span class="circle-large position-absolute z--1"></span>
                    <div class="at-section-title mb-20">
                        <span class="at-subtitle lead text-primary position-relative h1">Browse Top Car</span>
                        <h2 class="h1 mt-2 mb-4">
                            Don't Waste Your <br />
                            Valuable Time or Money
                        </h2>
                        <p>
                            Collaboratively leverage existing client-centric schemas
                            integrated processes. Inter actively engineer global sources
                            after team driven niche markets. Rapidiously processes with
                            resource maximizing architectures.
                        </p>
                    </div>
                    <img src="{{ asset('frontend/assets/img/home1/car-red.png') }}" alt="car" class="img-fluid" />
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-right mt-5 mt-lg-0">
                    <div class="about-icon-box bg-white shadow rounded">
                        <div class="ab-icon-box-top d-flex align-items-center mb-3">
                            <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i
                                    class="flaticon-shield"></i></span>
                            <h5 class="mb-0 ms-3">Expert Certified Mechanics</h5>
                        </div>
                        <p class="mb-0">
                            Credibly maximize resource maximizing channels after
                            interoperable frictionless. Rather than synergistic models.
                        </p>
                    </div>
                    <div class="about-icon-box bg-white shadow rounded mt-20 ms-md-5">
                        <div class="ab-icon-box-top d-flex align-items-center mb-3">
                            <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i
                                    class="flaticon-shield"></i></span>
                            <h5 class="mb-0 ms-3">Genuine Spares Parts</h5>
                        </div>
                        <p class="mb-0">
                            Credibly maximize resource maximizing channels after
                            interoperable frictionless. Rather than synergistic models.
                        </p>
                    </div>
                    <div class="about-icon-box bg-white shadow rounded mt-20">
                        <div class="ab-icon-box-top d-flex align-items-center mb-3">
                            <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i
                                    class="flaticon-price-tag"></i></span>
                            <h5 class="mb-0 ms-3">Get Reasonable Price</h5>
                        </div>
                        <p class="mb-0">
                            Credibly maximize resource maximizing channels after
                            interoperable frictionless. Rather than synergistic models.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--about section end-->

<!--feedback section start-->
<section class="feedback-section position-relative" data-background="assets/img/home1/video-bg.jpg">
    <div class="countdown-area">
        <div class="main-countdown-wrapper d-inline-flex align-items-center bg-white">
            <div class="countdown-box d-xl-flex text-center text-xl-start align-items-center">
                <span
                    class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary"><i
                        class="flaticon-heart"></i></span>
                <div class="countdown-box-content ms-xl-3 mt-3 mt-xl-0">
                    <h3 class="mb-1">
                        <span class="counter">45</span><span>k+</span>
                    </h3>
                    <span class="subtitle">Happy Customer</span>
                </div>
            </div>
            <div class="countdown-box d-xl-flex text-center text-xl-start align-items-center">
                <span
                    class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary"><i
                        class="flaticon-car-repair"></i></span>
                <div class="countdown-box-content ms-xl-3 mt-3 mt-xl-0">
                    <h3 class="mb-1">
                        <span class="counter">500</span><span>+</span>
                    </h3>
                    <span class="subtitle">Cars in Garage</span>
                </div>
            </div>
            <div class="countdown-box d-xl-flex text-center text-xl-start align-items-center">
                <span
                    class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary"><i
                        class="flaticon-speedometer-1"></i></span>
                <div class="countdown-box-content ms-xl-3 mt-3 mt-xl-0">
                    <h3 class="mb-1">
                        <span class="counter">45</span><span>k+</span>
                    </h3>
                    <span class="subtitle">Total Kilometer</span>
                </div>
            </div>
            <div class="countdown-box d-xl-flex text-center text-xl-start align-items-center">
                <span
                    class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary"><i
                        class="flaticon-drive"></i></span>
                <div class="countdown-box-content ms-xl-3 mt-3 mt-xl-0">
                    <h3 class="mb-1">
                        <span class="counter">50</span><span>+</span>
                    </h3>
                    <span class="subtitle">Car Center Solutions</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="video-content-wrapper">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="quote-icon">
                        <img src="{{ asset('frontend/assets/img/icons/quote-icon.svg') }}" alt="quote"
                            class="img-fluid" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="video-content text-center">
                        <a href="https://www.youtube.com/watch?v=6WZOxnYi4Cs"
                            class="video-popup-btn bg-primary text-white"><i class="fa-solid fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feedback-slider-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feedback-slider position-relative">
                        <div class="swiper at_feedback_slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide feedback-single bg-white position-relative rounded">
                                    <div class="rating-box position-absolute rounded-1">
                                        <span class="me-1"><i class="fa-solid fa-star"></i></span>4.5
                                    </div>
                                    <h4 class="mb-3">Amazing Support!</h4>
                                    <p class="mb-4">
                                        Authoritatively grow accurate products rather than
                                        collaborative conterpocras tinate enterprise strategic
                                        theme areas before functionalized in Phosfluoresc
                                        based technology whereas low-risk high-yield vortals.
                                        whereas effective functionalities. Holisticly pursue
                                        cooperative.
                                    </p>
                                    <div class="author-info d-flex align-items-center">
                                        <img src="{{ asset('frontend/assets/img/author/author-1.jpg') }}" alt="author"
                                            class="rounded-circle flex-shrink-0 border border-2" />
                                        <div class="author-info-content ms-3">
                                            <h6 class="mb-1 text-secondary">
                                                Chris Hoang Siama
                                            </h6>
                                            <span>Managing Director</span>
                                        </div>
                                    </div>
                                    <span class="quote-icon position-absolute"><img
                                            src="{{ asset('frontend/assets/img/icons/quote-icon-sm.svg') }}"
                                            alt="quote icon" /></span>
                                </div>
                                <div class="swiper-slide feedback-single bg-white position-relative rounded">
                                    <div class="rating-box position-absolute rounded-1">
                                        <span class="me-1"><i class="fa-solid fa-star"></i></span>4.5
                                    </div>
                                    <h4 class="mb-3">Amazing Support!</h4>
                                    <p class="mb-4">
                                        Authoritatively grow accurate products rather than
                                        collaborative conterpocras tinate enterprise strategic
                                        theme areas before functionalized in Phosfluoresc
                                        based technology whereas low-risk high-yield vortals.
                                        whereas effective functionalities. Holisticly pursue
                                        cooperative.
                                    </p>
                                    <div class="author-info d-flex align-items-center">
                                        <img src="{{ asset('frontend/assets/img/author/author-1.jpg') }}" alt="author"
                                            class="rounded-circle flex-shrink-0 border border-2" />
                                        <div class="author-info-content ms-3">
                                            <h6 class="mb-1 text-secondary">
                                                Chris Hoang Siama
                                            </h6>
                                            <span>Managing Director</span>
                                        </div>
                                    </div>
                                    <span class="quote-icon position-absolute"><img
                                            src="{{ asset('frontend/assets/img/icons/quote-icon-sm.svg') }}"
                                            alt="quote icon" /></span>
                                </div>
                            </div>
                            <div class="slide-arrow-btn position-absolute slide-btn-next">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                            <div class="slide-arrow-btn position-absolute slide-btn-prev">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--feedback section end-->

<!--blog section start-->
<section class="blog-section overflow-hidden pb-120" style="margin-top: 300px; margin-bottom: 100px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7">
                <div class="at-section-title text-center">
                    <span class="at-subtitle lead text-primary position-relative h1">Browse Top Car</span>
                </div>
            </div>
        </div>
        <div class="blog-card-wrapper mt-5">
            <div class="row g-4 justify-content-center">
                <div class="col-xl-4 col-lg-6 col-sm-10">
                    <article class="blog-card bg-white rounded">
                        <figure class="feature-img position-relative overflow-hidden rounded-top">
                            <a href="#"><img src="{{ asset('frontend/assets/img/home1/blog-1.jpg') }}"
                                    alt="feature image" class="img-fluid" /></a>
                        </figure>
                        <a href="#" class="small-btn-meta text-primary bg-primary-light">Car News</a>
                        <a href="#">
                            <h5 class="mt-3">Some philosophers</h5>
                        </a>
                        <p>
                            Struggling to sell onee currently on the market won't stop
                            actress and singer...
                        </p>
                        <div class="blog-card-bottom mt-4 d-flex align-items-center justify-content-between flex-wrap">
                            <div class="blog-card-author d-inline-flex align-items-center">
                                <img src="{{ asset('frontend/assets/img/author/author-1.jpg') }}" alt="author"
                                    class="flex-shrink-0 rounded-circle" />
                                <div class="blog-card-author-details ms-3">
                                    <strong class="fw-bold text-secondary d-block">CarVeda</strong>
                                    <span class="date">july 22, 2023</span>
                                </div>
                            </div>
                            <a href="blog.html"
                                class="blog-explore-btn d-flex align-items-center justify-content-center rounded-circle"><i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-10">
                    <article class="blog-card bg-white rounded">
                        <figure class="feature-img position-relative overflow-hidden rounded-top">
                            <a href="#"><img src="{{ asset('frontend/assets/img/home1/blog-2.jpg') }}"
                                    alt="feature image" class="img-fluid" /></a>
                        </figure>
                        <a href="#" class="small-btn-meta text-primary bg-primary-light">Car News</a>
                        <a href="blog.html">
                            <h5 class="mt-3">Some philosophers</h5>
                        </a>
                        <p>
                            Struggling to sell onee currently on the market won't stop
                            actress and singer...
                        </p>
                        <div class="blog-card-bottom mt-4 d-flex align-items-center justify-content-between flex-wrap">
                            <div class="blog-card-author d-inline-flex align-items-center">
                                <img src="{{ asset('frontend/assets/img/author/author-1.jpg') }}" alt="author"
                                    class="flex-shrink-0 rounded-circle" />
                                <div class="blog-card-author-details ms-3">
                                    <strong class="fw-bold text-secondary d-block">CarVeda</strong>
                                    <span class="date">july 22, 2023</span>
                                </div>
                            </div>
                            <a href="blog.html"
                                class="blog-explore-btn d-flex align-items-center justify-content-center rounded-circle"><i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-10">
                    <article class="blog-card bg-white rounded">
                        <figure class="feature-img position-relative overflow-hidden rounded-top">
                            <a href="#"><img src="{{ asset('frontend/assets/img/home1/blog-3.jpg') }}"
                                    alt="feature image" class="img-fluid" /></a>
                        </figure>
                        <a href="#" class="small-btn-meta text-primary bg-primary-light">Car News</a>
                        <a href="#">
                            <h5 class="mt-3">Some philosophers</h5>
                        </a>
                        <p>
                            Struggling to sell onee currently on the market won't stop
                            actress and singer...
                        </p>
                        <div class="blog-card-bottom mt-4 d-flex align-items-center justify-content-between flex-wrap">
                            <div class="blog-card-author d-inline-flex align-items-center">
                                <img src="{{ asset('frontend/assets/img/author/author-1.jpg') }}" alt="author"
                                    class="flex-shrink-0 rounded-circle" />
                                <div class="blog-card-author-details ms-3">
                                    <strong class="fw-bold text-secondary d-block">CarVeda</strong>
                                    <span class="date">july 22, 2023</span>
                                </div>
                            </div>
                            <a href="blog.html"
                                class="blog-explore-btn d-flex align-items-center justify-content-center rounded-circle"><i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog section end-->


<!-- main content wrapper ends -->
@endsection