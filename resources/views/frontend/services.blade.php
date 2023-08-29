@extends('layouts.frontend.app')
@section('title')
<title>Carveda || Service </title>
@endsection
@section('content')
<!--breadcrumb section start-->
<section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75 "
    data-background="assets/img/shapes/texture-bg.png" style="margin-top: -100px;">
    <img src="{{ asset('frontend/assets/img/shapes/tire-print-left.png') }}" alt="tire print"
        class="position-absolute start-0 z-1 tire-print">
    <img src="{{ asset('frontend/assets/img/shapes/tire-print-right.png') }}" alt="tire print"
        class="position-absolute end-0 z-1 tire-print">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                    <h1 class="text-white">Our Services</h1>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item  text-white fw-500">Home </li>
                        <li class="breadcrumb-item  text-white fw-500"> /</li>
                        <li class="breadcrumb-item text-white fw-500">Service</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end-->



<!--brands section start-->
<section class="brands-section pt-20 mb-50 mt-5" id="brands">
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

                        @foreach ($services as $key=>$val)
                        <div class="ct-col">
                            <div class="brand-card text-center bg-white position-relative rounded">
                                <img src="{{ asset('category') }}/{{ $val->image }}" alt="{{ $val->title }}"
                                    class="img-fluid icon-black" />
                                <img src="{{ asset('category') }}/{{ $val->image }}" alt="{{ $val->title }}"
                                    class="img-fluid icon-red" />
                                <h5 class="mt-3 mb-0">{{ $val->title }}</h5>
                                <a href="{{ route('servicesDetails', ['slug' => $val->title]) }}"
                                    class="explore-btn position-absolute text-white"><i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!--brands section end-->




<!--about section start-->
<section class="about-section pt-60  bg-primary-light position-relative z-1 overflow-hidden"
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

<!--apps section start-->
<section class="apps-section ptb-120">
    <div class="container">
        <div class="apps-content-wrapper position-relative z-1 overflow-hidden rounded">
            <img src="{{ asset('frontend/assets/img/shapes/apps-bg-shape.png') }}" alt="not found"
                class="position-absolute z--1 end-0 top-0">
            <div class="row">
                <div class="col-xxl-5 col-xl-6">
                    <div class="apps-left">
                        <h2 class="h1 mb-3">Carveda User Friendly App Available</h2>
                        <p class="mb-0">Appropriately monetize one-to-one interfaces rather than cutting-edge
                            Competently disinte rmediate backward.</p>
                        <div class="apps-btn-group mt-40 d-flex align-items-center flex-wrap">
                            <a href="#" class="app-btn primary-btn d-inline-flex align-items-center">
                                <span class="icon-wrapper me-2"><i class="fa-brands fa-google-play"></i></span>
                                <div class="app-btn-content">
                                    <span>Get it on</span>
                                    <strong>Google Play</strong>
                                </div>
                            </a>
                            <a href="#" class="app-btn white-btn d-inline-flex align-items-center">
                                <span class="icon-wrapper me-2"><i class="fa-brands fa-apple"></i></span>
                                <div class="app-btn-content">
                                    <span>Get it on</span>
                                    <strong>App Store</strong>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6 align-self-end">
                    <div class="apps-right position-relative z-1 mt-60 mt-xl-0">
                        <button class="bg-white wallet-btn shadow rounded-circle text-primary position-absolute"><i
                                class="fa-solid fa-wallet"></i></button>
                        <button class="bg-white heart-btn shadow rounded-circle text-primary position-absolute"><i
                                class="fa-solid fa-heart"></i></button>

                        <img src="{{ asset('frontend/assets/img/home1/apps-bg.png') }}" alt="car" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--apps section end-->
@endsection