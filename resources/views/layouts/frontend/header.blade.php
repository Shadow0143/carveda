<!--header area start-->
<header class="header-style-one header-sticky">
    <div class="rent-header-info position-relative z-2 d-none d-lg-flex">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-4 col-6">
                    <div class="rent-hero-info-left d-flex align-items-center justify-content-between">
                        <div class="tp-info-wrapper d-flex align-items-center">
                            <div class="d-none tp-info d-xl-inline-flex align-items-center">
                                <span class="icon-wrapper me-2">
                                    <i class="fab fa-whatsapp"></i>
                                </span>
                                <p class="mb-0">
                                    <a href="https://wa.me/9508592006" target="_blank" class="text-dark">+90
                                        15464798487</a>
                                </p>
                            </div>
                            <div class="tp-info d-inline-flex align-items-center">
                                <span class="icon-wrapper me-2">
                                    <i class="flaticon-phone-call"></i>
                                </span>
                                <p class="mb-0">
                                    <a href="tel:+4733378901" target="_blank" class="text-dark">+90 15464798487</a>
                                </p>
                            </div>
                            <div class="d-none tp-info d-xl-inline-flex align-items-center">
                                <span class="icon-wrapper me-2">
                                    <i class="flaticon-email"></i>
                                </span>
                                <p class="mb-0">
                                    <a href="mailto:carveda@gmail.com" target="_blank"
                                        class="text-dark">carveda@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-8 col-6">
                    <div class="rent-info-social text-end d-none d-sm-block">
                        <div class="d-none tp-info d-xl-inline-flex align-items-center">
                            <span class="icon-wrapper me-2">
                                <i class="flaticon-location"></i>
                            </span>
                            <p class="mb-0">
                                <a href="#" class="text-dark">Bokaro steel city,Jharkhand</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-3 bg-white py-1 header-shadow header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-5">
                    <div class="logo-wrapper">
                        <a href="{{ route('welcome') }}" class="img-fluid"><img
                                src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo" style="height: 50px" /></a>
                    </div>
                </div>
                <div class="col-lg-9 col-7">
                    <div class="md-nav-wrapper d-flex align-items-center justify-content-end">
                        <nav class="at_nav_menu d-none d-xl-block md_menu_list">
                            <ul>
                                <li><a href="{{ route('welcome') }}"
                                        class="@if( Route::currentRouteName() == 'welcome' ) active @endif">Home</a>
                                </li>
                                <li><a href="{{ route('services') }}"
                                        class="@if( Route::currentRouteName() == 'services' ) active @endif">Service</a>
                                </li>
                                <li><a href="{{ route('blogs') }}"
                                        class="@if( Route::currentRouteName() == 'blogs' ) active @endif">Blog</a>
                                </li>
                                <li><a href="{{ route('work') }}"
                                        class="@if( Route::currentRouteName() == 'work' ) active @endif">Work</a>
                                </li>
                                <li><a href="{{ route('aboutUs') }}"
                                        class="@if( Route::currentRouteName() == 'aboutUs' ) active @endif">About
                                        Us</a></li>
                                <li><a href="{{ route('contact') }}"
                                        class="@if( Route::currentRouteName() == 'contact' ) active @endif">Contact
                                        Us</a></li>
                            </ul>
                        </nav>

                        @auth()
                        <a class="-none d-md-inline-block" href="#"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                        @endauth
                        @guest()
                        <a href="{{ route('login') }}" class="d-none d-md-inline-block"><span class="me-2"><i
                                    class="fa-solid fa-sign-in fa-2x"></i></span></a>
                        <button class="mobile-menu-toggle header-toggle-btn d-xl-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header area end-->

<!--mobile menu start-->
<div class="mobile-menu position-fixed bg-white deep-shadow">
    <button class="close-menu position-absolute">
        <i class="fa-solid fa-xmark"></i>
    </button>
    <a href="{{ route('welcome') }}" class="logo-wrapper bg-secondary d-block mt-4 p-3 rounded-1 text-center"><img
            src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo" class="img-fluid" style="height: 100px" /></a>
    <nav class="mobile-menu-wrapper mt-40">
        <ul>
            <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
            <li><a href="{{ route('services') }}">Service</a></li>
            <li><a href="{{ route('blogs') }}">Blog</a></li>
            <li><a href="{{ route('work') }}">Work</a></li>
            <li><a href="{{ route('aboutUs') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
    </nav>
</div>
<!--mobile menu end-->