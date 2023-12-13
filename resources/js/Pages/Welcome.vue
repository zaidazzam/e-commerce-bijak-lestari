<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import Button from "@/Components/Button.vue"
</script>

<template>
    <Head title="Bijak Lestari" />
    <Navbar />
    <section class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <!-- Hero Section -->
        <div>
            <div class="hero bg-gray-800 text-white">
               <div class="flex justify-between items-end">
                <div class="px-10 py-16 w-1/2">
                    <h1 class=" text-white text-4xl font-bold py-4">Belajar lebih mudah <br> Bersama Bijak Lestari</h1>
                    <p class=" text-white text-sm pt-2 pb-6">🌎 Pelajari Teknik Permaculture yang Revolusioner 🌳 <br>
                        Menggabungkan Ilmu Pengetahuan dan Kreativitas <br> Untuk Mengubah Kehidupan Anda.</p>
                    <Button>Belajar Sekarang</Button>
                </div>
                <div class="image">
                    <div class="hero-image w-72">
                        <img src="/img/ilustrasi/hero.png" alt="Hero Image">
                    </div>
                </div>
               </div>
            </div>

        </div>
        <!-- Produk Section -->

    </section>
<Footer /></template>
