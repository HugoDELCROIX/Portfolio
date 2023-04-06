<template>
  <div id="projects" class="page">
    <div class="section flex-col">
      <div
        v-for="item in data"
        :key="item.id"
        class="flex m-5 bg-white items-stretch p-5 border rounded-xl h-auto gap-6 w-1/2"
      >
        <img :src="item.img" alt="" class="object-cover object-center w-52 h-full rounded-xl" />
        <div class="w-full overflow-hidden whitespace-pre-wrap text-dark_blue">
          <div class="flex justify-between">
            <p>{{ item.title }} · {{ item.date }}</p>
            <p>{{ item.type }}</p>
          </div>
          <p>{{ item.subtitle }}</p>
          <p>{{ item.description }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import data from '../locales/data.json'
export default {
  data() {
    return { data: data.projects }
  }
}
</script>
