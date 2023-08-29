<!--footer section start-->
<footer class="footer-section">
    <div class="footer-wrapper  position-relative z-1 overflow-hidden">
        <div class="container">
            <div class="row justify-content-between">

                <a href="{{ route('welcome') }}" class="footer-logo d-inline-block mb-20"><img
                        src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo" style="height: 120px;"></a>

                <div class="col-xl-5 col-lg-5">
                    <div class="footer-widget widget-basic">
                        <div class="phone-box d-flex align-items-center">
                            <span
                                class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle bg-primary text-white"><i
                                    class="flaticon-phone-call"></i></span>
                            <h4 class="text-white ms-3 mb-0"><a href="tel:+978-9674-4455"
                                    class="text-white">+978-9674-4455</a></h4>
                        </div>
                        <div class="sb-form mt-40">
                            <h5 class="text-white mb-4">Get latest updates & offers</h5>
                            <form class="footer-sb-form position-relative" method="post"
                                action="{{ route('subscribe') }}">
                                @csrf

                                <input type="email" placeholder="Enter your email..." name="email" required
                                    class="bg-white w-100">
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="row align-items-center mt-5">

                        <div class="col-6">
                            <div class="text-start">
                                <div class="footer-social d-inline-block text-start">
                                    <h6 class="text-white">Follow us on</h6>
                                    <ul class="footer-social-list">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="footer-widget footer-nav-widget mb-5 mb-sm-0">
                                <h6 class="widget-title text-white mb-3">SERVICES</h6>
                                <ul class="footer-nav">
                                    <li><a href="#">PRODUCTS</a></li>
                                    <li><a href="#">DETAILING</a></li>
                                    <li><a href="#">PROTECTION</a></li>
                                    <li><a href="#">MAINTENANCE</a>
                                    <li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer-widget footer-nav-widget mb-5 mb-sm-0">
                                <h6 class="widget-title text-white mb-3">SUPPORT</h6>
                                <ul class="footer-nav">
                                    <li><a href="#">WARRANTY</a></li>
                                    <li><a href="#">APPOINTMENT</a></li>
                                    <li><a href="#">FAQ’S</a></li>
                                    <li><a href="#">HELP</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer-widget footer-nav-widget mb-5 mb-sm-0">
                                <h6 class="widget-title text-white mb-3">MEDIA</h6>
                                <ul class="footer-nav">
                                    <li><a href="#">GALLERY</a></li>
                                    <li><a href="#">BLOG</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <div class="copyright-text">
                            <p class="mb-0">&copy; All rights reserved. Designed by <a href="#">Labbayk Technologies</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="copyright-links text-start text-sm-end mt-1 mt-sm-0">
                            <a href="#">Terms of use</a>
                            <a href="#">Privacy policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer section end-->