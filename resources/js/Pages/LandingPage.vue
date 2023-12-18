<script setup>
import { Head } from "@inertiajs/vue3";
import Container from "@/Components/Container.vue";
import HeroSection from "@/Components/home/Hero.vue";
import PaketSection from "@/Components/home/Paket.vue";
import ReasonSection from "@/Components/home/Reason.vue";
import Box from "@/Components/home/BoxArtikel.vue";
import Testimonial from "@/Components/home/BoxTestimoni.vue";
/*Using Carousel Vuejs */
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
/* Get Data from DB */
const { artikels, testimonis } = defineProps(["artikels", "testimonis"]);
</script>

<template>
    <Head title="Bijak Lestari" />
    <Container>
        <HeroSection />
        <PaketSection />
        <ReasonSection />
        <section id="testimonial">
            <hr>
            <div class="section-title" style="padding-bottom: 0px">
                <h2>Testimonial</h2>
                <p>Simak Pengalaman Lainnya dengan Produk dan Layanan Kami</p>
            </div>
            <div class="pb-10">
                <Carousel>
                    <Slide v-for="testimonis in testimonis" :key="testimonis.id">
                        <Testimonial :ulasan="testimonis.ulasan" :nama="testimonis.nama"
                            :pekerjaan="testimonis.pekerjaan" />

                    </Slide>

                    <template #addons>
                        <Navigation />
                        <Pagination />
                    </template>
                </Carousel>
            </div>
            <hr />
        </section>
        <section id="artikel">
            <div class="section-title">
                <h2>Artikel Terbaru</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vivamus hendrerit suscipit egestas.
                </p>
            </div>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <Box v-for="artikel in artikels" :key="artikel.id" image="img/blog.png" :created_at="artikel.created_at"
                    :judul="artikel.judul" :deskripsi="artikel.deskripsi" link="/artikel" />
            </div>
        </section>
    </Container>
</template>