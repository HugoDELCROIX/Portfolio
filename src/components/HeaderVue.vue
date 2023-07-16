<template>
  <button
    v-on:click="toggleDark()"
    class="flex justify-between items-center absolute right-1/2 top-10 text-3xl pt-2 pb-2 pl-3 pr-3 h-14 dark:border-white border-2 rounded-md border-dark_blue"
  >
    <font-awesome-icon
      class="w-10 text-dark_blue text-2xl dark:text-white"
      icon="fa-solid fa-sun"
    />
    <font-awesome-icon
      v-if="isDark"
      class="w-10 text-dark_blue dark:text-white"
      icon="fa-solid fa-toggle-on"
    />
    <font-awesome-icon
      v-if="!isDark"
      class="w-10 text-dark_blue dark:text-white"
      icon="fa-solid fa-toggle-off"
    />
    <font-awesome-icon
      class="w-10 text-2xl text-dark_blue dark:text-white"
      icon="fa-solid fa-moon"
    />
  </button>
  <button
    class="fixed right-10 top-10 text-dark_blue dark:text-white h-14 text-3xl pt-2 pb-2 pl-3 pr-3 transition duration-200 border-2 border-dark_blue dark:border-white rounded-md bg-light dark:bg-dark_blue hover:border-light_green hover:text-light_green dark:hover:border-dark_green dark:hover:text-dark_green"
    v-on:click="toggle()"
  >
    <font-awesome-icon class="w-10" icon="fa-solid fa-bars" />
  </button>
</template>

<script>
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import { useDark, useToggle } from '@vueuse/core'
export default {
  setup() {
    const isHidden = ref(true)
    const isDark = useDark()
    const toggleDark = useToggle(isDark)
    const router = useRouter()

    function toggle() {
      router.push('/menu')
    }

    return { toggle, isHidden, toggleDark, isDark }
  }
}
</script>
