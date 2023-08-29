@extends('layouts.frontend.app')
@section('title')
<title>Login || Carveda </title>
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
                    <h1 class="text-white">Login</h1>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item  text-white fw-500">Home </li>
                        <li class="breadcrumb-item  text-white fw-500"> /</li>
                        <li class="breadcrumb-item text-white fw-500">Login</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end-->

<!--login section-->
<section class="login-section ptb-120 position-relative z-1 overflow-hidden mb-5">
    <span class="bg-primary-blur position-absolute z--1 start-50 top-0 tarnslate-middle-x"></span>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-xxl-4">
                <div class="login-form-area">
                    <h2 class="mb-5">Hey there!<br>Welcome back.</h2>
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <label class="fw-semibold text-secondary mb-2">Email ID</label>
                        <input type="email" name="email" placeholder="Enter your Email"
                            class="w-100 rounded @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <!-- <a href="{{route('password.request')}}">
                            <small>Forgot Password?</small>
                        </a> -->

                        <label class="fw-semibold text-secondary mb-2 mt-4">Password</label>
                        <input type="password" name="password" placeholder="Enter your password"
                            class="w-100 rounded @error('password') is-invalid @enderror" required
                            autocomplete="current-password" aria-describedby="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror



                        <div class="cookies-area d-flex align-items-center flex-wrap justify-content-between mt-3">
                            <label><input type="checkbox" class="me-1">Remember Me</label>

                        </div>
                        <div class="login-btns d-flex align-items-center flex-wrap flex-sm-nowrap mt-40">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                        <p class="text-xl-center mt-4">Don't have an account? <a href="{{ route('register') }}"> Sign
                                Up</a></p>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 offset-xl-2 d-none d-lg-flex mt-5">
                <div class="login-form-right position-relative z-1 mt-5 mt-xl-0">
                    <img src="{{ asset('frontend/assets/img/home1/footer-car-2.png') }}" alt="not found"
                        class="img-fluid" style="height: 300px;">

                </div>
            </div>
        </div>
    </div>
</section>
@endsection