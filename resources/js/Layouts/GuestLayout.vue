<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header class="flex items-center border-b h-[62px]">
        <div class="flex justify-between items-center w-full 2xl:mx-[240px] sm:mx-50">
            <div class="application_logo">
                <ApplicationLogo/>
            </div>
            <div class="flex gap-30 items-center text-neutral-500 text-base">
                <div class="news hover:text-neutral-900 select-none">
                    <Link href="/news">Функции</Link>
                </div>
                <div class="api hover:text-neutral-900 select-none">
                    <Link href="/api">Вопросы и ответы</Link>
                </div>
                <div class="faq hover:text-neutral-900 select-none">
                    <Link href="/faq">API</Link>
                </div>
            </div>
            <PrimaryButton class="text-white"><Link :href="route('login')">Начать общение</Link></PrimaryButton>
        </div>
    </header>
    <main class="flex flex-col items-center my-[70px] 2xl:mx-[240px] sm:mx-50">
        <slot />
    </main>
    <footer class="flex justify-between items-center mx-50 my-30">
        <div class="text-base text-neutral-500">
            © 2024 контакт
        </div>
        <div class="flex items-center gap-15">
            <a href="https://telegram.org" target="_blank">
                <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.9645 0.176619C18.7983 1.49892 5.22236 7.16931 1.47133 8.71477C-1.04428 9.70468 0.428392 10.6328 0.428392 10.6328C0.428392 10.6328 2.57577 11.3752 4.41667 11.932C6.25732 12.4889 7.23902 11.8703 7.23902 11.8703L15.8903 5.99258C18.9581 3.88898 18.2219 5.62126 17.4854 6.36389C15.8903 7.97266 13.2519 10.5091 11.0431 12.5509C10.0614 13.417 10.5521 14.1594 10.9818 14.5307C12.577 15.892 16.9335 18.6762 17.1787 18.8617C18.4749 19.787 21.0244 21.1189 21.4122 18.3048L22.9461 8.59126C23.4371 5.31222 23.9278 2.28047 23.9891 1.41433C24.1733 -0.689521 21.9645 0.176619 21.9645 0.176619Z" fill="#737373"/>
                </svg>
            </a>
            <a href="https://vk.com" target="_blank">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.9927 15.689V8.34068C23.9927 1.62871 22.408 0.0318173 15.694 0.0318173C-0.72461 -0.0735308 -0.0776184 -0.741241 0.0325295 15.6766C0.0325295 22.3886 1.6173 23.9855 8.33127 23.9855H13.9041C21.0374 24.1085 24.1721 23.6182 23.9927 15.689ZM19.3756 17.124H17.6284C16.967 17.124 16.7674 16.5874 15.5818 15.4023C14.546 14.4041 14.1092 14.2793 13.8473 14.2793C13.4852 14.2793 13.3854 14.3791 13.3854 14.8781V16.45C13.3854 16.8741 13.2483 17.1237 12.1374 17.1237C10.2904 17.1237 8.25649 16.0008 6.80865 13.9299C4.63727 10.8983 4.05065 8.60266 4.05065 8.1411C4.05065 7.87912 4.15044 7.64189 4.64965 7.64189H6.39686C6.84604 7.64189 7.00823 7.84148 7.18305 8.30304C7.89926 10.651 10.3526 14.558 10.3902 12.3078V9.73774C10.3154 8.56502 9.69144 8.46523 9.69144 8.04106C9.69144 7.85385 9.86626 7.64189 10.1406 7.64189H12.886C13.2604 7.64189 13.3852 7.8291 13.3852 8.27803V11.7464C13.4327 12.5781 13.9501 12.2509 14.471 11.709C15.7314 10.3117 16.6174 8.14085 16.6174 8.14085C16.7298 7.87886 16.9294 7.64189 17.3786 7.64189H19.1258C19.65 7.64189 19.7621 7.90388 19.65 8.27828C19.4378 9.30119 17.3038 12.2954 17.3038 12.308C17.1166 12.595 17.0418 12.7448 17.3038 13.0816C17.8068 13.7084 21.472 17.0184 19.3756 17.124Z" fill="#737373"/>
                </svg>
            </a>                        
        </div>
    </footer>
</template>