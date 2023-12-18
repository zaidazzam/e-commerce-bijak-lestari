<!-- Box.vue -->
<template>
    <div class="rounded-3xl shadow-xl w-96 flex flex-col">
        <div>
            <img :src="image" alt="Thumbnail Artikel" class="w-full rounded-t-3xl h-48" />
        </div>
        <div class="py-6 px-4 flex flex-col gap-3">
            <p class="text-sm text-customGreenLight">{{ formattedCreatedAt  }}</p>
            <p class="text-xl text-black font-bold">{{ judul }}</p>
            <p class="deskripsi text-sm">{{ deskripsi }}</p>
            <a :href="link" class="text-customGreenLight font-medium text-sm">Read More ...</a>
        </div>
    </div>
</template>

<script setup>
import { defineProps, ref, onMounted } from 'vue';

const { created_at, judul, deskripsi, link, image } = defineProps(['created_at', 'judul', 'deskripsi', 'link', 'image']);
const formattedCreatedAt = ref('');

onMounted(() => {
  // Convert created_at to DD-MM-YYYY format
  const date = new Date(created_at);
  const day = date.getDate();
  const month = date.getMonth() + 1;
  const year = date.getFullYear();

  formattedCreatedAt.value = `${day}-${month}-${year}`;
});
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