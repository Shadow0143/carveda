@extends('layouts.frontend.app')
@section('title')
<title>Register || Carveda </title>
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
                    <h1 class="text-white">Registration</h1>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item  text-white fw-500">Home </li>
                        <li class="breadcrumb-item  text-white fw-500"> /</li>
                        <li class="breadcrumb-item text-white fw-500">Registration</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end-->

<!--register section-->
<section class="login-section ptb-120 position-relative z-1 overflow-hidden mb-5">
    <span class="bg-primary-blur position-absolute z--1 start-50 top-0 tarnslate-middle-x"></span>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-xxl-4">
                <div class="login-form-area">
                    <h2 class="mb-5">Hey there!<br>Registration Now.</h2>
                    <form class="login-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <label class="fw-semibold text-secondary mb-2">Name</label>
                        <input type="text" placeholder="Enter your Name"
                            class="w-100 rounded @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label class="fw-semibold text-secondary mb-2 mt-4">Email ID</label>
                        <input type="text" placeholder="Enter your Email ID"
                            class="w-100 rounded   @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror


                        <label class="fw-semibold text-secondary mb-2 mt-4">Mobile Number</label>
                        <input type="number" placeholder="Enter your Mobile Number"
                            class="w-100 rounded  @error('phone') is-invalid @enderror" name="phone"
                            value="{{ old('phone') }}" required autocomplete="phone">

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label class="fw-semibold text-secondary mb-2 mt-4">Password</label>
                        <input type="password" placeholder="Enter your password"
                            class="w-100 rounded  @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label class="fw-semibold text-secondary mb-2 mt-4">Confirm Password</label>
                        <input type="password" placeholder="Enter your password" class="w-100 rounded"
                            name="password_confirmation" required autocomplete="new-password">


                        <div class="login-btns d-flex align-items-center flex-wrap flex-sm-nowrap mt-40">
                            <button type="submit" class="btn btn-primary">Sign in</button>



                        </div>
                        <p class="text-xl-center mt-4">Don't have an account? <a href="{{ route('login') }}"> Login</a>
                        </p>
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
<!--register section end-->
@endsection