<script setup>
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdateAccountInformationForm from './Partials/UpdateAccountInformationForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Link,Head } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>
    <Head title="Profile" />
    <div class="flex flex-col items-center justify-center w-full min-h-svh bg-neutral-50 gap-[30px] py-[130px]">
        <Link :href="route('dashboard')" class="absolute top-10 left-10 hover:bg-neutral-100 rounded-full p-[10px]">
            <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 8.875H1M1 8.875L8.875 16.75M1 8.875L8.875 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </Link>
        <div class="flex flex-col justify-center items-center min-w-[400px] gap-[10px]">
            <h2>Личные настройки</h2>
            <h5 class="text-neutral-500">
                Управляйте своими данными в один клик
            </h5>
        </div>
        <div class="flex gap-[30px]">
            <div class="flex flex-col gap-[30px]">
                <UpdateProfileInformationForm
                class="max-w-sm"
                :must-verify-email="mustVerifyEmail"
                :status="status"
                />
                <DeleteUserForm class="max-w-sm"/>
            </div>
            <div class="flex flex-col gap-[30px]">
                <UpdateAccountInformationForm class="max-w-sm"/>
                <UpdatePasswordForm class="max-w-sm"/>
            </div>
        </div>
    </div>
</template>