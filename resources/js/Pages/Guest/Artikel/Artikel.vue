<script setup>
import { Head } from "@inertiajs/vue3";
import Container from "@/Components/Container.vue";
import HeroSection from "@/Components/artikel/Hero.vue";
import Box from "@/Components/home/BoxArtikel.vue";

/*Get Data From Database */
const { artikels } = defineProps(["artikels"]);
</script>

<template>
    <Head title="Artikel" />
    <Container>
        <HeroSection/>
        <section>
            <div class="section-title">
                <h2>Artikel Terbaru</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vivamus hendrerit suscipit egestas.
                </p>
            </div>
            <div class="flex flex-col md:flex-row justify-center gap-4 flex-wrap">
                <Box v-for="artikel in artikels" :key="artikel.id" image="img/blog.png" :created_at="artikel.created_at"
                    :judul="artikel.judul" :deskripsi="artikel.deskripsi" link="/artikel" />
            </div>
        </section>
    </Container>
</template>