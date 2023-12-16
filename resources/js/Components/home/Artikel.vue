<script setup>
import Box from "@/Components/home/Box.vue";
const { artikels } = defineProps(["artikels"]);
</script>

<template>
    <div id="artikel">
        <div class="section-title">
            <h2>Artikel Terbaru</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Vivamus hendrerit suscipit egestas.
            </p>
        </div>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <Box image="/img/blog.png" v-for="artikel in artikels" :key="artikel.id" :created_at="artikel.created_at"
                :judul="artikel.judul" :deskripsi="artikel.deskripsi" link="/toolskit" />
        </div>
    </div>
</template>