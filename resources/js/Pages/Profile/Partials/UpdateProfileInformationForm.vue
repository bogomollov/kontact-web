<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';
import axios from 'axios';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;

const inputAvatar = ref(null);
const uploadAvatar = ref(null);
const ObjectURL = ref(null);

const formPerson = useForm({
    firstName: user.firstName,
    lastName: user.lastName,
    middleName: user.middleName,
    department_id: user.department_id,
    position_id: user.position_id,
});

const uploadImage = (e) => {
    const file = e.target.files[0];
    if (!file) return;
    uploadAvatar.value = file;
    ObjectURL.value = URL.createObjectURL(file);
}

const applyChanges = () => {
    if (uploadAvatar.value) {
        const formData = new FormData();
        formData.append('image', uploadAvatar.value);
        axios.post(route('profile.upload-image'), formData);
    }
    formPerson.patch(route('profile.update'));
}
</script>

<template>
    <section>
        <header class="flex flex-col gap-[20px] p-[30px] bg-white border border-neutral-200 rounded-lg">
            <div class="flex flex-col gap-[10px]">
                <h4 class="font-medium">Информация профиля</h4>
                <p class="text-gray-500">Обновите сведения своего профиля</p>
            </div>
            <form @submit.prevent="applyChanges">
            <div class="flex flex-col gap-[15px]">
                <div class="flex flex-col gap-[10px]">
                    <InputLabel value="Фотография" />
                    <div class="relative">
                        <img v-show="!uploadAvatar" :src="`/storage/${$page.props.auth.user.id}.webp`" class="border border-neutral-500 rounded-full w-[60px] h-[60px] object-cover cursor-pointer" @click="inputAvatar.click()">
                        <img v-show="uploadAvatar" :src="ObjectURL" class="border border-neutral-500 rounded-full w-[60px] h-[60px] object-cover cursor-pointer">
                        <input type="file" ref="inputAvatar" class="hidden" accept="image/*" @change="uploadImage">
                    </div>
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
                    <InputLabel for="position_id" value="Должность" />
                    <select v-model="formPerson.position_id" v-for="data in positionList"
                        id="position_id"
                        class="truncate focus:ring-0 rounded-10 bg-dark-gray mt-1 block w-full pr-[30px] pl-[15px] py-[10px]"
                        required
                        autocomplete="position_id"
                    >
                    <option value="" disabled selected>Выберите должность</option>
                    <option :value="position.id" v-for="(position, key) in data">
                        {{ position.name }}
                    </option>
                    </select>
                </div>
            </div>
            <div class="flex items-center mt-[30px]">
            <PrimaryButton class="flex items-center justify-center w-full text-white" :disabled="formPerson.processing">{{ formPerson.recentlySuccessful ? 'Сохранено' : 'Сохранить изменения'}}</PrimaryButton>
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
<script>
export default {
  data() {
    return {
      departmentList: '',
      positionList: '',
    };
  },
  methods: {
    async getDepartmentList() {
      await axios.get('/api/departments').then((res) => {
        this.departmentList = res.data;
      });
    },
    async getPositionList() {
      await axios.get('/api/positions').then((res) => {
        this.positionList = res.data;
      });
    },
  },
  mounted() {
    this.getDepartmentList();
    this.getPositionList();
  }
}
</script>
