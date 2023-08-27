<style lang="scss">
.travel-page-title{
    text-align: center;
    padding: 50px;;
}
.col-md-3.fetured-post.blog-post{
    background-color: lightblue;
    border-radius: 15px;
    margin: 5px;
}
.btn.btn-success.col-5{
    border-radius: 10px;
    margin: 0 auto;
    display: block;
}
.blog {
    .blog-post {
        margin-bottom: 119px;

        .blog-post-thumbnail-wrapper {
            height: 265px;
            position: relative;
            overflow: hidden;
            margin-bottom: 26px;

            img {
                max-width: 100%;
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.3s ease-in-out;
            }
        }
        .blog-post-category {
            color: #7d848b;
            font-size: 16px;
            line-height: 1.13;
            margin-bottom: 8px;
        }

        .blog-post-permalink {
            &:hover {
                text-decoration: none;
            }
        }

        .blog-post-title {
            font-size: 20px;
            font-weight: 300;
            line-height: 1.5;
            color: #020202;
            margin-bottom: 0;
        }

        &:hover {
            .blog-post-thumbnail-wrapper {
                img {
                    transform: scale(1.075);
                }
            }
        }

        &.fetured-post {
            .blog-post-thumbnail-wrapper {
                height: 296px;
            }
        }
    }
}
img{
    border-radius: 10%;
    padding: 10px;
    width: 16rem;
}
</style>
<template>
    <div class="container">
        <h1 class="travel-page-title">Квиткі</h1>
        <section class="featured-posts-section">
            <div class="row">
                <div v-for="tikets in tiket" class="col-md-3 fetured-post blog-post">
                    <div class="blog-post-thumbnail-wrapper">
                        <img :src="tikets.image_url" alt="blog post">
                    </div>
                    <h4><strong>{{ tikets.title }}</strong></h4>
                    <p class="blog-post-category"><strong>Місто:</strong> {{tikets.city.name_city}}</p>
                    <p class="blog-post-category"><strong>Транспорт:</strong> {{tikets.bus.name_bus}}</p>
                    <p class="blog-post-category"><strong>Ціна:</strong> {{tikets.price}}$</p>
                    <a href="#!" class="blog-post-permalink">
                        <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>
                    </a>
                   <input type="submit" class="btn btn-success col-5" value="Додати">
                </div>
            </div>
        </section>   
    </div>
</template>

<script >
export default{
    mounted() {
       this.getBilet()
    },
    data() {
        return {
            tiket: []
        }
    },
    methods: {
        getBilet(){
            this.axios.get('http://127.0.0.1:8000/api/tiket')
            .then( res => {
                this.tiket = res.data.data
            })
        }
    }
}
</script>