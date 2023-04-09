<template>
  <div id="menu" class="flex justify-between pt-7 pb-3 w-full bg-dark_blue">
    <!-- a améliorer avec menu vertical -->

    <div class="invisible" />
    <ol
      class="list-ordered text-white marker:text-green text-xs font-hack flex justify-around w-1/2"
    >
      <a href="#about-me" class="hover:text-green"
        ><li>{{ data.navigation.aboutMe }}</li></a
      >
      <a href="#education" class="hover:text-green"
        ><li>{{ data.navigation.education }}</li></a
      >
      <a href="#exp-pro" class="hover:text-green"
        ><li>{{ data.navigation.exp_pro }}</li></a
      >
      <a href="#projects" class="hover:text-green"
        ><li>{{ data.navigation.projects }}</li></a
      >
    </ol>
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
