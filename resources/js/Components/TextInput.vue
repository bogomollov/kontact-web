<script setup>
defineProps({
    placeholder: String,
});
const model = defineModel({
    type: String,
    required: true,
});
</script>

<template>
    <input
        class="border-neutral-500 focus:ring-neutral-300 focus:ring-1 placeholder:text-neutral-500 placeholder:font-base rounded-10"
        v-model="model"
        :placeholder="placeholder"
    />
</template>
