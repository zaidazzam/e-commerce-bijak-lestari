<!-- Box.vue -->
<template>
    <div class="rounded-3xl shadow-xl w-96 flex flex-col">
        <div>
            <img :src="thumbnail" alt="Thumbnail Artikel" class="w-full rounded-t-3xl h-48">
        </div>
        <div class="py-6 px-4 flex flex-col gap-3">
            <p class="text-sm text-customGreenLight">{{ publicationDate }}</p>
            <p class="text-2xl text-black font-bold">{{ title }}</p>
            <p>{{ description }}</p>
            <a :href="link" class="underline text-customGreenLight font-medium text-base">Read More ...</a>
        </div>
    </div>
</template>
  
<script setup>
    const { props } = defineProps(['thumbnail', 'publicationDate', 'title', 'description', 'link']);
</script>
  