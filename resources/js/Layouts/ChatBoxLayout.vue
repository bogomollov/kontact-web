<script setup>
import TextInput from '@/Components/TextInput.vue';
</script>
<template>
    <div class="flex flex-col w-full h-screen mr-15">
        <div class="bg-dark-gray w-full h-[95px] px-30 py-[17.5px] mb-30 rounded-b-10">
            <div class="flex gap-15 items-center">
                <img src="../../images/avatar.png">
                <div>
                    <h4 class="text-neutral-950">Тимоти Шаламе</h4>
                    <p class="text-base text-neutral-500">был(а) в 21:00</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col pr-15 overflow-y-scroll h-auto">
            <div class="flex items-center gap-[10px] message message-in">
                message-in
                <div class="flex gap-[8px] items-center justify-center">
                    <small>10:06</small>
                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.86217 5.25619L8.72398 9.118L17 0.842773M1 5.29543L4.86182 9.15724M13.137 0.882012L8.99938 5.01967" stroke="#3B82F6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="flex items-center gap-[10px] message message-in">
                message-in
                <div class="flex gap-[8px] items-center justify-center">
                    <small>18:56</small>
                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.86217 5.25619L8.72398 9.118L17 0.842773M1 5.29543L4.86182 9.15724M13.137 0.882012L8.99938 5.01967" stroke="#3B82F6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="message message-out">
                message-out
                <div class="flex gap-[8px] items-center justify-center">
                    <small>09:50</small>
                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.86217 5.25619L8.72398 9.118L17 0.842773M1 5.29543L4.86182 9.15724M13.137 0.882012L8.99938 5.01967" stroke="#3B82F6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="flex items-center gap-[10px] message message-out p-10 rounded-t-10 rounded-br-10">
                message-out message-out message-out message-out message-out
                <div class="flex gap-[8px] items-center justify-center">
                    <small>09:50</small>
                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.86217 5.25619L8.72398 9.118L17 0.842773M1 5.29543L4.86182 9.15724M13.137 0.882012L8.99938 5.01967" stroke="#3B82F6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="flex items-center gap-[10px] message message-in">
                message-in
                <div class="flex gap-[8px] items-center justify-center">
                    <small>18:56</small>
                    <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.86217 5.25619L8.72398 9.118L17 0.842773M1 5.29543L4.86182 9.15724M13.137 0.882012L8.99938 5.01967" stroke="#3B82F6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-between gap-15 mt-30 mb-30">
            <div class="p-[20px] bg-dark-gray rounded-10 justify-center">
                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.5 20.5C15.7467 20.5 20 16.2467 20 11C20 5.75329 15.7467 1.5 10.5 1.5C5.25329 1.5 1 5.75329 1 11C1 16.2467 5.25329 20.5 10.5 20.5Z" stroke="#E0E0E0" stroke-width="2"/>
                <path d="M7.6499 14.7999C8.45776 15.3987 9.44027 15.7499 10.4999 15.7499C11.5595 15.7499 12.542 15.3987 13.3499 14.7999" stroke="#E0E0E0" stroke-width="2" stroke-linecap="round"/>
                <path d="M14.2999 9.57502C14.2999 10.362 13.8746 11 13.3499 11C12.8252 11 12.3999 10.362 12.3999 9.57502C12.3999 8.78802 12.8252 8.15002 13.3499 8.15002C13.8746 8.15002 14.2999 8.78802 14.2999 9.57502Z" fill="#E0E0E0"/>
                <path d="M7.64971 11C8.17438 11 8.59971 10.362 8.59971 9.57502C8.59971 8.78802 8.17438 8.15002 7.64971 8.15002C7.12504 8.15002 6.69971 8.78802 6.69971 9.57502C6.69971 10.362 7.12504 11 7.64971 11Z" fill="#E0E0E0"/>
                </svg>
            </div>
            <TextInput
                type="text"
                class="bg-dark-gray text-neutral-950 px-30 py-20 block w-full h-[58px] text-base"
                placeholder="Поиск по сообщениям"
            />
            <div class="p-[20px] bg-dark-gray rounded-10 items-center justify-center">
                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 15H11M5 12H11M9.00038 1.00087C8.90484 1 8.79738 1 8.67471 1H4.2002C3.08009 1 2.51962 1 2.0918 1.21799C1.71547 1.40973 1.40973 1.71547 1.21799 2.0918C1 2.51962 1 3.08009 1 4.2002V15.8002C1 16.9203 1 17.4801 1.21799 17.9079C1.40973 18.2842 1.71547 18.5905 2.0918 18.7822C2.51921 19 3.079 19 4.19694 19L11.8031 19C12.921 19 13.48 19 13.9074 18.7822C14.2837 18.5905 14.5905 18.2842 14.7822 17.9079C15 17.4805 15 16.9215 15 15.8036V7.32568C15 7.20302 14.9999 7.09553 14.999 7M9.00038 1.00087C9.28583 1.00348 9.46572 1.01407 9.63818 1.05547C9.84225 1.10446 10.0379 1.18526 10.2168 1.29492C10.4186 1.41857 10.5918 1.59181 10.9375 1.9375L14.063 5.06298C14.4089 5.40889 14.5809 5.58136 14.7046 5.78319C14.8142 5.96214 14.8953 6.15726 14.9443 6.36133C14.9857 6.53379 14.9964 6.71454 14.999 7M9.00038 1.00087L9 3.80021C9 4.92031 9 5.48015 9.21799 5.90797C9.40973 6.2843 9.71547 6.59048 10.0918 6.78223C10.5192 7 11.079 7 12.1969 7H14.999" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="p-[20px] bg-blue inline-flex rounded-full items-center justify-center">
                <svg width="23" height="23" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.87861 12.2835L13.5089 12.2834M20.5565 14.0641L5.0762 22.2596C3.6889 22.9941 2.99486 23.3615 2.53742 23.2558C2.14064 23.1642 1.81278 22.8874 1.65718 22.5111C1.47776 22.0771 1.72581 21.3313 2.22236 19.8416L4.52945 12.9205C4.60824 12.6841 4.64728 12.5662 4.66293 12.4453C4.67681 12.338 4.6775 12.2295 4.66362 12.1222C4.64832 12.004 4.60974 11.8883 4.53445 11.6625L2.22214 4.72539C1.7256 3.23575 1.47751 2.49065 1.65694 2.05673C1.81255 1.6804 2.14035 1.40294 2.53713 1.31132C2.99465 1.20567 3.68888 1.57273 5.07662 2.30741L20.5568 10.5027C21.6478 11.0803 22.1933 11.3694 22.3717 11.7546C22.527 12.0902 22.5272 12.477 22.3719 12.8126C22.1936 13.1976 21.6481 13.4864 20.5582 14.0634L20.5565 14.0641Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </div>
</template>
<style lang="css" scoped>
.message {
    @apply flex items-center gap-[10px] text-neutral-900 p-10 rounded-[10px];
    width: max-content;
    overflow-wrap: break-word;
    margin-bottom: 10px;
    max-width: 50%;
}
.message-in {
    @apply bg-neutral-200;
    margin-right: auto;
}
.message-in small {
    @apply text-neutral-500;
}
.message-out {
    @apply bg-blue-200;
    margin-left: auto;
}
.message-out small {
    @apply text-blue-500;
}
</style>