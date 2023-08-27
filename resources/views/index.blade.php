<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRAVELIST</title>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- FlatIcon Css -->
    <link rel="stylesheet" href="{{ asset('assets/images/fonts/flaticon.css') }}">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/slick.css') }}">
    <!--  Ui Tabs Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/jquery-ui.min.css') }}">
    <!-- Magnific-popup Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/magnific-popup.css') }}">
    <!-- Nice Select Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/nice-select.v1.0.css') }}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>

</head>

<body>
    <!--PRELOADER-->
    <div class="travel-loader"></div>
    <!--PRELOADER-->
    <!-- header-default start -->
    <header class="header-style-1">
        <!-- Start Desktop Menu -->
        <div class="menubox">
            <div class="top-info d-flex">
                <div class="container auto-container ">
                    <div class="row g-0 ">
                        <div class="col-12">
                            <div class="top-info__top-content d-flex align-items-center justify-content-between">
                                  <div class="medio-boxx">
                                    <ul>
                                        <li> <a href="https://www.facebook.com/" target="_blank"><i
                                                    class="flaticon-facebook-app-symbol"></i></a> </li>
                                        <li> <a href="https://www.youtube.com/" target="_blank"><i
                                                    class="flaticon-youtube"></i></a> </li>
                                        <li> <a href="https://twitter.com/" target="_blank"><i
                                                    class="flaticon-twitter"></i></a> </li>
                                        <li> <a href="https://www.instagram.com/" target="_blank"><i
                                                    class="flaticon-instagram"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu d-lg-none d-block ">
                <div class="mobile-menu__menu-top border-bottom-0">
                    <div class="container ">
                        <div class="row">
                            <div class="menu-info d-flex justify-content-between align-items-center">
                                <div class="menubar"> <span></span> <span></span> <span></span> </div> 
                                <a href="index.html"> <img src="{{asset('assets/images/logo/logos.png')}}" alt="">  </a>
                                <div class="cart-holder"> 
                                    <a href="#0" class="cart cart-icon position-relative">
                                     <i class="flaticon-shopping-cart"></i>
                                    </a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu p-0 border-bottom-0">
                <div class="mega-menu-default mega-menu d-lg-block d-none">
                    <div class="container auto-container position-relative">
                        <div class="row">
                            <div class=" d-flex align-items-center justify-content-between "> <a href="index.html"
                                    class="logo"> <img src="{{asset('assets/images/logo/logos.png')}}" style="width: 10rem;" alt=""> </a>
                                <nav>
                                    <ul class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                        <li class="dropdown-list"> 
                                            <a href="#0">
                                                Головна
                                            </a>
                                        </li>
                                        <li class="dropdown-list"> 
                                            <a href="{{ route('user.index') }}">
                                                Групи Квитків 
                                            </a>
                                        </li>
                                        <li class="dropdown-list"> 
                                            <a href="#0">
                                                Скарги
                                            </a> 
                                        </li>
                                        <li class="dropdown-list"> <a href="contact.html">Акції</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> 
    <main class="overflow-hidden">
        <!-- newsLetter_popup Start --> 
           <button data-mfp-src="#newsLetter-popup" class="modal-btn d-none"></button>
        <div id="newsLetter-popup" class="mfp-hide p-4" role="dialog">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="newsLetter-popup__thumb imgenews">
                         <img src="assets/images/home-two/products-v5-img24.png"  alt="newsletter"> </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-10">
                    <div class="newsLetter-popup__content">
                        <div class="text-center"> <a href="index.html" class="logo"> <img
                                    src="assets/images/logo/logo.png" alt="logo"> </a>
                            <h2> Join <span>with us.</span> </h2>
                            <p> Subscribe to receive news from Karte In a free hour </p>
                        </div>
                        <form action="#0" class="newsLetter-popup__subscrib-form">
                            <div class="input_box"> <input type="email" placeholder="Enter your email Address"
                                    name="email"> <button type="submit" class="subscribe_btn"> Submit </button> </div>
                            <div class="form-group "> <input type="checkbox" id="html"> <label for="html"> By providing
                                    my information, I agree to Karte <a href="#0"> Privacy Policy</a> and <a href="#0">
                                        Legal Statement</a> </label> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        <!--Start Testimonial Two-->
        <section class="testimonial-two pt-120 pb-120">
            <div class="container">
                <div class="section-header text-center wow fadeInUp animated">
                    <p>Testimonials</p>
                    <h2>Happy Client's</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12 wow fadeInUp animated">
                        <div class="testimonial-two__slider ">
                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__single-img"> <img
                                            src="assets/images/testimonial/testimonial-v2-1.png" alt="" /> </div>
                                    <div class="testimonial-two__single-content">
                                        <div class="text">
                                            <p>“Grow tactical "outside the box" thinking whereas principle entered
                                                internal or organic" sources”</p>
                                        </div>
                                        <div class="client-info"> <a href="#0">
                                                <h6>Lewis Roberts</h6>
                                            </a> <span>Founder</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Two Single-->
                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__single-img"> <img
                                            src="assets/images/testimonial/testimonial-v2-2.png" alt="" /> </div>
                                    <div class="testimonial-two__single-content">
                                        <div class="text">
                                            <p>“Grow tactical "outside the box" thinking whereas principle entered
                                                internal or organic" sources”</p>
                                        </div>
                                        <div class="client-info"> <a href="#0">
                                                <h6>Ted Martinez</h6>
                                            </a> <span>Founder</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Two Single-->
                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__single-img"> <img
                                            src="assets/images/testimonial/testimonial-v2-3.png" alt="" /> </div>
                                    <div class="testimonial-two__single-content">
                                        <div class="text">
                                            <p>“Grow tactical "outside the box" thinking whereas principle entered
                                                internal or organic" sources”</p>
                                        </div>
                                        <div class="client-info"> <a href="#0">
                                                <h6>Denise Mcgee</h6>
                                            </a> <span>Founder</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Two Single-->
                            <!--Start Testimonial Two Single-->
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two__single-img"> <img
                                            src="assets/images/testimonial/testimonial-v2-2.png" alt="" /> </div>
                                    <div class="testimonial-two__single-content">
                                        <div class="text">
                                            <p>“Grow tactical "outside the box" thinking whereas principle entered
                                                internal or organic" sources”</p>
                                        </div>
                                        <div class="client-info"> <a href="#0">
                                                <h6>Ted Martinez</h6>
                                            </a> <span>Founder</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Two Single-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Start Testimonial Two-->
        <!--Start Video One-->
        <section class="video-one pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-between flex-lg-row flex-column-reverse mt--30">
                    <div class="col-lg-6 mt-30">
                        <!--Start Video One Img-->
                        <div class="video-one__img wow fadeInLeft animated">
                            <div class="video-one__img-inner"> <img src="assets/images/home-two/video-v1-img1.jpg"
                                    alt="" />
                                <div class="icon wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <a class="video-popup" title="Video Gallery"
                                        href="ttps://www.youtube.com/watch?v=4DCTTrGjGU4"> <i class="flaticon-play"></i>
                                    </a> </div>
                            </div>
                        </div>
                        <!--End Video One Img-->
                    </div>
                    <div class="col-lg-6 mt-30 ">
                        <!--Start Video One Content-->
                        <div class="video-one__content">
                            <div class="section-header wow fadeInUp animated">
                                <p>Our Core Values</p>
                                <h2 class="t40">Live Peace, Smooth Comfort Safety Everything</h2>
                            </div>
                            <div class="video-one__content-list pt-2 wow fadeInUp animated">
                                <ul>
                                    <li> Super Easy To Maintenance Everything </li>
                                    <li> Luxurious Living Feeling For All </li>
                                    <li> Extra Comfort For Body </li>
                                    <li> More Effective Lifestyle For All </li>
                                </ul>
                            </div>
                            <div class="btn-box"> <a href="shop-grid-left-sidebar.html" class="btn--primary">Start
                                    Shopping</a> </div>
                        </div>
                        <!--End Video One Content-->
                    </div>
                </div>
            </div>
        </section>
        <!--End Video One-->
        <!--Start Blog Two-->
        <section class="blog-two pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-header text-center wow fadeInUp animated">
                            <p>Weekend Updates</p>
                            <h2>Latest Posts </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!--Start Blog Two Single-->
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated ">
                        <div class="blog-two__single mt-30"> 
                            <a href="blog-single.html" class="blog-two__single-img">
                                <img src="assets/images/blog/blog-v2-1.jpg" alt="" /> 
                            </a>
                            <div class="blog-two__single-content pt-1">
                                <div class="meta-box">
                                    <ul>
                                        <li>Vendora Style</li>
                                        <li>May 30, 2022</li>
                                    </ul>
                                </div>
                                <h5><a href="blog-single.html"> Perfect Drawing Room Identify Whole House.</a></h5>
                                <div class="btn-box"> <a href="blog-single.html">Read More</a> </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Two Single-->
                    <!--Start Blog Two Single-->
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated">
                        <div class="blog-two__single mt-30"> <a href="blog-single.html" class="blog-two__single-img">
                                <img src="assets/images/blog/blog-v2-2.jpg" alt="" /> </a>
                            <div class="blog-two__single-content pt-1">
                                <div class="meta-box">
                                    <ul>
                                        <li>Vendora Style</li>
                                        <li>Jun 21, 2022</li>
                                    </ul>
                                </div>
                                <h5><a href="blog-single.html"> It’s Time to Fall Love with Our Decor Items.</a></h5>
                                <div class="btn-box"> <a href="blog-single.html">Read More</a> </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Two Single-->
                    <!--Start Blog Two Single-->
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated">
                        <div class="blog-two__single mt-30"> <a href="blog-single.html" class="blog-two__single-img">
                                <img src="assets/images/blog/blog-v2-3.jpg" alt="" /> </a>
                            <div class="blog-two__single-content  pt-1">
                                <div class="meta-box">
                                    <ul>
                                        <li>Vendora Style</li>
                                        <li>July 21, 2022</li>
                                    </ul>
                                </div>
                                <h5><a href="blog-single.html">Exterior ideas: 10 colored garden seats. </a></h5>
                                <div class="btn-box"> <a href="blog-single.html">Read More</a> </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Two Single-->
                </div>
            </div>
        </section>
        <!--End Blog Two-->
        <!-- Partner Start -->
        <div class="partner-one">
            <div class="container wow fadeInUp animated">
                <div class="row wow fadeInUp animated">
                    <div class="partnerslider"> <a href="#0"
                            class="partner-one__brand d-flex justify-content-center align-items-center"> <img
                                src="assets/images/brand/brand-logo-1.png" alt=""> </a> <a href="#0"
                            class="partner-one__brand justify-content-center align-items-center"> <img
                                src="assets/images/brand/brand-logo-2.png" alt=""> </a> <a href="#0"
                            class="partner-one__brand justify-content-center align-items-center"> <img
                                src="assets/images/brand/brand-logo-3.png" alt=""> </a> <a href="#0"
                            class="partner-one__brand justify-content-center align-items-center"> <img
                                src="assets/images/brand/brand-logo-4.png" alt=""> </a> <a href="#0"
                            class="partner-one__brand justify-content-center align-items-center"> <img
                                src="assets/images/brand/brand-logo-5.png" alt=""> </a> <a href="#0"
                            class="partner-one__brand justify-content-center align-items-center"> <img
                                src="assets/images/brand/brand-logo-2.png" alt=""> </a> <a href="#0"
                            class="partner-one__brand justify-content-center align-items-center"> <img
                                src="assets/images/brand/brand-logo-3.png" alt=""> </a> <a href="#0"
                            class="partner-one__brand justify-content-center align-items-center"> <img
                                src="assets/images/brand/brand-logo-4.png" alt=""> </a> </div>
                </div>
            </div>
        </div> <!-- Partner End -->
    </main>
    <footer class="footer-default footer-style-1 overflow-hidden">
        <!--Start Footer-->
        <div class="footer-default__main-footer position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="company-info">
                                <div class="footer-logo"> <a href="index.html"> <img src="{{asset('assets/images/logo/logos.png')}}"
                                            alt=""> </a> </div>
                                <div class="text1">
                                    <p>Orchestrate maintainable mindshare through equity invested action items.
                                        Compellingly procrastinate...</p>
                                </div>
                                <div class="newsletter-bottom d-flex align-items-center">
                                    <ul class="footer__medio-boxx  medio-boxx  two d-flex align-items-center">
                                        <li><a href="https://www.facebook.com/" target="_blank" class="active"><i
                                                    class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="flaticon-youtube"></i> </a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="flaticon-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="flaticon-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="footer-title">
                                <h4> Useful Links </h4>
                            </div>
                            <ul class="footer-links">
                                <li><a href="my-account.html">Account</a></li>
                                <li><a href="login.html">Sign In</a></li>
                                <li><a href="cart.html">View Cart</a></li>
                                <li><a href="wishlist.html">My WishList</a></li>
                                <li><a href="compare.html">Compare Products</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="footer-title">
                                <h4> Information </h4>
                            </div>
                            <ul class="footer-links">
                                <li><a href="about-us.html">About us</a></li>
                                <li><a href="contact.html">Contact Us </a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="blog.html">Latest Posts</a></li>
                                <li><a href="order-track.html">Order Track</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="footer-title">
                                <h4> Office </h4>
                            </div>
                            <div class="footer-address-box ">
                                <div class="text1 pt-3">
                                    <p>29 Holles Place, Dublin 2 D02 YY46</p>
                                </div>
                                <div class="text2">
                                    <p>68 Jay Street, Suite 902 New Side <br> Brooklyn, NY 11201</p>
                                </div>
                                <div class="text3">
                                    <p>New York, United States</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- footer-bottom Footer-->
        <div class="footer_bottom position-relative">
            <div class="container">
                <div class="footer_bottom_content">
                    <div class="copyright wow fadeInUp animated">
                        <p>© 2022 <a href="index.html">TRAVELIST</a> All Rights Reserved.</p>
                    </div>
                    <div class="footer-payment wow fadeInUp animated"> <a href="#0"> <img
                                src="assets/images/payment_method/payment_1.png" alt="payment"> </a> <a href="#0"> <img
                                src="assets/images/payment_method/payment_2.png" alt="payment"> </a> <a href="#0"> <img
                                src="assets/images/payment_method/payment_3.png" alt="payment"> </a> <a href="#0"> <img
                                src="assets/images/payment_method/payment_4.png" alt="payment"> </a> </div>
                    <div class="footer-bottom-menu wow fadeInUp animated">
                        <ul class="d-flex align-items-center">
                            <li> <a href="contact.html">Sitemap</a> </li>
                            <li> <a href="contact.html">Terms of Service</a> </li>
                            <li> <a href="contact.html">Privacy Policy</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--==== Js Scripts Start ====-->
    <!-- Jquery v3.6.0 Js -->
    <script src="{{ asset('assets/js/jqurey.v3.6.0.min.js') }}"></script> 
    <script src="{{ asset('assets/js/popper.v2.9.3.min.js') }}"></script> 
    <script src="{{ asset('assets/js/bootstrap.v5.1.1.min.js') }}"></script> 
    <script src="{{ asset('assets/js/plugin/jquery-ui.min.js') }}"></script> 
    <script src="{{ asset('assets/js/plugin/jarallax.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugin/isotope.js')}}"></script> 
    <script src="{{ asset('assets/js/plugin/slick.min.js') }}"></script> 
    <script src="{{ asset('assets/js/plugin/jquery.magnific-popup.min.js') }}"></script> 
    <script src="{{ asset('assets/js/plugin/tweenMax.min.js')}}"></script> 
    <script src="{{ asset('assets/js/plugin/nice-select.v1.0.min.js') }}"></script> 
    <script src="{{ asset('assets/js/plugin/wow.v1.3.0.min.js') }}"></script> 
    <script src="{{ asset('assets/js/plugin/jquery.countdown.min.js') }}"></script> 
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!--==== Js Scripts End ====-->
</body>

</html>