<template>
    <div class=" py-8 px-20 text-center flex flex-col gap-3 bg-transparent">
        <p class="text-lg font-medium pb-10">"{{ testimoni }}"</p>
        <img :src="thumbnail" alt="Photo Testi" class=" w-20 h-20 rounded-full mx-auto my-3">
        <div>
            <p class="font-bold text-base">{{ name }}</p>
            <p class=" text-sm">{{ desc }}</p>
        </div>
    </div>
</template>

<script setup>
const { props } = defineProps(['testimoni', 'thumbnail', 'name', 'desc']);
</script>