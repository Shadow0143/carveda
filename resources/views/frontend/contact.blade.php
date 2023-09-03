@extends('layouts.frontend.app')
@section('title')
<title>Carveda || Contact</title>
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
                    <h1 class="text-white">Get In Touch</h1>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item  text-white fw-500">Home </li>
                        <li class="breadcrumb-item  text-white fw-500"> /</li>
                        <li class="breadcrumb-item text-white fw-500">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end-->

<!--contact section start-->
<section class="contact-section ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="contact-form-area bg-white rounded">
                    <h4 class="mb-3">Need Help? Send Message</h4>
                    <p class="mb-4">Monotonectally pursue e-business sources whereas end-to-end applications. Holisticly
                    </p>
                    <form action="{{ route('submitContact') }}" class="ct-form-wrapper" method="post">
                        @csrf
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="input-field">
                                    <label class="fw-semibold text-secondary mb-1">Name</label>
                                    <input type="text" placeholder="Full Name" class="border w-100 rounded" name="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-field">
                                    <label class="fw-semibold text-secondary mb-1">Email</label>
                                    <input type="email" placeholder="Email" class="border w-100 rounded" name="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-field">
                                    <label class="fw-semibold text-secondary mb-1">Phone</label>
                                    <input type="tel" placeholder="Mobile Number" class="border w-100 rounded"
                                        name="phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-field">
                                    <label class="fw-semibold text-secondary mb-1">Service</label>
                                    <select class="form-select" name="services">
                                        <option value="">Select Service</option>
                                        @foreach ($contactService as $key=>$val )
                                        <option value="{{ $val->title }}">{{ $val->title }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-field">
                                    <label class="fw-semibold text-secondary mb-1">Message</label>
                                    <textarea placeholder="Message" class="border w-100 rounded" rows="5"
                                        name="message"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-md mt-4" type="submit">Get in Touch</button>
                    </form>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="contact-sidebar-widget py-5 px-4 bg-white rounded mt-5 mt-xl-0">
                    <h4 class="mb-4">Contact Details</h4>
                    <ul class="fs-md">
                        <li class="fw-500"><strong class="fw-bold text-secondary">Office Address-1: </strong>Carveda
                            Agency ( Bokaro Steel City ) Jharkhand, India.</li>

                    </ul>
                    <hr class="mt-4 mb-4">
                    <ul class="contact-info">
                        <li class="d-flex align-items-center">
                            <span
                                class="icon-wrapper d-flex align-items-center justify-content-center rounded bg-light-primary rounded-circle flex-shrink-0"><i
                                    class="fa-brands fa-whatsapp"></i></span>
                            <div class="ms-3 info-content">
                                <span class="d-block">Emergency Call:</span>
                                <a href="tel:905431478798">+91 54 3147 8789</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span
                                class="icon-wrapper d-flex align-items-center justify-content-center rounded bg-light-primary rounded-circle flex-shrink-0"><i
                                    class="fa-regular fa-envelope"></i></span>
                            <div class="ms-3 info-content">
                                <span class="d-block">General communication</span>
                                <a href="maito:carveda@gmail.com">carveda@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                    <hr class="mt-30 mb-40">
                    <h6 class="mb-3">Social Share</h6>
                    <div class="contact-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-dribbble "></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--contact section end-->
@endsection