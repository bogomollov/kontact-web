<template>
    <section>
        <header class="flex flex-col gap-[20px] p-[30px] bg-white border border-neutral-200 rounded-lg">
            <div class="flex flex-col gap-[10px]">
              <h4 class="font-medium">Департаменты</h4>
              <p class="text-gray-500">Список департаментов</p>
            </div>
            <div class="border border-neutral-500 rounded-[10px]">
              <div class="flex flex-col">
                <div class="grid grid-cols-2 px-[10px] py-[5px] border-b border-neutral-500">
                    <a class="font-medium text-center">id</a>
                    <a class="font-medium text-center">name</a>
                </div>
                <div v-for="department in departmentList" :key="department.id" class="grid grid-cols-2 px-[10px] py-[8px]">
                    <p class="text-center">{{ department.id }}</p>
                    <p class="text-center">{{ department.name }}</p>
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
      departmentList: '',
    };
  },
  methods: {
    async getDepartmentList() {
      await axios.get('/api/departments').then((res) => {
        this.departmentList = res.data.data;
      });
    },
  },
  mounted() {
    this.getDepartmentList();
  }
}
</script>