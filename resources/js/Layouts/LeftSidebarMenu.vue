<script setup>
import TextInput from '@/Components/TextInput.vue';
import AuthenticatedLayout from './AuthenticatedLayout.vue';
</script>

<template>
    <div class="flex flex-col min-w-[400px] max-w-[550px] resize-x h-screen py-20 gap-30">
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
        <div class="flex flex-col pl-20 gap-20 overflow-y-scroll chat">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar.png">
                    <h5 class="text-base">Тимоти Шаламе</h5>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar1.png">
                    <h5 class="text-base">Дакота Джонсон</h5>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar2.png">
                    <h5 class="text-base">Стив Морган</h5> 
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar3.png">
                    <h5 class="text-base">Джерри Райан</h5>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar4.png">
                    <h5 class="text-base">Оливия Кук</h5>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar5.png">
                    <h5 class="text-base">Вадим Петров</h5>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar6.png">
                    <h5 class="text-base">Эмма Робертс</h5>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar7.png">
                    <h5 class="text-base">Евгений Журенков</h5>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar8.png">
                    <h5 class="text-base">Дани Людвиг</h5>
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