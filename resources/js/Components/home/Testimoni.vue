<script setup>
import Testimonial from "@/Components/home/BoxTestimoni.vue";
import { defineComponent } from "vue";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";

</script>

<template>
    <hr>
    <div class="section-title" style="padding-bottom: 0px">
        <h2>Testimonial</h2>
        <p>Simak Pengalaman Lainnya dengan Produk dan Layanan Kami</p>
    </div>
    <div>
        <Carousel>
            <Slide v-for="index in 3" :key="index">
                <Testimonial :testimoni="slides[index - 1].testimoni" :thumbnail="slides[index - 1].thumbnail"
                    :name="slides[index - 1].name" :desc="slides[index - 1].desc" />
            </Slide>

            <template #addons>
                <Navigation />
                <Pagination />
            </template>
        </Carousel>
    </div>
    <hr />
</template>

<script>
export default defineComponent({
    data() {
        return {
            slides: [
                {
                    testimoni:
                        "Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.",
                    thumbnail: "/img/logo/favicon.png",
                    name: "Alfina Balqis N",
                    desc: "Developer at Bangun Digital Indonesia",
                },
                {
                    testimoni:
                        "Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.",
                    thumbnail: "/img/reason.png",
                    name: "lorem",
                    desc: "lorem",
                },
                {
                    testimoni:
                        "Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.",
                    thumbnail: "/img/paket.png",
                    name: "lorem",
                    desc: "Developer",
                },
            ],
        };
    },
});
</script>

<style>
.carousel__item {
    min-height: 200px;
    width: 100%;
    background-color: red;
    color: black;
    font-size: 20px;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel__slide {
    padding: 10px;
}

.carousel__prev,
.carousel__next {
    box-sizing: content-box;
    background: rgba(59, 93, 80, 0.1);
    padding: 1rem;
    border-radius: 100%;
}
</style>