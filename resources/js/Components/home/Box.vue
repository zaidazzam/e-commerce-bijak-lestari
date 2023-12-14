<!-- Box.vue -->
<template>
    <div class="rounded-3xl shadow-xl w-96 flex flex-col">
        <div>
            <img :src="image" alt="Thumbnail Artikel" class="w-full rounded-t-3xl h-48" />
        </div>
        <div class="py-6 px-4 flex flex-col gap-3">
            <p class="text-sm text-customGreenLight">{{ created_at }}</p>
            <p class="text-2xl text-black font-bold">{{ judul }}</p>
            <p class="deskripsi">{{ deskripsi }}</p>
            <a :href="link" class="underline text-customGreenLight font-medium text-base">Read More ...</a>
        </div>
    </div>
</template>

<script setup>
const { props } = defineProps([
    "image",
    "created_at",
    "judul",
    "deskripsi",
    "link",
]);
</script>

<style scoped>
.deskripsi {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    word-wrap: break-word;
}
</style>