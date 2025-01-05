<script setup>
import FormLayout from "@/Layouts/FormLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
  firstName: "",
  lastName: "",
  middleName: "",
  department_id: "",
  role_id: "",
  username: "",
  password: "",
  email: "",
  phone: "",
});

const submit = () => {
  form.post(route("register"), {
    onFinish: () => form.reset("password"),
  });
};
</script>

<template>
  <FormLayout>
    <Head title="| Регистрация" />
    <div class="flex flex-col justify-center items-center gap-[10px] mb-[30px]">
      <h2>Регистрация</h2>
      <h5 class="text-neutral-500">
        Создайте аккаунт, чтобы общаться с коллегами
      </h5>
    </div>
    <form @submit.prevent="submit">
      <h4 class="font-medium mb-[20px]">Личные данные</h4>
      <div class="flex flex-col gap-[15px] mb-[30px]">
        <div class="flex gap-[15px]">
          <div class="w-full">
            <InputLabel for="firstName" value="Имя" />

            <TextInput
              id="firstName"
              type="text"
              class="bg-dark-gray mt-1 block px-[15px] py-[10px]"
              v-model="form.firstName"
              required
              autofocus
              autocomplete="firstName"
              placeholder="Введите имя"
            />

            <InputError class="mt-2" :message="form.errors.firstName" />
          </div>

          <div class="w-full">
            <InputLabel for="lastName" value="Фамилия" />

            <TextInput
              id="lastName"
              type="text"
              class="bg-dark-gray mt-1 block w-full px-[15px] py-[10px]"
              v-model="form.lastName"
              required
              autofocus
              autocomplete="lastName"
              placeholder="Введите фамилию"
            />

            <InputError class="mt-2" :message="form.errors.lastName" />
          </div>
          <div class="w-full">
            <InputLabel for="middleName" value="Отчество" />

            <TextInput
              id="middleName"
              type="text"
              class="bg-dark-gray mt-1 block w-full px-[15px] py-[10px]"
              v-model="form.middleName"
              required
              autofocus
              autocomplete="middleName"
              placeholder="Введите отчество"
            />

            <InputError class="mt-2" :message="form.errors.middleName" />
          </div>
        </div>
        <div class="flex items-center justify-between gap-[15px] w-full">
          <div class="w-full">
            <InputLabel for="department_id" value="Сфера деятельности" />

            <select v-model="form.department_id" v-for="data in departmentList"
              id="department_id"
              class="focus:ring-0 rounded-10 bg-dark-gray mt-1 block w-full px-[15px] py-[10px]"
              required
              autocomplete="department_id"
            >
              <option value="" disabled selected>Выберите сферу деятельности</option>
              <option :value="department.id" v-for="(department, key) in data">
                {{ department.name }}
              </option>
            </select>

            <InputError class="mt-2" :message="form.errors.department_id" />
          </div>
          <div class="w-full">
            <InputLabel for="role_id" value="Должность" />

            <select v-model="form.role_id" v-for="data in roleList"
              id="role_id"
              class="focus:ring-0 rounded-10 bg-dark-gray mt-1 block w-full px-[15px] py-[10px]"
              required
              autocomplete="role_id"
            >
              <option value="" disabled selected>Выберите должность</option>
              <option :value="role.id" v-for="(role, key) in data">
                {{ role.name }}
              </option>
            </select>

            <InputError class="mt-2" :message="form.errors.role_id" />
          </div>
        </div>
      </div>
      <h4 class="font-medium mb-[20px]">Данные аккаунта</h4>
      <div class="flex flex-col gap-[15px]">
        <div class="flex items-center justify-between gap-[15px] w-full">
          <div class="w-full">
            <InputLabel for="username" value="Отображаемое имя" />

            <TextInput
              id="username"
              type="text"
              class="bg-dark-gray mt-1 block w-full px-[15px] py-[10px]"
              v-model="form.username"
              required
              autocomplete="username"
              placeholder="Придумайте имя пользователя"
            />

            <InputError class="mt-2" :message="form.errors.username" />
          </div>
          <div class="w-full">
            <InputLabel for="password" value="Пароль" />

            <TextInput
              id="password"
              type="password"
              class="bg-dark-gray mt-1 block w-full px-[15px] py-[10px]"
              v-model="form.password"
              required
              autocomplete="password"
              placeholder="Придумайте безопасный пароль"
            />

            <InputError class="mt-2" :message="form.errors.password" />
          </div>
        </div>
        <div class="flex items-center justify-between gap-[15px] w-full">
          <div class="w-full">
            <InputLabel for="email" value="Электронная почта" />

            <TextInput
              id="email"
              type="email"
              class="bg-dark-gray mt-1 block w-full px-[15px] py-[10px]"
              v-model="form.email"
              required
              autocomplete="email"
              placeholder="Введите электронную почту"
            />

            <InputError class="mt-2" :message="form.errors.email" />
          </div>
          <div class="w-full">
            <InputLabel for="phone" value="Номер телефона" />

            <TextInput
              id="phone"
              type="tel"
              class="bg-dark-gray mt-1 block w-full px-[15px] py-[10px]"
              v-model="form.phone"
              required
              autocomplete="phone"
              placeholder="89129999999"
            />

            <InputError class="mt-2" :message="form.errors.phone" />
          </div>
        </div>
      </div>
      <div class="flex items-center justify-end mt-30 gap-[30px]">
        <Link :href="route('login')" class="text-p"> Уже есть аккаунт? </Link>

        <PrimaryButton
          class="text-white"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          Создать аккаунт
        </PrimaryButton>
      </div>
    </form>
  </FormLayout>
</template>
<script>
export default {
  data() {
    return {
      departmentList: '',
      roleList: '',
    };
  },
  methods: {
    async getDepartmentList() {
      await axios.get('/api/departments').then((res) => {
        this.departmentList = res.data;
      });
    },
    async getRoleList() {
      await axios.get('/api/roles').then((res) => {
        this.roleList = res.data;
      });
    },
  },
  mounted() {
    this.getDepartmentList();
    this.getRoleList();
  }
}
</script>
<style scoped>
select:required:invalid {
  color: gray;
}
option[value=""][disabled] {
  display: none;
}
option {
  @apply text-neutral-900;
}
</style>