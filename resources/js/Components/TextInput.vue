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
        class="border-none focus:ring-gray focus:ring-1 placeholder:text-gray placeholder:font-medium h-48 font-medium rounded-10"
        v-model="model"
        :placeholder="placeholder"
    />
</template>
