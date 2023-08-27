<style lang="scss">

</style>
<template>
       <main class="overflow-hidden ">
        <!--Start Breadcrumb Style2-->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content text-center wow fadeInUp animated">
                            <h2>Кошик</h2>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="tiket"><i class="flaticon-home pe-2"></i>Головна</a></li>
                                    <li> <i class="flaticon-next"></i> </li>
                                    <li class="active">Кошик</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Breadcrumb Style2-->
        <!--Start cart area-->
        <section class="cart-area pt-120 pb-120">
            <div class="container">
                <div class="row wow fadeInUp animated">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="cart-table-box">
                            <div class="table-outer">
                                <table class="cart-table">
                                    <thead class="cart-header">
                                        <tr>
                                            <th class="">Product Name</th>
                                            <th class="price">Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                            <th class="hide-me"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="tiket in tikets">
                                            <td>
                                                <div class="thumb-box"> 
                                                    <router-link :to="{name: 'tiket.show', params: {id: tiket.id}}" class="thumb">
                                                        <img :src="tiket.image_url" alt="">
                                                    </router-link>
                                                    <router-link :to="{name: 'tiket.show', params: {id: tiket.id}}" class="title">
                                                        <h5> {{tiket.title}} </h5> 
                                                    </router-link>
                                                </div>
                                            </td>
                                            <td>${{tiket.price}}</td>
                                            <td class="qty">
                                                <div class="qtySelector text-center"> 
                                                    <span @click.prevent="minusQty(tiket)" class="decreaseQty">
                                                        <i class="flaticon-minus"></i> 
                                                    </span> 
                                                    <input type="number" class="qtyValue" :value="tiket.qty" /> 
                                                    <span @click.prevent="plusQty(tiket)" class="increaseQty"> 
                                                        <i class="flaticon-plus"></i> 
                                                    </span> 
                                                </div>
                                            </td>
                                            <td class="sub-total">${{tiket.price * tiket.qty}}</td>
                                            <td>
                                                <div @click.prevent="removeTiket(tiket.id)" class="remove"> 
                                                    <i class="flaticon-cross"></i> 
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cart-button-box">
                            <div class="cart-button-box-right wow fadeInUp animated"> 
                                <button class="btn--primary mt-30" type="submit">
                                    Купити квиток
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End cart area-->
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
            tikets: [],
        }
    },

    methods: {
        getBill(id){
            this.tikets = JSON.parse(localStorage.getItem('card'))
            console.log(this.tikets);
        },
        minusQty(tiket){
            if (tiket.qty === 0) return
            tiket.qty--
            this.updateCard()
        },
        plusQty(tiket){
            tiket.qty++
            this.updateCard()
        },
        removeTiket(id){
            this.tikets = this.tikets.filter(tiket => {
                return tiket.id !== id
            })
            this.updateCard()
        },
        updateCard(){
            localStorage.setItem('card', JSON.stringify(this.tikets))
        }
    }
}
</script>