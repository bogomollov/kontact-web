<template>
    <section>
        <header class="flex flex-col gap-[20px] p-[30px] bg-white border border-neutral-200 rounded-lg">
            <div class="flex flex-col gap-[10px]">
              <h4 class="font-medium">Пользователи</h4>
              <p class="text-gray-500">Список пользователей</p>
            </div>
            <div class="border border-neutral-500 rounded-[10px]">
              <div class="flex flex-col">
                <div class="grid grid-cols-6 px-[10px] py-[5px] border-b border-neutral-500">
                    <a class="font-medium text-center">id</a>
                    <a class="font-medium text-center">first_name</a>
                    <a class="font-medium text-center">last_name</a>
                    <a class="font-medium text-center">middle_name</a>
                    <a class="font-medium text-center">department_id</a>
                    <a class="font-medium text-center">role_id</a>
                </div>
                <div v-for="user in userList" :key="user.id" class="grid grid-cols-6 px-[10px] py-[8px]">
                    <p class="text-center">{{ user.id }}</p>
                    <p class="text-center">{{ user.firstName }}</p>
                    <p class="text-center">{{ user.lastName }}</p>
                    <p class="text-center">{{ user.middleName }}</p>
                    <p class="text-center">{{ user.department_id }}</p>
                    <p class="text-center">{{ user.role_id }}</p>
                </div>
              </div>
            </div>
        </header>
    </section>
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
        this.userList = res.data.data;
      });
    },
  },
  mounted() {
    this.getUserList();
  }
}
</script>
