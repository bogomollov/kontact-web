<script setup>
import FormLayout from '@/Layouts/FormLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    login: '',
    password: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <FormLayout>
        <Head title="| Регистрация" />
        <div class="flex justify-center mb-60">
            <h1 class="text-h1 font-semibold">Регистрация</h1>
        </div>
        <form @submit.prevent="submit" class="px-1">
            <div>
                <InputLabel for="name" value="Отображаемое имя" />

                <TextInput
                    id="name"
                    type="text"
                    class="bg-dark-gray mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Введите свое имя"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="login" value="Логин" />

                <TextInput
                    id="login"
                    type="text"
                    class="bg-dark-gray mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="login"
                    placeholder="Создайте свой уникальный логин"
                />

                <InputError class="mt-2" :message="form.errors.login" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Пароль" />

                <TextInput
                    id="password"
                    type="password"
                    class="bg-dark-gray mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="password"
                    placeholder="Придумайте безопасный пароль"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="flex items-center justify-end mt-30">
                <Link :href="route('login')" class="text-p">
                    Уже есть аккаунт?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Создать аккаунт
                </PrimaryButton>
            </div>
        </form>
    </FormLayout>
</template>
