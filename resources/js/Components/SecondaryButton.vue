<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button
        :type="type"
        class="inline-flex items-center px-16 py-8 bg-transparent border border-gray rounded-10 font-medium text-base text-white hover:bg-dark-gray transition ease-in-out duration-100"
    >
        <slot />
    </button>
</template>
