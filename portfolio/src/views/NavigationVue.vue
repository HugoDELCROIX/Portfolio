<template>
  <div class="flex flex-col text-xl h-screen justify-center items-center text-white gap-5">
    <ol class="sm:list-ordered sm:marker:text-green font-hack">
      <!-- <a href="#about-me" class="hover:text-green"
        ><li>{{ data.navigation.aboutMe }}</li></a
      > -->
      <a href="../#education" class="hover:text-green"
        ><li class="btn-nav">{{ data.navigation.education }}</li></a
      >
      <a href="../#exp-pro" class="hover:text-green"
        ><li class="btn-nav">{{ data.navigation.exp_pro }}</li></a
      >
      <a href="../#projects" class="hover:text-green"
        ><li class="btn-nav">{{ data.navigation.projects }}</li></a
      >
    </ol>
    <router-link
      class="hover:text-dark_blue hover:bg-green border border-green rounded-lg p-2"
      to="/"
      >{{ data.navigation.close }}</router-link
    >
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
