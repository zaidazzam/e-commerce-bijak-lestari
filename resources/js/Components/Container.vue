<script setup>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
</script>

<template>
    <section class="mx-auto w-full max-w-screen-xl">
        <Navbar/>
        <slot/>
        <Footer/>
    </section>
</template>