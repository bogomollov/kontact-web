<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <GuestLayout>
        <div class="title text-h1 text-white mb-30">Оставайтесь на связи с любого устройства</div>
        <div class="flex items-end md:flex-wrap md:justify-center md:shrink-0">
            <img class="border-2 border-dark-gray rounded-10 py-10 pl-10" src="../../images/pc-mockup.png">
            <img src="../../images/iphone-mockup.png">
        </div>
    </GuestLayout>
</template>
<style lang="css" scoped>
.title {
    font-weight: 500;
}
</style>