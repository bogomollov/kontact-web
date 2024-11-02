<script setup>
import TextInput from '@/Components/TextInput.vue';
import GroupLayout from './GroupLayout.vue';
</script>

<template>
    <GroupLayout />
    <div class="flex flex-col overflow-y-scroll min-w-[400px] max-w-[550px] resize-x h-screen bg-white px-15 py-20 gap-30">
        <div class="text-neutral-950">
            <h3>Домашняя страница</h3>
        </div>
        <div class="flex">
            <label class="flex-1">
            <TextInput
                type="search"
                class="block bg-transparent text-neutral-500 pl-[58px] w-full text-base"
                placeholder="Поиск"
            />
            </label>
        </div>
        <div class="flex flex-col gap-20">
            <div class="flex items-center justify-between">
                <div class="flex gap-15">
                    <img src="../../images/avatar.png">
                    <div class="text-black">
                        <div class="font-semibold text-base">Timothy Chalamet</div>
                        <p class="font-medium text-p line-clamp-1 w-[383px]">Понял, принял</p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-[13px]">
                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.83317 6.00002L9.95796 10.1248L18.7975 1.28607M1.70801 6.04193L5.8328 10.1667M14.6715 1.32798L10.2521 5.7474" stroke="#6B8AFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="text-gray text-small font-medium w-max">21:45</div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex gap-15">
                    <img src="../../images/avatar1.png">
                    <div class="text-black">
                        <div class="font-semibold text-base">Dakota Johnson</div>
                        <p class="font-medium text-p line-clamp-1">Можешь помочь мне?</p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-[13px]">
                    <div class="text-gray text-small font-medium w-max">пт</div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex gap-15">
                    <img src="../../images/avatar2.png">
                    <div class="text-black">
                        <div class="font-semibold text-base">Rick</div>
                        <p class="font-medium text-p line-clamp-1">Проект доступен на github</p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-[13px]">
                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.83317 6.00002L9.95796 10.1248L18.7975 1.28607M1.70801 6.04193L5.8328 10.1667M14.6715 1.32798L10.2521 5.7474" stroke="#6B8AFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="text-gray text-small font-medium w-max">17:56</div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex gap-15">
                    <img src="../../images/avatar3.png">
                    <div class="text-black">
                        <div class="font-semibold text-base">Jerry Ryan</div>
                        <p class="font-medium text-p line-clamp-1">У нас тут чрезвычайное происшествие</p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-[13px]">
                    <div class="text-gray text-small font-medium w-max">13:30</div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex gap-15">
                    <img src="../../images/avatar4.png">
                    <div class="text-black">
                        <div class="font-semibold text-base">Olivia Cooke</div>
                        <p class="font-medium text-p line-clamp-1">Хорошо, я подумаю</p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-[13px]">
                    <div class="text-gray text-small font-medium w-max">чт</div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex gap-15">
                    <img src="../../images/avatar5.png">
                    <div class="text-black">
                        <div class="font-semibold text-base">Vadim Petrov</div>
                        <p class="font-medium text-p line-clamp-1">Какие функции находятся в стадии разработки?</p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-[13px]">
                    <div class="text-gray text-small font-medium w-max">вт</div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex gap-15">
                    <img src="../../images/avatar6.png">
                    <div class="text-black">
                        <div class="font-semibold text-base">Emma Roberts</div>
                        <p class="font-medium text-p line-clamp-1">Мы можем это обсудить</p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-[13px]">
                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.83317 6.00002L9.95796 10.1248L18.7975 1.28607M1.70801 6.04193L5.8328 10.1667M14.6715 1.32798L10.2521 5.7474" stroke="#6B8AFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="text-gray text-small font-medium w-max">пн</div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex gap-15">
                    <img src="../../images/avatar7.png">
                    <div class="text-black">
                        <div class="font-semibold text-base">Evgeny Zhurenkov</div>
                        <p class="font-medium text-p line-clamp-1">WMS передает картографическую информацию в виде готовых изображений</p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-[13px]">
                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.83317 6.00002L9.95796 10.1248L18.7975 1.28607M1.70801 6.04193L5.8328 10.1667M14.6715 1.32798L10.2521 5.7474" stroke="#6B8AFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="text-gray text-small font-medium w-max">02 июл.</div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex gap-15">
                    <img src="../../images/avatar8.png">
                    <div class="text-black">
                        <div class="font-semibold text-base">Dani Ludwig</div>
                        <p class="font-medium text-p line-clamp-1">Не могли бы вы взглянуть на эти файлы</p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-[13px]">
                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.83317 6.00002L9.95796 10.1248L18.7975 1.28607M1.70801 6.04193L5.8328 10.1667M14.6715 1.32798L10.2521 5.7474" stroke="#6B8AFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="text-gray text-small font-medium w-max">28 июн.</div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex gap-15">
                    <img src="../../images/avatar9.png">
                    <div class="text-black">
                        <div class="font-semibold text-base">Isis Branco</div>
                        <p class="font-medium text-p line-clamp-1">Мне нравится Laravel</p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-[13px]">
                    <div class="text-gray text-small font-medium w-max">04 мая</div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex gap-15">
                    <img src="../../images/avatar10.png">
                    <div class="text-black">
                        <div class="font-semibold text-base">Mikhail Prokhorov</div>
                        <p class="font-medium text-p line-clamp-1">Жду результата</p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-[13px]">
                    <div class="text-gray text-small font-medium w-max">05 апр.</div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex gap-15">
                    <img src="../../images/avatar11.png">
                    <div class="text-black">
                        <div class="font-semibold text-base">Rick</div>
                        <p class="font-medium text-p line-clamp-1">Давай встретимся после работы</p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-[13px]">
                    <div class="text-gray text-small font-medium w-max">05 апр.</div>
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
    width: 24px;
    background: url("../../images/search.svg") center / contain no-repeat;
}
</style>