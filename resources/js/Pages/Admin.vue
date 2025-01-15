<script setup>
import { Head } from '@inertiajs/vue3';
import DepartmentInformation from './Admin/DepartmentInformation.vue';
import RoleInformation from './Admin/RoleInformation.vue';
import AccountInformation from './Admin/AccountInformation.vue';
import UserInformation from './Admin/UserInformation.vue';
</script>

<template>
    <Head title="Admin" />
    <div class="flex flex-col items-center justify-center w-full min-h-svh bg-neutral-50 gap-[30px] py-[130px]">
        <div class="flex flex-col justify-center items-center min-w-[400px] gap-[10px]">
            <h2>Панель администратора</h2>
            <h5 class="text-neutral-500">
                Управляйте сайтом в один клик
            </h5>
        </div>
        <div class="flex flex-col gap-[30px] items-center">
            <div class="flex flex-col gap-[30px]">
                <AccountInformation/>
                <UserInformation/>
            </div>
            <div class="flex flex-col gap-[30px]">
                <DepartmentInformation/>
                <RoleInformation/>
            </div>
        </div>
    </div>
</template>