<template>
  <div>
    <ChooseLanguage />
    <HeaderInformations />
    <AboutMe />
  </div>
</template>

<script setup>
import ChooseLanguage from "./components/ChooseLanguage.vue";
import HeaderInformations from "./components/HeaderInformations.vue";
import AboutMe from "./components/AboutMe.vue";
</script>

<style lang="postcss">
html {
  @apply scroll-smooth;
  @apply bg-background;
}
#app {
  @apply text-white;
}
</style>
