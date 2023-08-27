<template>
    <main>
        <!--Start Shop Details Breadcrumb-->
        <div class="shop-details-breadcrumb wow fadeInUp animated overflow-hidden ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="shop-details-inner">
                            <ul class="shop-details-menu">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Shop Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Shop Details Breadcrumb-->
        <!--Start Shop Details Top-->
        <section class="shop-details-top two ">
            <div class="container">
                <div class="row mt--30">
                    <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">
                        <div class="shop-details-top-right ">
                            <div class="shop-details-top-right-content-box">
                                <div class="shop-details-top-title">
                                    <h3>Gold Diamond Bracelet</h3>
                                </div>
                                <div class="shop-details-top-price-box">
                                    <h3>$30.00</h3>
                                </div>
                                <div class="product-quantity">
                                    <h4>Quantity</h4>
                                    <div class="product-quantity-box d-flex align-items-center flex-wrap">
                                        <div class="qty mr-2">
                                            <div class="qtySelector text-center"> <span class="decreaseQty"><i
                                                        class="flaticon-minus"></i> </span> <input type="number"
                                                    class="qtyValue" value="1" /> <span class="increaseQty"> <i
                                                        class="flaticon-plus"></i> </span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-details-top-social-box" style="padding-top: 15px;">
                                    <p>Share:</p>
                                    <ul class="ps-1 social_link d-flex align-items-center">
                                        <li><a href="https://www.facebook.com/" class="active" target="_blank"><i
                                                    class="flaticon-facebook-app-symbol"></i></a> </li>
                                        <li> <a href="https://www.youtube.com/" target="_blank"><i
                                                    class="flaticon-youtube"></i></a> </li>
                                        <li> <a href="https://twitter.com/" target="_blank"><i
                                                    class="flaticon-twitter"></i></a> </li>
                                        <li> <a href="https://www.instagram.com/" target="_blank"><i
                                                    class="flaticon-instagram"></i></a> </li>
                                    </ul>
                                </div>
                                <div class="shop-details-top-buy-now-btn"> 
                                    <a href="#" class="btn--primary">Buy It Now</a> 
                                </div>
                                <ul class="shop-details-top-category-tags">
                                    <li>Category: <span>Gold Diamond</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>
<script>
export default{
    name: 'App',
    mounted() {
       this.getBill()
    },

    data() {
        return {
            tikets: null,
        }
    },

    methods: {
        getBill(id){
            this.axios.get(`http://127.0.0.1:8000/api/tiket/${this.$route.params.id}`)
            .then( res => {
                this.tikets = res.data.data
                console.log(res);
            })
        },
    }
}
</script>