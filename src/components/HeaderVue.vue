<template>
  <button
    class="absolute h-[74px] w-[74px] left-5 sm:left-10 top-5 sm:top-10 text-dark_blue dark:text-white pt-2 pb-2 pl-3 pr-3 transition duration-200 border-2 border-dark_blue dark:border-white rounded-md bg-light dark:bg-dark_blue hover:border-light_green hover:text-light_green dark:hover:border-dark_green dark:hover:text-dark_green"
    v-on:click="changeLanguage"
  >
    <div class="flex flex-col justify-center items-center">
      <font-awesome-icon class="w-10 text-3xl" icon="fa-solid fa-language" />
      <div class="flex justify-center items-center gap-2">
        <font-awesome-icon class="w-5 text-xl" icon="fa-solid fa-arrow-right" />
        <p v-if="$i18n.locale === 'fr'" class="font-hack font-bold">EN</p>
        <p v-if="$i18n.locale === 'en'" class="font-hack font-bold">FR</p>
      </div>
    </div>
  </button>
  <button
    v-on:click="toggleDark()"
    class="absolute h-[74px] right-1/2 top-5 sm:top-10 pt-2 pb-2 pl-3 pr-3 dark:border-white border-2 rounded-md border-dark_blue text-dark_blue dark:text-white"
    style="margin-right: -82px"
  >
    <div class="flex flex-col justify-center items-center">
      <div class="flex justify-center items-center gap-2 text-3xl">
        <font-awesome-icon class="w-10 text-2xl" icon="fa-solid fa-sun" />
        <font-awesome-icon v-if="isDark" class="w-10" icon="fa-solid fa-toggle-on" />
        <font-awesome-icon v-if="!isDark" class="w-10" icon="fa-solid fa-toggle-off" />
        <font-awesome-icon class="w-10 text-2xl" icon="fa-solid fa-moon" />
      </div>
      <p v-if="!isDark" class="font-hack font-bold">Dark mode</p>
      <p v-if="isDark" class="font-hack font-bold">Light mode</p>
    </div>
  </button>
  <button
    class="fixed h-[74px] w-[74px] right-5 sm:right-10 top-5 sm:top-10 text-dark_blue dark:text-white pt-2 pb-2 pl-3 pr-3 transition duration-200 border-2 border-dark_blue dark:border-white rounded-md bg-light dark:bg-dark_blue hover:border-light_green hover:text-light_green dark:hover:border-dark_green dark:hover:text-dark_green"
    v-on:click="toggleMenu()"
  >
    <div class="flex flex-col justify-center items-center">
      <font-awesome-icon class="w-10 text-3xl" icon="fa-solid fa-bars" />
      <p class="font-hack font-bold">Menu</p>
    </div>
  </button>
</template>

<script>
import { ref } from 'vue'
import { useI18n } from 'vue-i18n'
import { useRouter } from 'vue-router'
import { useDark, useToggle } from '@vueuse/core'
export default {
  setup() {
    const isHidden = ref(true)
    const isDark = useDark()
    const toggleDark = useToggle(isDark)
    const router = useRouter()

    function toggleMenu() {
      router.push('/menu')
    }

    return { toggleMenu, isHidden, toggleDark, isDark }
  },
  methods: {
    changeLanguage() {
      const newLocale = this.$i18n.locale === 'fr' ? 'en' : 'fr'
      this.$i18n.locale = newLocale
      localStorage.setItem('locale', newLocale)
    }
  }
}
</script>
