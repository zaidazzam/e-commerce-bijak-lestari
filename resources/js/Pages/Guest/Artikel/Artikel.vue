<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import Button from "@/Components/Button.vue";
import Kategori from "@/Components/Kategori.vue";
import Box from "@/Components/home/Box.vue";
import Testimonial from "@/Components/home/Testimoni.vue";
import { defineComponent } from "vue";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";

const { artikels } = defineProps(["artikels"]);
</script>
<template>
    <Head title="Bijak Lestari" />
    <Navbar />
    <Footer />
</template>

<script></script>

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
