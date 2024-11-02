<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    href: {
        type: String,
        required: false,
    },
    active: {
        type: Boolean,
    },
});

const changeActive = computed(() =>
    props.active
        ? 'flex items-center justify-center w-[60px] h-[60px] rounded-full bg-neutral-300'
        : 'flex items-center justify-center w-[60px] h-[60px] rounded-full bg-neutral-200'
);
</script>

<template>
    <Link :href="href" :class="changeActive">
        <slot />
    </Link>
</template>