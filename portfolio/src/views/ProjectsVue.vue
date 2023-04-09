<template>
  <div id="projects" class="page">
    <div class="section flex-col m-auto w-1/2">
      <div>
        <div class="flex flex-row items-center justify-between w-full mb-5">
          <font-awesome-icon icon="fa-solid fa-diagram-project" />
          <p class="w-1/4 text-center">{{ data.navigation.projects }}</p>
          <hr class="w-3/4 border-gray-400 rounded" />
        </div>
        <div class="flex flex-col-reverse">
          <div
            v-for="item in data.projects"
            :key="item.id"
            class="bg-white text-black border-8 border-white rounded-lg mb-5 text-xs"
          >
            <div class="flex flex-col gap-5 border-2 rounded-md border-white p-3">
              <div class="flex justify-between">
                <p>
                  <b>{{ item.title }}</b> {{ item.date }}
                </p>
                <div class="flex gap-2 items-center">
                  <font-awesome-icon
                    class="text-lg"
                    v-if="item.iconType == 1"
                    icon="fa-solid fa-graduation-cap"
                  />
                  <font-awesome-icon v-else class="text-lg" icon="fa-solid fa-house-laptop" />
                  <p>
                    <b>{{ item.type }}</b>
                  </p>
                </div>
              </div>
              <p>
                <b>{{ item.subtitle }}</b>
              </p>
              <p>{{ item.description }}</p>
            </div>
            <a target="_blank" :href="item.repo.link">
              <div
                class="text-center text-xl p-1 bg-dark_blue text-white border-b-2 border-l-2 rounded-md border-r-2 border-white"
                v-if="item.repo.exist == true"
              >
                <font-awesome-icon icon="fa-brands fa-github" /></div
            ></a>
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
