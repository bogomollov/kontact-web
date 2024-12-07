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
        <div class="flex flex-col items-center mb-[40px] gap-[20px]">
            <h1 class="text-neutral-950 font-medium">Современный корпоративный мессенджер</h1>
            <h4 class="text-neutral-500">Быстрый. Надежный. Простой.</h4>
        </div>
        <div class="bg-neutral-200 w-full h-[650px]"></div>
    </GuestLayout>
</template>