<script setup>
import { Head } from "@inertiajs/vue3";
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import Container from "@/Components/Container.vue";
import HeroSection from "@/Components/home/Hero.vue";
import PaketSection from "@/Components/home/Paket.vue";
import ReasonSection from "@/Components/home/Reason.vue";
import TestimoniSection from "@/Components/home/Testimoni.vue";
import ArtikelSection from "@/Components/home/Artikel.vue";
</script>

<template>
    <Head title="Bijak Lestari" />
    <Container>
        <section class="px-4 lg:py-3 flex flex-col gap-8">
            <HeroSection/>
            <PaketSection/>
            <ReasonSection/>
            <TestimoniSection/>
            <ArtikelSection/>            
        </section>
    </Container>
</template>