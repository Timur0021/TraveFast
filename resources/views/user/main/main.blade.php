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
    <header class="header-default">
        <!-- Start Desktop Menu -->
        <div class="menubox">
            <div class="top-info d-flex">
                <div class="container">
                    <div class="row g-0 ">
                        <div class="col-12">
                            <div class="top-info__top-content d-flex align-items-center justify-content-between">
                                <div class="medio-boxx">
                                    <ul>
                                        <li> 
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <i class="flaticon-facebook-app-symbol"></i>
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="https://www.youtube.com/" target="_blank">
                                                <i class="flaticon-youtube"></i>
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="https://twitter.com/" target="_blank">
                                                <i class="flaticon-twitter"></i>
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <i class="flaticon-instagram"></i>
                                            </a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu d-lg-none d-block">
                <div class="menu-closer"></div>
                <div class="mobile-menu__sidebar-menu">
                    <div class="menu-closer two"> 
                        <span> Close Menu</span> 
                        <span class="cross">
                            <i class="flaticon-cross"></i>
                        </span> 
                    </div>
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
                                <span>Home </span> 
                                <span class="menuarrow"> 
                                    <i class="flaticon-next-1"></i> 
                                </span> 
                            </a>
                        </li>
                        <li class="dropdown-list"> 
                            <a href="#0"> 
                                <span>Features </span> 
                                <span class="menuarrow"> 
                                    <i class="flaticon-next-1"></i> 
                                </span> 
                            </a>
                            <ul class="dropdown">
                                <li class="subhed position-relative"> 
                                    <a href="#0"> 
                                        <span>Category</span> 
                                        <span class="menuarrowtwo"> 
                                            <i class="flaticon-next-1"></i> 
                                        </span> 
                                    </a>
                                    <ul class="subdropdown">
                                        <li> 
                                            <a href="shop-grid.html">Квитки</a> 
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact </a></li>
                        <li><a href="login.html">Login </a></li>
                        <li><a href="register.html">Register </a></li>
                    </ul>
                </div>
            </div>
            <div class="main-menu">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-4 text-start">
                            <div class="left d-lg-block d-none ">
                                <div class="search-box-holder">
                                    <form action="#0">
                                        <div class="form-group search-box menu"> <input type="text" class="form-control"
                                                placeholder="Search for products"> <span class="search-icon"> <i
                                                    class="flaticon-magnifying-glass"></i> </span> </div>
                                    </form>
                                </div>
                            </div>
                            <div class="right d-lg-none d-block">
                                <ul class="main-menu__widge-box d-flex align-items-center ">
                                    <li class="menubar"> <span></span> <span></span> <span></span> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="middle"> <a href="index.html" class="logo"> <img
                                        src="assets/images/logo/logo.png" alt=""> </a> </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="right d-flex align-items-center justify-content-end">
                                <ul class="main-menu__widge-box d-flex align-items-center ">
                                    <li class="d-lg-block d-none"><a href="my-account.html"><i
                                                class="flaticon-user"></i> </a></li>
                                    <li class="d-lg-block d-none"><a href="wishlist.html" class="number"> <i
                                                class="flaticon-heart"></i> </a> </li>
                                    <li class="cartm"> <a href="#0" class="number cart-icon"> <i
                                                class="flaticon-shopping-cart"></i><span class="count">(5)</span> </a>
                                    </li>
                                    <li class="menubar d-lg-block d-none"> <span></span> <span></span> <span></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mega-menu-default mega-menu d-lg-block d-none">
                <div class="container position-relative">
                    <div class="row">
                        <nav>
                            <ul class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                <li class="dropdown-list"> 
                                    <a href="{{ route('user.index') }}"> 
                                        <span>
                                            Home
                                        </span>
                                    </a>
                                </li>
                                <li class="dropdown-list"> 
                                    <a href="#0"> 
                                        <span>Shop </span> 
                                        <span class="menuarrow"> 
                                            <i class="flaticon-down-arrow"></i> 
                                        </span> 
                                    </a>
                                    <ul class="dropdown">
                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-list"> <a href="contact.html">Contact</a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticy-header">
            <div class="mobile-menu d-lg-none d-block ">
                <div class="mobile-menu__menu-top border-bottom-0">
                    <div class="container ">
                        <div class="row">
                            <div class="menu-info d-flex justify-content-between align-items-center">
                                <div class="menubar"> <span></span> <span></span> <span></span> </div> <a
                                    href="index.html" class="logo"> <img src="assets/images/logo/logo.png" alt=""> </a>
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
        </div>
        <div class="side-cart-closer"></div>
        <div class="side-cart d-flex flex-column justify-content-between">
            <div class="top">
                <div class="content d-flex justify-content-between align-items-center">
                    <h6 class="text-uppercase">Кошик</h6> <span class="cart-close text-uppercase">X</span>
                </div>
                <div  class="cart_items">
                    <div class="items d-flex justify-content-between align-items-center">
                        @foreach ($tiket as $tikets)
                        <div class="left d-flex align-items-center"> 
                            <a href="shop-details-1.html" class="thumb d-flex justify-content-between align-items-center"> 
                                <img src="{{$tikets->image_url}}" alt=""> </a>
                            <div class="text"> 
                                <a href="shop-details-1.html">
                                    <h6>{{$tikets->title}}</h6>
                                </a>
                                <p>
                                    <span>${{$tikets->price}}</span> 
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="button-box d-flex justify-content-between"> <a href="{{ route('user.card.card') }}" class="btn_black"> View Cart
                    </a> <a href="{{ route('user.card.card') }}" class="button-2 btn_theme"> Chekout </a> </div>
            </div>
        </div>
        <div class="sidebar-content-closer"></div>
        <div class="sidebar-content">
            <div class="sidebar-widget-container">
                <div class="widget-heading d-flex justify-content-end align-content-center"> <span
                        class="close-side-widget">X</span> </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo"> <a href="index.html"><img src="assets/images/logo/logo-2.png" alt=""></a>
                            </div>
                            <div class="content-box">
                                <h4>About Us</h4>
                                <div class="inner-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                </div>
                            </div>
                            <div class="form_inner">
                                <h4>Support</h4>
                                <form action="index.html" method="post">
                                    <div class="form-group mt-4"> <input type="text" name="name" placeholder="Name"
                                            required=""> </div>
                                    <div class="form-group mt-4"> <input type="email" name="email" placeholder="Email"
                                            required=""> </div>
                                    <div class="form-group mt-4"> <textarea name="message"
                                            placeholder="Message..."></textarea> </div>
                                    <div class="form-group message-btn mt-4"> <button type="submit"
                                            class="btn--secondary"> <span class="txt">Submit Now</span> </button> </div>
                                </form>
                            </div>
                            <div class="sidebar-contact-info">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li> <span class="flaticon-pin-1"></span> New York, United States </li>
                                    <li> <span class="flaticon-telephone"></span> <a href="tel:+44203700001">+44 123 456
                                            789</a> </li>
                                    <li> <span class="flaticon-mail"></span> <a
                                            href="mailto:info@example.com">info@example.com</a> </li>
                                </ul>
                            </div>
                            <div class="thm-medio-boxx1">
                                <ul class="social-box">
                                    <li class="facebook"> <a href="https://www.facebook.com/" target="_blank"><i
                                                class="flaticon-facebook-app-symbol"></i></a> </li>
                                    <li class="twitter"> <a href="https://twitter.com/" target="_blank"><i
                                                class="flaticon-twitter"></i></a> </li>
                                    <li class="instagram"> <a href="https://www.instagram.com/" target="_blank"><i
                                                class="flaticon-instagram"></i></a> </li>
                                    <li class="youtube"> <a href="https://www.youtube.com/" target="_blank"><i
                                                class="flaticon-youtube"></i></a> </li>
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
       <!--==== Js Scripts Start ====-->
    <!-- Jquery v3.6.0 Js -->
    <script src="{{asset('assets/js/jqurey.v3.6.0.min.js')}}"></script> <!-- Popper v2.9.3 Js -->
    <script src="{{asset('assets/js/popper.v2.9.3.min.js')}}"></script> <!-- Bootstrap v5.1.1 js -->
    <script src="{{asset('assets/js/bootstrap.v5.1.1.min.js')}}"></script> <!-- jquery ui js -->
    <script src="{{asset('assets/js/plugin/jquery-ui.min.js')}}"></script> <!-- Parallax js -->
    <script src="{{asset('assets/js/plugin/jarallax.min.js')}}"></script> <!-- Slick Slider Js -->
    <script src="{{asset('assets/js/plugin/slick.min.js')}}"></script> <!-- isotope Js -->
    <script src="{{asset('assets/js/plugin/isotope.js')}}"></script> <!-- magnific-popup v2.3.4 Js -->
    <script src="{{asset('assets/js/plugin/jquery.magnific-popup.min.js')}}"></script> <!-- Tweenmax v2.3.4 Js -->
    <script src="{{asset('assets/js/plugin/tweenMax.min.js')}}"></script> <!-- Nice Select Js -->
    <script src="{{asset('assets/js/plugin/nice-select.v1.0.min.js')}}"></script> <!-- Wow js -->
    <script src="{{asset('assets/js/plugin/wow.v1.3.0.min.js')}}"></script> <!-- Wow js -->
    <script src="{{asset('assets/js/plugin/jquery.countdown.min.js')}}"></script> <!-- Main js -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!--==== Js Scripts End ====-->
</body>
</html>