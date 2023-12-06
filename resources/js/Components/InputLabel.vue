<script setup>
defineProps(['value']);
</script>

<template>
    <label class="block font-medium text-xs text-gray-700 text-left ml-1">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
