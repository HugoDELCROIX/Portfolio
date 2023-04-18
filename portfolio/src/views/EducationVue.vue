<template>
  <div id="education" class="page pt-10">
    <div class="section w-1/2 m-auto">
      <div>
        <div class="title">
          <font-awesome-icon icon="fa-solid fa-chalkboard-teacher" />
          <p class="w-2/6 text-center">{{ data.navigation.education }}</p>
          <hr class="w-3/4 border-gray-400 rounded" />
        </div>
        <div v-for="item in data['education ']" :key="item.id" class="card mb-10">
          <img
            :src="item.img"
            :alt="item.alt"
            class="w-32 object-center object-cover h-full rounded"
          />
          <div class="flex flex-col gap-4 text-3xl">
            <p>{{ item.title }}</p>
            <div v-for="list in item.cycle" :key="list.id" class="flex flex-col gap-3 text-2xl">
              <p class="flex gap-3">
                <b>{{ list.date }} </b> <span>•</span> {{ list.title }} :<br />
              </p>
              <ul class="list-disc text-white marker:text-green text-base">
                <li v-for="point in list.descriptionList" :key="point.id">
                  {{ point }}
                </li>
              </ul>
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
