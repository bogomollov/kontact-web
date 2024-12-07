<script setup>
defineProps({
    placeholder: String,
});
</script>

<template>
    <textarea rows="1" cols="5" maxlength="200" minlength="1"
        class="border-none resize-none focus:ring-0 rounded-none w-full block p-0 text-wrap break-all text-base"
        :placeholder="placeholder"
    ></textarea>
</template>
