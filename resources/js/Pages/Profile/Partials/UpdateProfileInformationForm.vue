<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;
const person = usePage().props.person;

const formPerson = useForm({
    photo: person.photo,
    firstName: person.firstName,
    lastName: person.lastName,
    middleName: person.middleName,
    department_id: person.department_id,
    role_id: person.role_id,
});

const formAccount = useForm({
    username: user.username,
    email: user.email,
    phone: user.phone,
});
</script>

<template>
    <section>
        <header class="flex flex-col gap-[20px] p-[30px] bg-white border border-neutral-200 rounded-lg">
            <div class="flex flex-col gap-[10px]">
                <h4 class="font-medium">Информация профиля</h4>
                <p class="text-gray-500">Обновите сведения своего профиля</p>
            </div>
            <form
            @submit.prevent="form.patch(route('profile.update'))">
            <div class="flex flex-col gap-[15px]">
                <div class="flex flex-col gap-[10px]">
                    <InputLabel value="Фотография" />
                    <img :src="`/storage/${$page.props.auth.user.id}.png`" class="w-[60px] h-[60px]">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <InputLabel for="firstName" value="Имя" />
                    <TextInput
                    id="firstName"
                    type="text"
                    class="block w-full"
                    v-model="formPerson.firstName"
                    required
                    autocomplete="firstName"
                    />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <InputLabel for="lastName" value="Фамилия" />
                    <TextInput
                        id="lastName"
                        type="text"
                        class="block w-full"
                        v-model="formPerson.lastName"
                        required
                        autocomplete="lastName"
                    />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <InputLabel for="middleName" value="Отчество" />
                    <TextInput
                        id="middleName"
                        type="text"
                        class="block w-full"
                        v-model="formPerson.middleName"
                        required
                        autocomplete="middleName"
                    />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <InputLabel for="department_id" value="Сфера деятельности" />
                    <select v-model="formPerson.department_id" v-for="data in departmentList"
                        id="department_id"
                        class="truncate focus:ring-0 rounded-10 bg-dark-gray mt-1 block w-full pr-[30px] pl-[15px] py-[10px]"
                        required
                        autocomplete="department_id"
                    >
                    <option value="" disabled selected>Выберите сферу деятельности</option>
                    <option :value="department.id" v-for="(department, key) in data">
                        {{ department.name }}
                    </option>
                    </select>
                </div>
                <div class="flex flex-col gap-[10px]">
                    <InputLabel for="role_id" value="Должность" />
                    <select v-model="formPerson.role_id" v-for="data in roleList"
                        id="role_id"
                        class="truncate focus:ring-0 rounded-10 bg-dark-gray mt-1 block w-full pr-[30px] pl-[15px] py-[10px]"
                        required
                        autocomplete="role_id"
                    >
                    <option value="" disabled selected>Выберите должность</option>
                    <option :value="role.id" v-for="(role, key) in data">
                        {{ role.name }}
                    </option>
                    </select>
                </div>
            </div>
        </form>
        <div class="flex items-center">
                <PrimaryButton class="flex items-center justify-center w-full text-white" :disabled="formPerson.processing">Сохранить изменения</PrimaryButton>
                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                <p v-if="formPerson.recentlySuccessful" class="text-sm text-gray-500">Сохранено</p>
                </Transition>
            </div>
        </header>
    </section>
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