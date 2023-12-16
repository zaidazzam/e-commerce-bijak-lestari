<script setup>
import Button from "@/Components/Button.vue";
</script>
<template>
    <div id="hero-section">
        <div class="hero bg-gray-800 text-white">
            <div class="flex md:justify-between md:items-end md:flex-row flex-col">
                <div class="px-10 py-20 md:w-[500px] w-full">
                    <h1 class="text-white text-4xl font-bold py-4">
                        Belajar lebih mudah Bersama Bijak Lestari
                    </h1>
                    <p class="text-white text-sm pt-2 pb-6">
                        🌎 Pelajari Teknik Permaculture yang Revolusioner 🌳
                        Menggabungkan Ilmu Pengetahuan dan Kreativitas Untuk
                        Mengubah Kehidupan Anda.
                    </p>
                    <Button link="/toolskit">Belajar Sekarang</Button>
                </div>
                <div class="image">
                    <div class="hero-image w-72">
                        <img src="/img/ilustrasi/hero.png" alt="Hero Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>