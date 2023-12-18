<script setup>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
</script>

<template>
    <section class="mx-auto w-full max-w-screen-xl">
        <Navbar/>
        <section class="px-4 lg:py-3 flex flex-col gap-8">
            <slot/>
        </section>
        <Footer/>
    </section>
</template>