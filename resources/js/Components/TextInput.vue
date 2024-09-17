<script setup>
const model = defineModel({
    type: String,
    required: true,
});
</script>

<template>
    <input
        class="bg-dark-gray border-none focus:ring-gray focus:ring-1 h-48 text-p rounded-10"
        v-model="model"
    />
</template>
