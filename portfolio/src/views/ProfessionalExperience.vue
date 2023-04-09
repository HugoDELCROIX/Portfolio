<template>
  <div id="exp-pro" class="page">
    <div class="section w-1/2 m-auto">
      <div>
        <div class="flex flex-row items-center justify-between w-full mb-5">
          <font-awesome-icon icon="fa-solid fa-thumb-tack" />
          <p class="w-2/4 text-center">{{ data.navigation.exp_pro }}</p>
          <hr class="w-3/4 border-gray-400 rounded" />
        </div>
        <p class="mb-5">{{ data.exp_pro.projects.title }} :</p>
        <div v-for="item in data.exp_pro.projects.project" :key="item.id" class="card mb-10">
          <img
            :src="item.img"
            :alt="item.alt"
            class="w-32 object-center object-cover h-full rounded"
          />
          <div class="flex flex-col gap-4">
            <p>
              <b>{{ item.title }} :</b> {{ item.subtitle }}
            </p>
            <p class="text-sm">{{ item.date }}</p>
            <ul class="list-disc text-white marker:text-green text-xs">
              <li v-for="list in item.descriptionList" :key="list.id">{{ list }}</li>
            </ul>
          </div>
        </div>
        <p class="mb-5">{{ data.exp_pro.interships.title }} :</p>
        <div v-for="item in data.exp_pro.interships.intership" :key="item.id" class="card mb-10">
          <img
            :src="item.img"
            :alt="item.alt"
            class="w-32 object-center object-cover h-full rounded"
          />
          <div class="flex flex-col gap-4">
            <p>
              <b>{{ item.title }} :</b> {{ item.subtitle }}
            </p>
            <p class="text-sm">{{ item.date }}</p>
            <ul class="list-disc text-white marker:text-green text-xs">
              <li v-for="list in item.descriptionList" :key="list.id">{{ list }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="chevron" class="text-white text-center">
      <a href="#projects"><font-awesome-icon icon="fa-solid fa-chevron-down" class="w-7 h-7" /></a>
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
