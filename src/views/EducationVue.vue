<template>
  <div id="education" class="page pt-10">
    <div class="section">
      <div class="education-list">
        <div class="title">
          <font-awesome-icon
            class="md:flex-shrink-0 hidden md:block"
            icon="fa-solid fa-thumb-tack"
          />
          <p class="flex-grow md:w-5/6 text-center">
            {{ $t('navigation.education') }}
          </p>
          <hr class="w-full md:w-3/4 border-gray-400 rounded" />
        </div>
        <div class="flex flex-col-reverse text-dark_blue dark:text-white">
          <div v-for="(item, cycle) in data.education" :key="cycle" class="card mb-10">
            <img
              :src="item.img"
              :alt="item.alt"
              class="w-32 object-center object-cover h-full rounded bg-dark_blue p-2 dark:bg-none dark:p-0"
            />
            <div class="flex flex-col gap-4 text-3xl">
              <p>{{ $t(`education.${cycle}.title`) }}</p>
              <div
                v-for="(list, level) in item.cycle"
                :key="level"
                class="flex flex-col gap-3 text-2xl flex-wrap"
              >
                <p class="flex gap-3 flex-col xl:flex-row">
                  <b>{{ $t(`education.${cycle}.cycle.${level}.date`) }} </b>
                  <span class="hidden xl:block">•</span>
                  {{ $t(`education.${cycle}.cycle.${level}.title`) }}<br />
                </p>
                <ul
                  class="list-disc marker:text-light_green dark:marker:text-dark_green text-base m-2"
                >
                  <li v-for="(point, dot) in list.descriptionList" :key="dot">
                    {{ $t(`education.${cycle}.cycle.${level}.descriptionList.${dot}`) }}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="chevron" class="text-dark_blue dark:text-white bottom-0 text-center">
      <a href="#exp-pro"><font-awesome-icon icon="fa-solid fa-chevron-down" class="w-7 h-7" /></a>
    </div>
  </div>
</template>

<script>
import data from '../locales/fr.json'
export default {
  data() {
    return { data: data }
  }
}
</script>
