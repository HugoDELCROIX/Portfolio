<template>
  <div
    class="flex flex-col text-xl h-screen justify-center items-center text-dark_blue dark:text-white gap-5"
  >
    <ol class="sm:list-ordered sm:marker:text-light_green dark:sm:marker:text-dark_green font-hack">
      <!-- <a href="#about-me" class="dark:hover:text-dark_green"
        ><li>{{ data.navigation.aboutMe }}</li></a
      > -->
      <a href="../#certification" class="hover:text-light_green dark:hover:text-dark_green"
        ><li class="btn-nav">{{ $t('navigation.certification') }}</li></a
      >
      <a href="../#tools" class="hover:text-light_green dark:hover:text-dark_green"
        ><li class="btn-nav">{{ $t('navigation.tools') }}</li></a
      >
      <a href="../#education" class="hover:text-light_green dark:hover:text-dark_green"
        ><li class="btn-nav">{{ $t('navigation.education') }}</li></a
      >
      <a href="../#exp-pro" class="hover:text-light_green dark:hover:text-dark_green"
        ><li class="btn-nav">{{ $t('navigation.exp_pro') }}</li></a
      >
      <a href="../#projects" class="hover:text-light_green dark:hover:text-dark_green"
        ><li class="btn-nav">{{ $t('navigation.projects') }}</li></a
      >
      <a href="../#BotOfLegends" class="hover:text-light_green dark:hover:text-dark_green"
        ><li class="btn-nav">{{ $t('navigation.botOfLegends') }}</li></a
      >
    </ol>
    <router-link
      class="dark:hover:text-dark_blue hover:text-white hover:bg-light_green dark:hover:bg-dark_green border border-light_green dark:border-dark_green rounded-lg p-2"
      to="/"
      >{{ $t(`navigation.close`) }}</router-link
    >
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
