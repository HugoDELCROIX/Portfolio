<template>
  <div
    class="flex flex-col sm:flex-row sm:justify-around items-center justify-center text-dark_blue dark:text-white text-sm mb-3"
  >
    <div class="flex items-center gap-2">
      <p>{{ data.footer.vue }}</p>
      <font-awesome-icon class="text-2xl" icon="fa-brands fa-vuejs" />
    </div>
    <div class="flex items-center gap-2">
      <a href="https://creativecommons.org/licenses/by-nc/4.0/">{{ data.footer.rights }}</a>
      <font-awesome-icon class="text-xl" icon="fa-brands fa-creative-commons" />
      <font-awesome-icon class="text-xl" icon="fa-brands fa-creative-commons-nc-eu" />
      <font-awesome-icon class="text-xl" icon="fa-brands fa-creative-commons-by" />
    </div>
    <p>{{ version }}</p>
  </div>
</template>

<script>
import data from '../locales/data.json'
import { ref, onBeforeMount } from 'vue'
export default {
  data() {
    return { data: data }
  },
  setup() {
    let version = ref('')

    onBeforeMount(() => {
      fetch('https://api.github.com/repos/HugoDELCROIX/Portfolio/releases', {
        headers: {
          Accept: 'application/vnd.github+json'
        }
      })
        .then((response) => response.json())
        .then((data) => (version.value = data[0].tag_name))
    })

    return { version }
  }
}
</script>
