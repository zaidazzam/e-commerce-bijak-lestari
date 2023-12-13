<template>
    <a 
    :href="link"
    class=" md:text-white md:bg-customGreen hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-6 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-customGreen  bg-white
    ">
        <slot/>
    </a>
</template>

<script setup>
const props = defineProps(["link"]);
</script>