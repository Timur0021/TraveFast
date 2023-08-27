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
    <!-- HEADER -->
        <!-- header-default start -->
        <header class="header-style-3">
            <!-- Start Desktop Menu -->
            <div class="menubox">
                <div class="top-info d-flex">
                    <div class="container">
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
                <div class="container-fluid">
                    <div class="row d-lg-none d-block">
                        <div class="mobile-menu ">
                            <div class="mobile-menu__menu-top border-bottom-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="menu-info d-flex justify-content-between align-items-center">
                                            <div class="menubar"> <span></span> <span></span> <span></span> </div> <a
                                                href="index.html" class="logo"> <img src="assets/images/logo/logos.png"
                                                    alt=""> </a>
                                            <div class="cart-holder">
                                                <a href="#0" class="cart cart-icon position-relative">
                                                    <i class="flaticon-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-closer"></div>
                            <div class="mobile-menu__sidebar-menu">
                                <div class="menu-closer two"> <span> Close Menu</span> <span class="cross"><i
                                            class="flaticon-cross"></i></span> </div>
                                <div class="search-box-holder">
                                    <form action="#0">
                                        <div class="form-group search-box menu"> 
                                            <input type="text" class="form-control" placeholder="Search for products"> 
                                            <span class="search-icon"> 
                                                <i class="flaticon-magnifying-glass"></i> 
                                            </span> 
                                        </div>
                                    </form>
                                </div>
                                <ul class="page-dropdown-menu">
                                    <li class="dropdown-list"> 
                                        <a href="#0"> 
                                            <span>Pages</span> 
                                            <span class="menuarrow"> 
                                                <i class="flaticon-next-1"></i> 
                                            </span> 
                                        </a>
                                        <ul class=" dropdown ">
                                            <li><a href="about-us.html"> About Us </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact </a></li>
                                    <li><a href="login.html">Login </a></li>
                                    <li><a href="register.html">Register </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-block d-none">
                        <div class="row g-0 position-relative">
                            <div class="col-lg-3 d-flex align-items-center justify-content-center border-rit ">
                                <div class="logo"> 
                                    <a href="index.html"> 
                                        <img src="assets/images/logo/logos.png" alt=""> 
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9 g-0 p-0">
                                <div class="border-one"> </div>
                                <div class="row g-0 holder">
                                    <div class="col-12">
                                        <div class="mega-menu-default mega-menu d-lg-block d-none">
                                            <div class=" d-flex align-items-center justify-content-between ">
                                                <nav>
                                                    <ul class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                                        <li class="dropdown-list"> 
                                                            <a href="#0"> 
                                                                <span>
                                                                    Купити 
                                                                </span> 
                                                                <span class="menuarrow"> 
                                                                    <i class="flaticon-down-arrow"></i>
                                                                </span> 
                                                            </a>
                                                            <ul class="dropdown">
                                                                <li>
                                                                    <a href="{{ route('user.main.main') }}">
                                                                        Квитки
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('user.card.creditka') }}">
                                                                        Кардкі
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-list"> 
                                                            <a href="#0"> 
                                                                <span>Інформація </span> 
                                                                <span class="menuarrow"> 
                                                                    <i class="flaticon-down-arrow"></i>
                                                                </span> 
                                                            </a>
                                                            <ul class="dropdown">
                                                                <li><a href="about-us.html">Про нас </a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-list"> <a href="contact.html">Контакти</a> </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-content-closer"></div>
            <div class="sidebar-content">
                <div class="sidebar-widget-container">
                    <div class="widget-heading d-flex justify-content-end align-content-center"> 
                        <span class="close-side-widget">X</span> 
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="content-box">
                                    <h4>About Us</h4>
                                    <div class="inner-text">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                        </p>
                                    </div>
                                </div>
                                <div class="form_inner">
                                    <h4>Support</h4>
                                    <form action="index.html" method="post">
                                        <div class="form-group mt-4"> 
                                            <input type="text" name="name" placeholder="Name" required=""> 
                                        </div>
                                        <div class="form-group mt-4"> 
                                            <input type="email" name="email" placeholder="Email" required=""> 
                                        </div>
                                        <div class="form-group mt-4"> 
                                            <textarea name="message" placeholder="Message..."></textarea> 
                                        </div>
                                        <div class="form-group message-btn mt-4"> 
                                            <button type="submit" class="btn--secondary"> 
                                                <span class="txt">Submit Now</span> 
                                            </button> 
                                        </div>
                                    </form>
                                </div>
                                <div class="sidebar-contact-info">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li> 
                                            <span class="flaticon-pin-1"></span> 
                                            New York, United States 
                                        </li>
                                        <li> 
                                            <span class="flaticon-telephone"></span> 
                                            <a href="tel:+44203700001">
                                                +44 123 456 789
                                            </a> 
                                        </li>
                                        <li> 
                                            <span class="flaticon-mail"></span> 
                                            <a href="mailto:info@example.com">info@example.com</a> 
                                        </li>
                                    </ul>
                                </div>
                                <div class="thm-medio-boxx1">
                                    <ul class="social-box">
                                        <li class="facebook"> 
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <i class="flaticon-facebook-app-symbol"></i>
                                            </a> 
                                        </li>
                                        <li class="twitter"> 
                                            <a href="https://twitter.com/" target="_blank">
                                                <i class="flaticon-twitter"></i>
                                            </a> 
                                        </li>
                                        <li class="instagram"> 
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <i class="flaticon-instagram"></i>
                                            </a> 
                                        </li>
                                        <li class="youtube"> 
                                            <a href="https://www.youtube.com/" target="_blank">
                                                <i class="flaticon-youtube"></i>
                                            </a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </header>
    <!--HEADER-->
    <div id="app"></div>

     
  <!-- APP.JS -->
  <script src="{{ asset('assets/js/app.js') }}"></script>
  <!-- jQuery -->
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
</body>
</html>