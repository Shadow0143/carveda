@extends('layouts.frontend.app')
@section('title')
<title>Carveda || About </title>
@endsection
@section('content')

<!--breadcrumb section start-->
<section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75 "
    data-background="{{ asset('frontend/assets/img/shapes/texture-bg.png') }}" style="margin-top: -100px;">
    <img src="{{ asset('frontend/assets/img/shapes/tire-print-left.png') }}" alt="tire print"
        class="position-absolute start-0 z-1 tire-print">
    <img src="{{ asset('frontend/assets/img/shapes/tire-print-right.png') }}" alt="tire print"
        class="position-absolute end-0 z-1 tire-print">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                    <h1 class="text-white">About Carveda</h1>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item  text-white fw-500">Home </li>
                        <li class="breadcrumb-item  text-white fw-500"> /</li>
                        <li class="breadcrumb-item text-white fw-500">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end-->

<!--about section start-->
<section class="about-section pt-120 pb-220 bg-primary-light position-relative z-1 overflow-hidden"
    data-background="{{ asset('frontend/assets/img/shapes/about-bg.jpg') }}">
    <img src="{{ asset('frontend/assets/img/shapes/tire-primary-light.png') }}" alt="tire"
        class="tire-primary-light position-absolute end-0 top-0 z--1">
    <span class="small-circle-shape position-absolute z--1"></span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="about-left position-relative z-1">
                    <span class="circle-large position-absolute z--1"></span>
                    <div class="at-section-title mb-20">
                        <span class="at-subtitle position-relative lead text-primary">Why Choose Us</span>
                        <h2 class="h1 mt-2 mb-4">Don't Waste Your <br> Valuable Time or Money</h2>
                        <p>Collaboratively leverage existing client-centric schemas integrated processes. Inter actively
                            engineer global sources after team driven niche markets. Rapidiously processes with resource
                            maximizing architectures.</p>
                    </div>
                    <img src="{{ asset('frontend/assets/img/home1/car-red.png') }}" alt="car" class="img-fluid">
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
                        <p class="mb-0">Credibly maximize resource maximizing channels after interoperable frictionless.
                            Rather than synergistic models.</p>
                    </div>
                    <div class="about-icon-box bg-white shadow rounded mt-20 ms-md-5">
                        <div class="ab-icon-box-top d-flex align-items-center mb-3">
                            <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i
                                    class="flaticon-shield"></i></span>
                            <h5 class="mb-0 ms-3">Genuine Spares Parts</h5>
                        </div>
                        <p class="mb-0">Credibly maximize resource maximizing channels after interoperable frictionless.
                            Rather than synergistic models.</p>
                    </div>
                    <div class="about-icon-box bg-white shadow rounded mt-20">
                        <div class="ab-icon-box-top d-flex align-items-center mb-3">
                            <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i
                                    class="flaticon-price-tag"></i></span>
                            <h5 class="mb-0 ms-3">Get Reasonable Price</h5>
                        </div>
                        <p class="mb-0">Credibly maximize resource maximizing channels after interoperable frictionless.
                            Rather than synergistic models.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--about section end-->

<!--feedback section start-->
<section class="feedback-section position-relative"
    data-background="{{ asset('frontend/assets/img/home1/video-bg.jpg') }}">
    <div class="countdown-area">
        <div class="main-countdown-wrapper d-inline-flex align-items-center bg-white">
            <div class="countdown-box d-xl-flex text-center text-xl-start align-items-center">
                <span
                    class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary"><i
                        class="flaticon-heart"></i></span>
                <div class="countdown-box-content ms-xl-3 mt-3 mt-xl-0">
                    <h3 class="mb-1"><span class="counter">45</span><span>k+</span></h3>
                    <span class="subtitle">Happy Customer</span>
                </div>
            </div>
            <div class="countdown-box d-xl-flex text-center text-xl-start align-items-center">
                <span
                    class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary"><i
                        class="flaticon-car-repair"></i></span>
                <div class="countdown-box-content ms-xl-3 mt-3 mt-xl-0">
                    <h3 class="mb-1"><span class="counter">500</span><span>+</span></h3>
                    <span class="subtitle">Cars in Garage</span>
                </div>
            </div>
            <div class="countdown-box d-xl-flex text-center text-xl-start align-items-center">
                <span
                    class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary"><i
                        class="flaticon-speedometer-1"></i></span>
                <div class="countdown-box-content ms-xl-3 mt-3 mt-xl-0">
                    <h3 class="mb-1"><span class="counter">45</span><span>k+</span></h3>
                    <span class="subtitle">Total Kilometer</span>
                </div>
            </div>
            <div class="countdown-box d-xl-flex text-center text-xl-start align-items-center">
                <span
                    class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary"><i
                        class="flaticon-drive"></i></span>
                <div class="countdown-box-content ms-xl-3 mt-3 mt-xl-0">
                    <h3 class="mb-1"><span class="counter">50</span><span>+</span></h3>
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
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-6">
                    <div class="video-content text-center">
                        <a href="https://www.youtube.com/watch?v=6WZOxnYi4Cs"
                            class="video-popup-btn bg-primary  text-white"><i class="fa-solid fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--feedback section end-->


<!-- brand logo -->
<div class="slider">
    <div class="slide-track">
        <div class="slide">
            <img class="brand-logo-img" src="https://cdn.freebiesupply.com/logos/thumbs/2x/mcdonalds-black-logo.png"
                alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img"
                src="https://cdn.freebiesupply.com/images/large/2x/starbucks-logo-black-and-white.png" alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img"
                src="https://cdn.freebiesupply.com/logos/large/2x/general-electric-black-logo-png-transparent.png"
                alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img" src="https://cdn.freebiesupply.com/logos/large/2x/nfl-logo-png-transparent.png"
                alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img"
                src="https://cdn.freebiesupply.com/logos/large/2x/mercedes-benz-6-logo-png-transparent.png" alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img"
                src="https://cdn.freebiesupply.com/logos/large/2x/hogwarts-logo-png-transparent.png" alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img" src="https://cdn.freebiesupply.com/logos/thumbs/2x/mcdonalds-black-logo.png"
                alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img"
                src="https://cdn.freebiesupply.com/images/large/2x/starbucks-logo-black-and-white.png" alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img"
                src="https://cdn.freebiesupply.com/logos/large/2x/general-electric-black-logo-png-transparent.png"
                alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img" src="https://cdn.freebiesupply.com/logos/large/2x/nfl-logo-png-transparent.png"
                alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img"
                src="https://cdn.freebiesupply.com/logos/large/2x/mercedes-benz-6-logo-png-transparent.png" alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img"
                src="https://cdn.freebiesupply.com/logos/large/2x/hogwarts-logo-png-transparent.png" alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img" src="https://cdn.freebiesupply.com/logos/thumbs/2x/mcdonalds-black-logo.png"
                alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img"
                src="https://cdn.freebiesupply.com/images/large/2x/starbucks-logo-black-and-white.png" alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img"
                src="https://cdn.freebiesupply.com/logos/large/2x/general-electric-black-logo-png-transparent.png"
                alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img" src="https://cdn.freebiesupply.com/logos/large/2x/nfl-logo-png-transparent.png"
                alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img"
                src="https://cdn.freebiesupply.com/logos/large/2x/mercedes-benz-6-logo-png-transparent.png" alt="">
        </div>
        <div class="slide">
            <img class="brand-logo-img"
                src="https://cdn.freebiesupply.com/logos/large/2x/hogwarts-logo-png-transparent.png" alt="">
        </div>
    </div>
</div>

<!-- brand logo -->
@endsection