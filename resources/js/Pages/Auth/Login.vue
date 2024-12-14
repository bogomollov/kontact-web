<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import FormLayout from "@/Layouts/FormLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
  canResetPassword: {
    type: Boolean,
  },
  status: {
    type: String,
  },
});

const form = useForm({
  email: "",
  password: "",
  remember: false,
});

const submit = () => {
  form.post(route("login"), {
    onFinish: () => form.reset("password"),
  });
};
</script>

<template>
  <FormLayout>
    <Head title="| Войти в аккаунт" />
    <div class="flex flex-col justify-center items-center gap-[10px] mb-[30px]">
      <h2>Авторизация</h2>
      <h5 class="text-neutral-500">
        Войдите в аккаунт, чтобы общаться с коллегами
      </h5>
    </div>
    <form @submit.prevent="submit">
      <div>
        <InputLabel for="email" value="Электронная почта" />

        <TextInput
          id="email"
          type="text"
          class="mt-2 block py-[10px] pl-[12px] w-full"
          v-model="form.email"
          required
          autocomplete="email"
          placeholder="user@mail.ru"
        />

        <InputError class="mt-2" :message="form.errors.email" />
      </div>

      <div class="mt-4">
        <InputLabel for="password" value="Пароль" />

        <TextInput
          id="password"
          type="password"
          class="mt-2 block py-[10px] pl-[12px] w-full"
          v-model="form.password"
          required
          autocomplete="current-password"
          placeholder="••••••••••"
        />

        <InputError class="mt-2" :message="form.errors.password" />
      </div>

      <div class="block mt-20">
        <label class="flex items-center">
          <Checkbox name="remember" v-model:checked="form.remember" />
          <span class="ms-2 text-p">Запомнить меня</span>
        </label>
      </div>

      <div class="flex mt-20 gap-[30px] justify-end items-center">
        <Link :href="route('register')" as="button">Еще нету аккаунта?</Link>
        <PrimaryButton
          class="flex items-center justify-center text-white"
          :class="{ 'bg-blue-500': form.processing }"
          :disabled="form.processing"
        >
          Войти
        </PrimaryButton>
      </div>
    </form>
  </FormLayout>
</template>
