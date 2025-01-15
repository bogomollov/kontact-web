<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const passwordInput = ref(null);
const currentPasswordInput = ref(null);

const form = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
});

const updatePassword = () => {
    form.put(route('password.update'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
        onError: () => {
            if (form.errors.password) {
                form.reset('password', 'password_confirmation');
                passwordInput.value.focus();
            }
            if (form.errors.current_password) {
                form.reset('current_password');
                currentPasswordInput.value.focus();
            }
        },
    });
};
</script>

<template>
    <section>
        <header class="flex flex-col gap-[20px] p-[30px] bg-white border border-neutral-200 rounded-lg">
            <div class="flex flex-col gap-[10px]">
                <h4 class="font-medium">Изменить пароль</h4>
                <p class="text-gray-500">Используйте длинный пароль</p>
            </div>
            <form @submit.prevent="updatePassword">
            <div class="flex flex-col gap-[15px]">
                <div class="flex flex-col gap-[10px]">
                    <InputLabel for="current_password" value="Текущий пароль" />
                    <TextInput
                        id="current_password"
                        ref="currentPasswordInput"
                        v-model="form.current_password"
                        type="password"
                        class="mt-1 block w-full"
                        autocomplete="current-password"
                    />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <InputLabel for="password" value="Новый пароль" />
                    <TextInput
                    id="password"
                    ref="passwordInput"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    autocomplete="new-password"
                />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <InputLabel
                        for="password_confirmation"
                        value="Подтверждение пароля"
                    />
                    <TextInput
                        id="password_confirmation"
                        v-model="form.password_confirmation"
                        type="password"
                        class="mt-1 block w-full"
                        autocomplete="new-password"
                    />
                </div>
            </div>
            <div class="flex items-center mt-[36px]">
            <PrimaryButton class="flex items-center justify-center w-full text-white" :disabled="form.processing">{{ form.recentlySuccessful ? 'Сохранено' : 'Сохранить изменения'}}</PrimaryButton>
            <Transition
                enter-active-class="transition ease-in-out"
                enter-from-class="opacity-0"
                leave-active-class="transition ease-in-out"
                leave-to-class="opacity-0"
            >
            </Transition>
            </div>
        </form>
        </header>
    </section>
</template>
