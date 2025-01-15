<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm, usePage } from '@inertiajs/vue3';

const account = usePage().props.auth.account;

const formAccount = useForm({
  username: account.username,
  email: account.email,
  phone: account.phone,
});
</script>

<template>
    <section>
        <header class="flex flex-col gap-[20px] p-[30px] bg-white border border-neutral-200 rounded-lg">
            <div class="flex flex-col gap-[10px]">
              <h4 class="font-medium">Данные аккаунта</h4>
              <p class="text-gray-500">Измените данные своего аккаунта</p>
            </div>
            <form @submit.prevent="formAccount.patch(route('profile.account.update'))">
            <div class="flex flex-col gap-[15px]">
                <div class="flex flex-col gap-[10px]">
                    <InputLabel for="username" value="Отображаемое имя" />
                    <TextInput
                    id="username"
                    type="text"
                    class="block w-full"
                    v-model="formAccount.username"
                    required
                    autocomplete="username"
                    />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <InputLabel for="email" value="Электронная почта" />
                    <TextInput
                        id="email"
                        type="text"
                        class="block w-full"
                        v-model="formAccount.email"
                        required
                        autocomplete="email"
                    />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <InputLabel for="phone" value="Номер телефона" />
                    <TextInput
                        id="phone"
                        type="text"
                        class="block w-full"
                        v-model="formAccount.phone"
                        required
                        autocomplete="phone"
                    />
                </div>
            </div>
            <div class="flex items-center mt-[30px]">
              <PrimaryButton class="flex items-center justify-center w-full text-white" :disabled="formAccount.processing">{{ formAccount.recentlySuccessful ? 'Сохранено' : 'Сохранить изменения'}}</PrimaryButton>
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