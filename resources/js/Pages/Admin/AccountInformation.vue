<template>
    <section>
        <header class="flex flex-col gap-[20px] p-[30px] bg-white border border-neutral-200 rounded-lg">
            <div class="flex flex-col gap-[10px]">
              <h4 class="font-medium">Аккаунты</h4>
              <p class="text-gray-500">Список аккаунтов</p>
            </div>
            <div class="border border-neutral-500 rounded-[10px]">
                <div class="flex flex-col">
                <div class="grid grid-cols-6 px-[10px] py-[5px] border-b border-neutral-500">
                    <a class="font-medium text-center">id</a>
                    <a class="font-medium text-center">user_id</a>
                    <a class="font-medium text-center">username</a>
                    <a class="font-medium text-center">email</a>
                    <a class="font-medium text-center">phone</a>
                    <a class="font-medium text-center">role</a>
                </div>
                <div v-for="account in accountList" :key="account.id" class="grid grid-cols-6 px-[10px] py-[8px]">
                    <p class="text-center">{{ account.id }}</p>
                    <p class="text-center">{{ account.user_id }}</p>
                    <p class="text-center">{{ account.username }}</p>
                    <p class="text-center">{{ account.email }}</p>
                    <p class="text-center">{{ account.phone }}</p>
                    <p class="text-center">{{ account.role }}</p>
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
      accountList: '',
    };
  },
  methods: {
    async getAccountList() {
      await axios.get('/api/accounts').then((res) => {
        this.accountList = res.data.data;
      });
    },
  },
  mounted() {
    this.getAccountList();
  }
}
</script>
