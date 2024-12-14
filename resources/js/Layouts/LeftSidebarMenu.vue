<script setup>
import TextInput from '@/Components/TextInput.vue';
import AuthenticatedLayout from './AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="flex flex-col min-w-[400px] max-w-[550px] resize-x h-screen pt-20 gap-30">
        <div class="flex flex-col gap-30">
            <AuthenticatedLayout class="px-20"/>
            <div class="flex px-20">
                <label class="flex-1">
                <TextInput
                    type="text"
                    class="block px-[12px] py-[12px] border-neutral-300 bg-transparent pl-[58px] w-full text-base"
                    placeholder="Поиск"
                />
                </label>
            </div>
            <div class="flex px-20 items-center justify-between border-b pb-[15px]">
                <Link :href="route('logout')" as="button">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-15 hover:bg-neutral-100 w-full rounded-[10px] px-[20px] py-[5px]">
                            <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6.3C1 4.61984 1 3.77976 1.32698 3.13803C1.6146 2.57354 2.07354 2.1146 2.63803 1.82698C3.27976 1.5 4.11984 1.5 5.8 1.5H10.2C11.8802 1.5 12.7202 1.5 13.362 1.82698C13.9265 2.1146 14.3854 2.57354 14.673 3.13803C15 3.77976 15 4.61984 15 6.3V19.5L8 15.5L1 19.5V6.3Z" stroke="#737373" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a class="text-neutral-500">Избранное</a>
                        </div>
                    </div>
                </Link>
                <Link :href="route('logout')" as="button">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-15 hover:bg-neutral-100 w-full rounded-[10px] px-[20px] py-[5px]">
                            <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 19.5V13.5M15 16.5H21M11 13.5H7C5.13623 13.5 4.20435 13.5 3.46927 13.8045C2.48915 14.2105 1.71046 14.9892 1.30448 15.9693C1 16.7044 1 17.6362 1 19.5M14.5 1.79076C15.9659 2.38415 17 3.82131 17 5.5C17 7.17869 15.9659 8.61585 14.5 9.20924M12.5 5.5C12.5 7.70914 10.7091 9.5 8.5 9.5C6.29086 9.5 4.5 7.70914 4.5 5.5C4.5 3.29086 6.29086 1.5 8.5 1.5C10.7091 1.5 12.5 3.29086 12.5 5.5Z" stroke="#737373" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a class="text-neutral-500">Создать группу</a>
                        </div>
                    </div>
                </Link>
            </div>
        </div>
        <div class="flex flex-col pl-[20px] pr-[5px] overflow-y-scroll chat">
            <div class="flex items-center justify-between h-[70px] hover:bg-neutral-100 w-full rounded-[15px] pl-[10px]">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar.png">
                    <h5>Тимоти Шаламе</h5>
                </div>
            </div>
            <div class="flex items-center justify-between h-[70px] hover:bg-neutral-100 w-full rounded-[15px] pl-[10px]">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar1.png">
                    <h5>Дакота Джонсон</h5>
                </div>
            </div>
            <div class="flex items-center justify-between h-[70px] hover:bg-neutral-100 w-full rounded-[15px] pl-[10px]">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar2.png">
                    <h5>Стив Морган</h5> 
                </div>
            </div>
            <div class="flex items-center justify-between h-[70px] hover:bg-neutral-100 w-full rounded-[15px] pl-[10px]">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar3.png">
                    <h5>Джерри Райан</h5>
                </div>
            </div>
            <div class="flex items-center justify-between h-[70px] hover:bg-neutral-100 w-full rounded-[15px] pl-[10px]">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar4.png">
                    <h5>Оливия Кук</h5>
                </div>
            </div>
            <div class="flex items-center justify-between h-[70px] hover:bg-neutral-100 w-full rounded-[15px] pl-[10px]">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar5.png">
                    <h5>Вадим Петров</h5>
                </div>
            </div>
            <div class="flex items-center justify-between h-[70px] hover:bg-neutral-100 w-full rounded-[15px] pl-[10px]">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar6.png">
                    <h5>Эмма Робертс</h5>
                </div>
            </div>
            <div class="flex items-center justify-between h-[70px] hover:bg-neutral-100 w-full rounded-[15px] pl-[10px]">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar7.png">
                    <h5>Евгений Журенков</h5>
                </div>
            </div>
            <div class="flex items-center justify-between h-[70px] hover:bg-neutral-100 w-full rounded-[15px] pl-[10px]">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar8.png">
                    <h5>Дани Людвиг</h5>
                </div>
            </div>
        </div>
    </div>
</template>
<style lang="css" scoped>
label {
    position: relative;
}
label::before {
    content: "";
    position: absolute;
    left: 20px;
    top: 0;
    bottom: 0;
    width: 20px;
    background: url("../../images/search.svg") center / contain no-repeat;
}
</style>