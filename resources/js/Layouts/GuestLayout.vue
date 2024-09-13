<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header class="flex justify-between items-center mx-50 my-30">
        <div class="flex gap-30 items-center text-white">
            <div class="news hover:text-blue select-none">
                <Link href="/news">Новости</Link>
            </div>
            <div class="api hover:text-blue select-none">
                <Link href="/api">API</Link>
            </div>
            <div class="faq hover:text-blue select-none">
                <Link href="/faq">FAQ</Link>
            </div>
        </div>
        <div class="application_logo">
            <ApplicationLogo />
        </div>
        <div class="flex gap-30 auth">
            <PrimaryButton><Link :href="route('register')">Создать аккаунт</Link></PrimaryButton>
            <SecondaryButton><Link :href="route('login')">Войти</Link></SecondaryButton>
        </div>
    </header>
    <hr class="w-full border-gray mb-60" />
    <main class="flex flex-col items-center mx-50 mb-50">
        <slot />
    </main>
</template>
<style lang="css" scoped>
.news, .api, .faq {
    font-weight: 500;
}
</style>