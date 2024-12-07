<script setup>
defineProps({
    placeholder: String,
});
const model = defineModel({
    type: String,
    required: false,
});
</script>

<template>
    <input
        class="focus:ring-0 text-neutral-950 placeholder:text-neutral-500 placeholder:font-base rounded-10"
        v-model="model"
        :placeholder="placeholder"
    />
</template>
