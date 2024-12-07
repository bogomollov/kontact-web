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
    fullname: '',
    department: '',
    email: '',
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
                <InputLabel for="fullname" value="ФИО" />

                <TextInput
                    id="fullname"
                    type="text"
                    class="bg-dark-gray mt-1 block w-full"
                    v-model="form.fullname"
                    required
                    autocomplete="fullname"
                    placeholder="Введите ФИО"
                />

                <InputError class="mt-2" :message="form.errors.fullname" />
            </div>

            <div class="mt-4">
                <InputLabel for="department" value="Наименование отдела" />

                <TextInput
                    id="department"
                    type="text"
                    class="bg-dark-gray mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="department"
                    placeholder="Введите наименование отдела"
                />

                <InputError class="mt-2" :message="form.errors.department" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Почта" />

                <TextInput
                    id="email"
                    type="email"
                    class="bg-dark-gray mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="email"
                    placeholder="Введите почту"
                />

                <InputError class="mt-2" :message="form.errors.email" />
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

                <PrimaryButton class="ms-4 text-white" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Создать аккаунт
                </PrimaryButton>
            </div>
        </form>
    </FormLayout>
</template>
