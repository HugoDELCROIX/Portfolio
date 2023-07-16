<template>
  <div id="exp-pro" class="page pt-10">
    <div class="section w-1/2">
      <div class="text-dark_blue dark:text-white">
        <div class="title">
          <font-awesome-icon
            class="md:flex-shrink-0 hidden md:block"
            icon="fa-solid fa-thumb-tack"
          />
          <p class="flex-grow md:w-5/6 text-center">{{ data.navigation.exp_pro }}</p>
          <hr class="w-full md:w-2/4 border-gray-400 rounded" />
        </div>

        <p class="mb-5 text-3xl">{{ data.exp_pro.projects.title }} :</p>
        <div class="flex flex-col-reverse">
          <div v-for="item in data.exp_pro.projects.project" :key="item.id" class="card mb-10">
            <img
              :src="item.img"
              :alt="item.alt"
              class="w-32 object-center object-cover h-full rounded bg-dark_blue p-2 dark:bg-none dark:p-0"
            />
            <div class="flex flex-col gap-4 text-3xl">
              <p>
                <b>{{ item.title }} :</b> {{ item.subtitle }}
              </p>
              <p class="text-2xl">{{ item.date }}</p>
              <ul class="list-disc marker:text-light_green dark:marker:text-dark_green text-base">
                <li v-for="list in item.descriptionList" :key="list.id">{{ list }}</li>
              </ul>
            </div>
          </div>
        </div>

        <p class="mb-5 text-3xl">{{ data.exp_pro.interships.title }} :</p>
        <div class="flex flex-col-reverse text-dark_blue dark:text-white">
          <div v-for="item in data.exp_pro.interships.intership" :key="item.id" class="card mb-10">
            <img
              :src="item.img"
              :alt="item.alt"
              class="w-32 object-center object-cover h-full rounded bg-dark_blue p-2 dark:bg-none dark:p-0"
            />
            <div class="flex flex-col gap-4 text-3xl">
              <p>
                <b>{{ item.title }} :</b> {{ item.subtitle }}
              </p>
              <p class="text-2xl">{{ item.date }}</p>
              <ul class="list-disc marker:text-light_green dark:marker:text-dark_green text-base">
                <li v-for="list in item.descriptionList" :key="list.id">{{ list }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="chevron" class="text-dark_blue dark:text-white bottom-0 text-center">
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
