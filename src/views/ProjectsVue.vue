<template>
  <div id="projects" class="page pt-10">
    <div class="section flex-col w-1/2">
      <div>
        <div class="title">
          <font-awesome-icon
            class="md:flex-shrink-0 hidden md:block"
            icon="fa-solid fa-thumb-tack"
          />
          <p class="flex-grow md:w-5/6 text-center">{{ $t('navigation.projects') }}</p>
          <hr class="w-full md:w-5/6 border-gray-400 rounded" />
        </div>
        <div class="flex flex-col-reverse">
          <div
            v-for="(item, name) in data.projects"
            :key="name"
            class="bg-white text-black border-8 border-white rounded-lg mb-5 text-xs project"
          >
            <div class="flex flex-col gap-5 border-2 rounded-md border-white p-3 text-lg">
              <div class="flex justify-center flex-wrap flex-col md:justify-between md:flex-row">
                <p class="flex flex-col items-center gap-2 md:flex-none md:items-start md:flex-row">
                  <b>{{ $t(`projects.${name}.title`) }}</b> {{ $t(`projects.${name}.date`) }}
                </p>
                <div class="flex gap-2 items-center justify-center">
                  <font-awesome-icon
                    class="text-lg"
                    v-if="item.isPersonal == false"
                    icon="fa-solid fa-graduation-cap"
                  />
                  <font-awesome-icon v-else class="text-lg" icon="fa-solid fa-house-laptop" />
                  <p>
                    <b>{{ $t(`projects.${name}.type`) }}</b>
                  </p>
                </div>
              </div>
              <p>
                <b>{{ $t(`projects.${name}.subtitle`) }}</b>
              </p>
              <p>{{ $t(`projects.${name}.description`) }}</p>
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
    <div id="chevron" class="text-dark_blue dark:text-white bottom-0 text-center">
      <a href="#BotOfLegends"
        ><font-awesome-icon icon="fa-solid fa-chevron-down" class="w-7 h-7"
      /></a>
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
