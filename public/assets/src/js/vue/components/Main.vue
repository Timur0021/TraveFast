
<template>

<main class="overflow-hidden">
   
        <!-- features-catagory Start -->
        <section class="features-catagory pb-60">
            <div class="container-fluid">
                <div class="row">
                    <!--Start features-catagory Single-->
                    <div v-for="themes in theme"  class="col-xl-3 col-sm-6">
                        <div class="features-catagory-single mt-30 wow fadeInUp">
                            <div class="features-catagory-single-img"> 
                                <img :src="themes.image_url" alt="" />
                                <div class="overlay-text">
                                    <h3>Home Decor </h3>
                                    <div class="btn-box"> 
                                        <a href="shop-grid.html">
                                            Shop Now
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- features-catagory End-->
        <!-- core-features two Start -->
        <section class="core-features two pt-120 pb-120">
            <div class="container">
                <div class="row mt--30 justify-content-center">
                    <div class="col-xxl-3 col-md-6 col-10 mt-30 wow fadeInUp animated " data-wow-delay="0.2s">
                        <div class="core-features-two__box d-flex ms-0">
                            <div class="icon"> <img src="assets/images/icon/f-icon-1.png" alt=""> </div>
                            <div class="core-features-two__box-content"> <a href="register.html" class="d-block">
                                    <h4> Secure Payment </h4>
                                </a> <a href="register.html" class="more-info-btn"> <span> More Info </span> <i
                                        class="flaticon-next"></i> </a> </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 col-10 mt-30 wow fadeInUp animated " data-wow-delay="0.3s">
                        <div class="core-features-two__box d-flex ">
                            <div class="icon"> <img src="assets/images/icon/f-icon-2.png" alt=""> </div>
                            <div class="core-features-two__box-content"> <a href="register.html" class="d-block">
                                    <h4> 27/7 Fast Delivery </h4>
                                </a> <a href="register.html" class="more-info-btn"> <span> More Info </span> <i
                                        class="flaticon-next"></i> </a> </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 col-10 mt-30 wow fadeInUp animated " data-wow-delay="0.4s">
                        <div class="core-features-two__box d-flex ">
                            <div class="icon"> <img src="assets/images/icon/f-icon-3.png" alt=""> </div>
                            <div class="core-features-two__box-content"> <a href="register.html" class="d-block">
                                    <h4> Return & Refund </h4>
                                </a> <a href="register.html" class="more-info-btn"> <span> More Info </span> <i
                                        class="flaticon-next"></i> </a> </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 col-10 mt-30 wow fadeInUp animated " data-wow-delay="0.5s">
                        <div class="core-features-two__box d-flex me-0">
                            <div class="icon"> <img src="assets/images/icon/f-icon-4.png" alt=""> </div>
                            <div class="core-features-two__box-content"> <a href="register.html" class="d-block">
                                    <h4> Quality Support </h4>
                                </a> <a href="register.html" class="more-info-btn"> <span> More Info </span> <i
                                        class="flaticon-next"></i> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-default footer-style-1 overflow-hidden">
        <!--Start Footer-->
        <div class="footer-default__main-footer position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="company-info">
                                <div class="text1">
                                    <p>
                                        Orchestrate maintainable mindshare through equity invested action items.
                                        Compellingly procrastinate...
                                    </p>
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
</template>
<script>
export default{
    mounted() {
       this.getTheme()
    },
    data() {
        return {
            theme: []
        }
    },
    methods: {
        getTheme(){
            this.axios.get('http://127.0.0.1:8000/api/theme')
            .then( res => {
                this.theme = res.data.data
            })
        },
    }
}
</script>

