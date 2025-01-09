<script setup>
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

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
    <div class="flex flex-col items-center h-screen w-full bg-neutral-50 gap-[30px]">
        <div class="flex flex-col justify-center items-center min-w-[400px] gap-[10px]">
            <h2>Личные настройки</h2>
                <h5 class="text-neutral-500">
                    Управляйте своими данными в один клик
                </h5>
            </div>
        <UpdateProfileInformationForm
            class="max-w-sm"
            :must-verify-email="mustVerifyEmail"
            :status="status"
        />
        <UpdatePasswordForm/>
        <DeleteUserForm/>
    </div>
</template>