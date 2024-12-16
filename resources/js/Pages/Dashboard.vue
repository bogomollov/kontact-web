<script setup>
import ChatBoxLayout from "@/Layouts/ChatBoxLayout.vue";
import LeftSidebarMenu from "@/Layouts/LeftSidebarMenu.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
  <Head title="Web" />
  <div class="flex h-screen">
    <LeftSidebarMenu class="border-r border-neutral-200" />
    <ChatBoxLayout />
  </div>
</template>
