<script setup>
import TextAreaInput from "@/Components/TextAreaInput.vue";
import TextInput from "@/Components/TextInput.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref } from 'vue';

const selectedUser = ref(null);

const setUser = (user) => {
  selectedUser.value = user;
};
</script>

<template>
  <Head title="Web" />
  <div class="flex h-screen">
    <div class="flex flex-col w-max h-screen pt-20 gap-[15px] border-r border-neutral-200">
        <div class="flex flex-col gap-30 w-max">
            <AuthenticatedLayout/>
            <div class="flex px-20">
                <label class="flex-1">
                <TextInput
                    type="text"
                    class="block px-[12px] py-[12px] border-neutral-300 bg-transparent pl-[58px] w-full text-base"
                    placeholder="Поиск"
                />
                </label>
            </div>
            <div class="flex px-20 items-center justify-between border-b pb-[15px]">
                <Link :href="route('logout')" as="button">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-15 hover:bg-neutral-100 w-full rounded-[10px] px-[20px] py-[5px]">
                            <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6.3C1 4.61984 1 3.77976 1.32698 3.13803C1.6146 2.57354 2.07354 2.1146 2.63803 1.82698C3.27976 1.5 4.11984 1.5 5.8 1.5H10.2C11.8802 1.5 12.7202 1.5 13.362 1.82698C13.9265 2.1146 14.3854 2.57354 14.673 3.13803C15 3.77976 15 4.61984 15 6.3V19.5L8 15.5L1 19.5V6.3Z" stroke="#737373" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a class="text-neutral-500">Избранное</a>
                        </div>
                    </div>
                </Link>
                <Link :href="route('logout')" as="button">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-15 hover:bg-neutral-100 w-full rounded-[10px] px-[20px] py-[5px]">
                            <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 19.5V13.5M15 16.5H21M11 13.5H7C5.13623 13.5 4.20435 13.5 3.46927 13.8045C2.48915 14.2105 1.71046 14.9892 1.30448 15.9693C1 16.7044 1 17.6362 1 19.5M14.5 1.79076C15.9659 2.38415 17 3.82131 17 5.5C17 7.17869 15.9659 8.61585 14.5 9.20924M12.5 5.5C12.5 7.70914 10.7091 9.5 8.5 9.5C6.29086 9.5 4.5 7.70914 4.5 5.5C4.5 3.29086 6.29086 1.5 8.5 1.5C10.7091 1.5 12.5 3.29086 12.5 5.5Z" stroke="#737373" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a class="text-neutral-500">Создать группу</a>
                        </div>
                    </div>
                </Link>
            </div>
        </div>
        <div v-if="userList">
            <div v-for="data in userList" class="flex flex-col pl-[20px] pr-[5px] overflow-y-scroll chat">
            <div v-for="(user, key) in data" @click="setUser(user)" :class="['flex items-center justify-between h-[70px] w-full rounded-[15px] pl-[10px]', user.id === selectedUser?.id ? 'bg-neutral-200' : 'hover:bg-neutral-100']">
                <div class="flex items-center gap-15">
                    <img src="../../images/avatar.png">
                    <h5>{{ user.firstName }} {{ user.lastName }}</h5>
                </div>
            </div>
            </div>
        </div>
        <h5 v-else class="flex items-center justify-center">Нет сохраненных чатов</h5>
    </div>
    <div v-if="selectedUser" class="flex flex-col w-full h-screen">
    <div
      class="flex w-full items-center justify-between h-[95px] py-[17.5px] px-30 mb-30 border-b border-neutral-200"
    >
      <div class="flex gap-15 items-center">
        <img src="../../images/avatar.png" />
        <div>
          <h4 class="text-neutral-950">{{ selectedUser.firstName }} {{ selectedUser.lastName }}</h4>
          <p v-if="selectedUser.last_activity" class="text-base text-neutral-500">в сети</p>
          <p v-else class="text-base text-neutral-500">офлайн</p>
        </div>
      </div>
      <div class="flex px-20 w-1/3">
        <label class="flex-1">
          <TextInput
            type="text"
            class="block px-[12px] py-[12px] border-neutral-300 bg-transparent pl-[58px] w-full text-base"
            placeholder="Поиск по сообщениям"
          />
        </label>
      </div>
      <svg
        width="22"
        height="22"
        viewBox="0 0 22 22"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M11 15V11M11 7H11.01M21 11C21 16.5228 16.5228 21 11 21C5.47715 21 1 16.5228 1 11C1 5.47715 5.47715 1 11 1C16.5228 1 21 5.47715 21 11Z"
          stroke="#737373"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </div>
    <div class="flex flex-col pr-15 pl-30 h-[100%] overflow-y-scroll chat">
      <div class="message message-in">
        <a>message-in</a>
        <div class="flex gap-[8px] items-center justify-center">
          <small>10:06</small>
        </div>
      </div>
      <div class="message message-in">
        <a>message-in</a>
        <div class="flex gap-[8px] items-center justify-center">
          <small>18:56</small>
        </div>
      </div>
      <div class="message message-out">
        <a>message-out</a>
        <div class="flex gap-[8px] items-center justify-center">
          <small>09:50</small>
          <svg
            width="18"
            height="10"
            viewBox="0 0 18 10"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M4.86217 5.25619L8.72398 9.118L17 0.842773M1 5.29543L4.86182 9.15724M13.137 0.882012L8.99938 5.01967"
              stroke="#3B82F6"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </div>
      </div>
      <div class="message message-out">
        <a>message-out message-out message-out message-out message-out</a>
        <div class="flex gap-[8px] items-center justify-center">
          <small>09:50</small>
          <svg
            width="18"
            height="10"
            viewBox="0 0 18 10"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M4.86217 5.25619L8.72398 9.118L17 0.842773M1 5.29543L4.86182 9.15724M13.137 0.882012L8.99938 5.01967"
              stroke="#3B82F6"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </div>
      </div>
      <div class="message message-in">
        <a>message-in</a>
        <div class="flex gap-[8px] items-center justify-center">
          <small>18:56</small>
        </div>
      </div>
    </div>
    <div
      class="flex flex-col justify-between mx-[30px] p-[16px] rounded-10 gap-[15px] mb-30 border border-neutral-300"
    >
      <TextAreaInput
        type="text"
        class="overflow-y-scroll chat"
        placeholder="Сообщение"
      />
      <div class="flex w-full justify-between items-center">
        <div class="flex gap-[20px] items-center">
          <svg
            width="20"
            height="20"
            viewBox="0 0 20 20"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M6.4 11.8C6.4 11.8 7.75 13.6 10 13.6C12.25 13.6 13.6 11.8 13.6 11.8M12.7 7.3H12.709M7.3 7.3H7.309M19 10C19 14.9706 14.9706 19 10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10ZM13.15 7.3C13.15 7.54853 12.9485 7.75 12.7 7.75C12.4515 7.75 12.25 7.54853 12.25 7.3C12.25 7.05147 12.4515 6.85 12.7 6.85C12.9485 6.85 13.15 7.05147 13.15 7.3ZM7.75 7.3C7.75 7.54853 7.54853 7.75 7.3 7.75C7.05147 7.75 6.85 7.54853 6.85 7.3C6.85 7.05147 7.05147 6.85 7.3 6.85C7.54853 6.85 7.75 7.05147 7.75 7.3Z"
              stroke="#737373"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <svg
            width="20"
            height="20"
            viewBox="0 0 20 20"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M14.2 19H4.93137C4.32555 19 4.02265 19 3.88238 18.8802C3.76068 18.7763 3.69609 18.6203 3.70865 18.4608C3.72312 18.2769 3.93731 18.0627 4.36569 17.6343L12.8686 9.13137C13.2646 8.73536 13.4627 8.53735 13.691 8.46316C13.8918 8.3979 14.1082 8.3979 14.309 8.46316C14.5373 8.53735 14.7354 8.73535 15.1314 9.13137L19 13V14.2M14.2 19C15.8802 19 16.7202 19 17.362 18.673C17.9265 18.3854 18.3854 17.9265 18.673 17.362C19 16.7202 19 15.8802 19 14.2M14.2 19H5.8C4.11984 19 3.27976 19 2.63803 18.673C2.07354 18.3854 1.6146 17.9265 1.32698 17.362C1 16.7202 1 15.8802 1 14.2V5.8C1 4.11984 1 3.27976 1.32698 2.63803C1.6146 2.07354 2.07354 1.6146 2.63803 1.32698C3.27976 1 4.11984 1 5.8 1H14.2C15.8802 1 16.7202 1 17.362 1.32698C17.9265 1.6146 18.3854 2.07354 18.673 2.63803C19 3.27976 19 4.11984 19 5.8V14.2M8.5 6.5C8.5 7.60457 7.60457 8.5 6.5 8.5C5.39543 8.5 4.5 7.60457 4.5 6.5C4.5 5.39543 5.39543 4.5 6.5 4.5C7.60457 4.5 8.5 5.39543 8.5 6.5Z"
              stroke="#737373"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <svg
            width="18"
            height="19"
            viewBox="0 0 18 19"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M17 8.60776L8.97628 16.6315C7.1516 18.4562 4.1932 18.4562 2.36851 16.6315C0.543829 14.8068 0.543829 11.8484 2.36851 10.0237L10.3922 1.99999C11.6087 0.783532 13.581 0.783532 14.7974 1.99999C16.0139 3.21645 16.0139 5.18871 14.7974 6.40517L7.08835 14.1142C6.48012 14.7225 5.49399 14.7225 4.88576 14.1142C4.27753 13.506 4.27753 12.5199 4.88576 11.9116L11.6509 5.14654"
              stroke="#737373"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </div>
        <svg
          width="21"
          height="19"
          viewBox="0 0 21 19"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M9.21844 9.43253H3.71844M3.63379 9.72403L1.29887 16.6987C1.11543 17.2467 1.02372 17.5206 1.08954 17.6894C1.1467 17.8359 1.26946 17.947 1.42094 17.9892C1.59538 18.0379 1.85884 17.9193 2.38578 17.6822L19.0972 10.1621C19.6116 9.93062 19.8687 9.8149 19.9482 9.65414C20.0173 9.51447 20.0173 9.35059 19.9482 9.21093C19.8687 9.05016 19.6116 8.93444 19.0972 8.703L2.37995 1.18025C1.85461 0.94385 1.59194 0.825648 1.41767 0.874136C1.26633 0.916246 1.14358 1.02703 1.08623 1.17327C1.02018 1.34167 1.11092 1.61505 1.29239 2.1618L3.63444 9.21806C3.66561 9.31197 3.68119 9.35892 3.68734 9.40694C3.6928 9.44955 3.69275 9.49269 3.68718 9.53529C3.6809 9.58329 3.6652 9.63021 3.63379 9.72403Z"
            stroke="#737373"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </div>
    </div>
  </div>
  <div v-else class="flex w-full bg-neutral-50">
    <h4 class="flex items-center w-full justify-center">Выберите собеседника из списка, представленного в левой части экрана или найдите его через поиск</h4>
  </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      userList: '',
    };
  },
  methods: {
    async getUserList() {
      await axios.get('/api/users').then((res) => {
        this.userList = res.data;
      });
    },
  },
  mounted() {
    this.getUserList();
  }
}
</script>
<style scoped>
.message {
  @apply flex items-center justify-center gap-[12px] text-neutral-900 px-10 py-8 rounded-[10px];
  width: max-content;
  overflow-wrap: break-word;
  margin-bottom: 10px;
  max-width: 50%;
}
.message-in {
  @apply bg-neutral-200;
  margin-right: auto;
}
.message-in small {
  @apply text-neutral-500;
}
.message-out {
  @apply bg-blue-200;
  margin-left: auto;
}
.message-out small {
  @apply text-blue-500;
}
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
  height: 50px;
  background: url("../../images/search.svg") center / contain no-repeat;
}
</style>