<script setup>
import { Head, Link } from '@inertiajs/vue3';
import DepartmentInformation from './Admin/DepartmentInformation.vue';
import RoleInformation from './Admin/RoleInformation.vue';
import AccountInformation from './Admin/AccountInformation.vue';
import UserInformation from './Admin/UserInformation.vue';
</script>

<template>
    <Head title="Admin" />
    <Link :href="route('dashboard')" class="absolute top-10 left-10 hover:bg-neutral-100 rounded-full p-[10px]">
        <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 8.875H1M1 8.875L8.875 16.75M1 8.875L8.875 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </Link>
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