<template>
  <div class="flex justify-around text-white text-sm mb-3">
    <div class="flex items-center gap-2">
      <p>{{ data.footer.vue }}</p>
      <font-awesome-icon class="text-2xl" icon="fa-brands fa-vuejs" />
    </div>
    <a href="https://brittanychiang.com/" target="_blank">{{ data.footer.disclaimer }}</a>
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
