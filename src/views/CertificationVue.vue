<template>
  <div id="certification" class="page pt-10">
    <div class="section">
      <div class="education-list">
        <div class="title">
          <font-awesome-icon
            class="md:flex-shrink-0 hidden md:block"
            icon="fa-solid fa-thumb-tack"
          />
          <p class="flex-grow md:w-5/6 text-center">
            {{ $t('navigation.certification') }}
          </p>
          <hr class="w-full md:w-3/4 border-gray-400 rounded" />
        </div>
        <div class="flex flex-col-reverse text-dark_blue dark:text-white">
          <div
            v-for="(item, certif) in data.certifications"
            :key="certif"
            class="flex flex-col gap-10 items-center md:flex-row md:items-center mb-10"
          >
            <img
              :src="item.img"
              :alt="item.alt"
              class="w-32 object-center object-cover h-full rounded bg-dark_blue p-2 dark:bg-none dark:p-0"
            />
            <div class="flex flex-col text-2xl items-start md:text-3xl">
              <div class="flex flex-row gap-4">
                <p>
                  <b>{{ $t(`certifications.${certif}.title`) }}</b>
                </p>
                <p>:</p>
                <p>{{ $t(`certifications.${certif}.description`) }}</p>
              </div>
              <div class="flex flex-row gap-4">
                <p>
                  <b>{{ $t(`certifications.${certif}.date.description`) }}</b>
                </p>
                <p>:</p>
                <p>{{ $t(`certifications.${certif}.date.date`) }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="chevron" class="text-dark_blue dark:text-white bottom-0 text-center">
      <a href="#tools"><font-awesome-icon icon="fa-solid fa-chevron-down" class="w-7 h-7" /></a>
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
