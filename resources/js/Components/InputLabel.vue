<script setup>
defineProps({
    value: {
        type: String,
    },
});
</script>

<template>
    <label class="block font-normal text-base">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
