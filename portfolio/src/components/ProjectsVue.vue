<template>
  <div id="projects" class="page">
    <div class="section flex-col m-auto w-1/2">
      <div>
        <div class="flex flex-row items-center justify-between w-full mb-5">
          <p class="w-1/4 text-center">{{ data.navigation.projects }}</p>
          <hr class="w-3/4 border-gray-400 rounded" />
        </div>
        <div
          v-for="item in data.projects"
          :key="item.id"
          class="flex m-5 bg-white items-stretch p-5 border rounded-xl h-auto gap-6 shadow-2xl cursor-pointer mb-7"
        >
          <img :src="item.img" alt="" class="object-cover object-center w-60 h-full rounded-xl" />
          <div class="w-full overflow-hidden whitespace-pre-wrap text-dark_blue">
            <div class="flex justify-between mb-3">
              <p>
                <b>{{ item.title }}</b> · {{ item.date }}
              </p>
              <p>{{ item.type }}</p>
            </div>
            <p class="mb-3">{{ item.subtitle }}</p>
            <p>{{ item.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import data from '../locales/data.json'
export default {
  data() {
    return { data: data }
  }
}
</script>
