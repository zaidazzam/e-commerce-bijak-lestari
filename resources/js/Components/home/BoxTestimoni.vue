<template>
    <div class=" py-8 px-20 text-center flex flex-col gap-3 bg-transparent">
        <p class="text-lg font-medium pb-10">"{{ ulasan }}"</p>
        <img src="img/logo/favicon.png" alt="Photo Testi" class=" w-20 h-20 rounded-full mx-auto my-3">
        <div>
            <p class="font-bold text-base">{{ nama }}</p>
            <p class=" text-sm">{{ pekerjaan }}</p>
        </div>
    </div>
</template>

<script setup>
const { props } = defineProps([
    'ulasan', 
    'nama', 
    'pekerjaan'
]);
</script>