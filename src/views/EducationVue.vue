<template>
  <div id="education" class="page pt-10">
    <div class="section">
      <div class="education-list">
        <div class="title">
          <font-awesome-icon
            class="md:flex-shrink-0 hidden md:block"
            icon="fa-solid fa-thumb-tack"
          />
          <p class="flex-grow md:w-5/6 text-center">{{ data.navigation.education }}</p>
          <hr class="w-full md:w-3/4 border-gray-400 rounded" />
        </div>
        <div class="flex flex-col-reverse">
          <div v-for="item in data['education ']" :key="item.id" class="card mb-10">
            <img
              :src="item.img"
              :alt="item.alt"
              class="w-32 object-center object-cover h-full rounded"
            />
            <div class="flex flex-col gap-4 text-3xl">
              <p>{{ item.title }}</p>
              <div
                v-for="list in item.cycle"
                :key="list.id"
                class="flex flex-col gap-3 text-2xl flex-wrap"
              >
                <p class="flex gap-3 flex-col md:flex-row">
                  <b>{{ list.date }} </b> <span class="hidden xl:block">•</span> {{ list.title
                  }}<br />
                </p>
                <ul class="list-disc text-white marker:text-green text-base m-2">
                  <li v-for="point in list.descriptionList" :key="point.id">
                    {{ point }}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="chevron" class="text-white text-center">
      <a href="#exp-pro"><font-awesome-icon icon="fa-solid fa-chevron-down" class="w-7 h-7" /></a>
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
