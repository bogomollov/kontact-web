<template>
    <section>
        <header class="flex flex-col gap-[20px] p-[30px] bg-white border border-neutral-200 rounded-lg">
            <div class="flex flex-col gap-[10px]">
              <h4 class="font-medium">Должности</h4>
              <p class="text-gray-500">Список должностей</p>
            </div>
            <div class="border border-neutral-500 rounded-[10px]">
              <div class="flex flex-col">
                <div class="grid grid-cols-2 px-[10px] py-[5px] border-b border-neutral-500">
                    <a class="font-medium text-center">id</a>
                    <a class="font-medium text-center">name</a>
                </div>
                <div v-for="position in positionList" :key="position.id" class="grid grid-cols-2 px-[10px] py-[8px]">
                    <p class="text-center">{{ position.id }}</p>
                    <p class="text-center">{{ position.name }}</p>
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
      positionList: '',
    };
  },
  methods: {
    async getPositionList() {
      await axios.get('/api/positions').then((res) => {
        this.positionList = res.data.data;
      });
    },
  },
  mounted() {
    this.getPositionList();
  }
}
</script>