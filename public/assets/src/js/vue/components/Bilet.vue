<style lang="scss">

</style>
<template>
       <main class="overflow-hidden ">
        <!--Start product-grid-->
        <div class="product-grid pt-60 pb-120">
            <div class="container">
                <div class="row gx-4">
                    <div class="col-xl-3 col-lg-4">
                        <div class="shop-grid-sidebar"> <button class="remove-sidebar d-lg-none d-block"> <i
                                    class="flaticon-cross"> </i> </button>
                            <div class="sidebar-holder">
                                <form action="#0" class="footer-default__subscrib-form m-0 p-0 wow fadeInUp animated">
                                    <div class="footer-input-box p-0 "> <input type="email" placeholder="Email address"
                                            name="email">  </div>
                                </form>
                                <div class="single-sidebar-box mt-30 wow fadeInUp animated ">
                                    <h4>Select Categories</h4>
                                    <div class="checkbox-item">
                                        <form>
                                            <div class="form-group"> 
                                                <input type="checkbox" id="bedroom"> 
                                                <label for="bedroom">Bedroom</label> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="row">
                            <div class="col-xl-12">
                                <div
                                    class="shop-grid-page-top-info p-0 justify-content-md-between justify-content-center">
                                    <div class="left-box wow fadeInUp animated">
                                        <p>Showing 1–12 of 50 Results</p>
                                    </div>
                                    <div
                                        class="right-box justify-content-md-between justify-content-center wow fadeInUp animated">
                                        <div class="short-by">
                                            <div class="select-box">
                                                <select class="wide">
                                                    <option data-display="Short by latest">Featured </option>
                                                    <option value="1">Best selling </option>
                                                    <option value="2">Alphabetically, A-Z</option>
                                                    <option value="3">Alphabetically, Z-A</option>
                                                    <option value="3">Price, low to high</option>
                                                    <option value="3">Price, high to low</option>
                                                    <option value="3">Date, old to new</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="product-view-style d-flex justify-content-md-between justify-content-center">  
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-grid-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-grid" type="button"
                                                        role="tab"  aria-selected="true">
                                                        <i class="flaticon-grid"></i>
                                                    </button> 
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                     <button class="nav-link"  id="pills-list-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-list" type="button" role="tab"
                                                         aria-selected="false">
                                                        <i class="flaticon-list"></i>
                                                    </button>
                                                 </li>
                                            </ul>
                                             <button class="slidebarfilter d-lg-none d-flex"><i  class="flaticon-edit"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                                        aria-labelledby="pills-grid-tab">
                                        <div class="row">
                                            <div v-for="tikets in tiket" class="col-xl-4 col-lg-6 col-6 " style="box-sizing:border-box; border-radius: 10px; background:whitesmoke;">
                                                <div class="products-three-single w-100  mt-30">
                                                    <div class="products-three-single-img"> 
                                                        <a href="#" class="d-block"> 
                                                            <img :src="tikets.image_url" class="first-img" alt="" /> 
                                                            <img :src="tikets.image_url" alt="" class="hover-img" />
                                                        </a>
                                                        <a @click.prevent="addToCard(tikets, true)" href="#" class="addcart btn--primary style2">
                                                            Add To Cart 
                                                        </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="wishlist.html"> 
                                                                        <i class="flaticon-heart"></i> 
                                                                        <span>
                                                                            wishlist
                                                                        </span> 
                                                                    </a> 
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html"> 
                                                                        <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            compare
                                                                        </span> 
                                                                    </a> 
                                                                </li>
                                                                <li>
                                                                    <a @click="getBill(tikets.id)" :href="`#popup${tikets.id}`" class="popup_link"> 
                                                                        <i class="flaticon-visibility"></i>
                                                                        <span> 
                                                                            quick view
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div :id="`popup${tikets.id}`" class="product-gird__quick-view-popup mfp-hide">
                                                        <div v-if="popupBill" class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tabb1">
                                                                                            <img :src="popupBill.image_url" alt="" /> 
                                                                                        </a> 
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tabb1"
                                                                                    class="tab-item popup-product-image">
                                                                                    <div
                                                                                        class="popup-product-single-image">
                                                                                        <img :src="popupBill.image_url"
                                                                                            alt="" /> </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3><strong>{{ popupBill.title }}</strong></h3>
                                                                        <div class="price">
                                                                            <h2> ${{ popupBill.price }}</h2>
                                                                            <h6><strong>В наявності: {{ popupBill.count }}шт</strong></h6>
                                                                        </div>
                                                                        <div class="add-product">
                                                                            <h6>Ціна:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty">
                                                                                        <i class="flaticon-minus"></i>
                                                                                    </span> 
                                                                                    <input type="number" class="qtyValue" value="1" />
                                                                                    <span class="increaseQty"> 
                                                                                        <i class="flaticon-plus"></i>
                                                                                    </span> 
                                                                                </div>
                                                                                <button @click.prevent="addToCard(tikets)" class="btn--primary ">
                                                                                    Add to Cart 
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> 
                                                                            <a href="#0"> 
                                                                                <img src="../../../../images/payment_method/method_1.png" alt=""> 
                                                                            </a>
                                                                            <a href="#0"> 
                                                                                <img src="../../../../images/payment_method/method_2.png" alt=""> 
                                                                            </a> 
                                                                            <a href="#0"> 
                                                                                <img src="../../../../images/payment_method/method_3.png" alt=""> 
                                                                                </a>
                                                                           </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> 
                                                        <h5>
                                                            <router-link :to="{name: 'tiket.show', params: {id: tikets.id}}"><strong style="text-decoration:underline;">{{ tikets.title }}</strong></router-link>
                                                        </h5>
                                                        <h5>
                                                            <a href="#"><strong>Транспорт:</strong>  {{ tikets.bus.name_bus }}</a>
                                                        </h5>
                                                        <h5>
                                                            <a href="#"><strong>Місто:</strong>  {{ tikets.city.name_city }}</a>
                                                        </h5>
                                                        <p><strong>Ціна:</strong> ${{ tikets.price }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End product-grid-->
    </main>
</template>
<script >
export default{
    mounted() {
       $(document).trigger('change')
       this.getBilet()
    },
    data() {
        return {
            tiket: [],
            popupBill: null,
        }
    },
    methods: {
        addToCard(tikets, isSingle){
            let qty = isSingle ? 1 : $('.qtyValue').val()
            let card = localStorage.getItem('card')
            $('.qtyValue').val(1)
            let newBill = [
                {
                    'id': tikets.id,
                    'image_url': tikets.image_url,
                    'title': tikets.title,
                    'price': tikets.price,
                    'qty': qty
                }
            ]
            if (!card){
                localStorage.setItem('card', JSON.stringify(newBill))
            }else{
                card = JSON.parse(card)
                card.forEach(billInCard => {
                    if (billInCard.id === tikets.id){
                        billInCard.qty = Number(billInCard.qty) + Number(qty)
                        newBill = null
                    }
                })
                Array.prototype.push.apply(card, newBill)
                localStorage.setItem('card', JSON.stringify(card))
            }
        },
        getBilet(){
            this.axios.get('http://127.0.0.1:8000/api/tiket')
            .then( res => {
                this.tiket = res.data.data
            })
            .finally( v => {
                $(document).trigger('change')
            })
        },
        getBill(id){
            this.axios.get(`http://127.0.0.1:8000/api/tiket/${id}`)
            .then( res => {
                this.popupBill = res.data.data
            })
        }
    }
}
</script>