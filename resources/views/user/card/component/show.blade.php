<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title For This Document -->
    <title> TRAVELIST </title>
    <!-- Favicon For This Document -->
    <link rel="shortcut icon" href="assets/images/logo/favicon-32x32.png" type="image/x-icon">
    <!-- Google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/images/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/nice-select.v1.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/animate.css') }}">
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
            <div class="mobile-menu d-lg-none d-block">
                <div class="menu-closer"></div>
                <div class="mobile-menu__sidebar-menu">
                    <div class="menu-closer two"> <span> Close Menu</span> <span class="cross"><i
                                class="flaticon-cross"></i></span> </div>
                    <div class="search-box-holder">
                        <form action="#0">
                            <div class="form-group search-box menu"> <input type="text" class="form-control"
                                    placeholder="Search for products"> <span class="search-icon"> <i
                                        class="flaticon-magnifying-glass"></i> </span> </div>
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
                    </div>
                </div>
            </div>
            <div class="mega-menu-default mega-menu d-lg-block d-none">
                <div class="container position-relative">
                    <div class="row">
                        <nav>
                            <ul class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                <li class="dropdown-list"> 
                                    <a href="{{ route('user.card.creditka') }}"> 
                                        <span>Головна</span> 
                                    </a>
                                </li>
                                <li class="dropdown-list"> 
                                    <a href="contact.html">
                                        Контакти
                                    </a> 
                                </li>
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
    <!--MAIN-->
    <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-5">На балансі: ${{$creditka->balance}}</h1>
        </div>
    </div>
    <div class="card-body table-responsive" style="padding: 5rem;">
        <table class="table table-hover text-nowrap" style="background-color: whitesmoke;">
          <tbody>
            <tr>
                <td>ID</td>
                <td>{{$creditka->id}}</td>
            </tr>
            <tr>
                <td>Number</td>
                <td>{{$creditka->number}}</td>
            </tr>
            <tr>

                <th>Balance</th>
                <td>{{$creditka->balance}}</td>
            </tr>
            <tr>
                <td>Number</td>
                <td>{{$creditka->cvc}}</td>
            </tr>
            <tr>
                <td>Number</td>
                <td>{{$creditka->data}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    <!--MAIN-->

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