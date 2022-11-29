<template>
  <div>
    <ChooseLanguage />
    <HeaderInformations />
    <ImageSection />
  </div>
</template>

<script setup>
import ChooseLanguage from "./components/ChooseLanguage.vue";
import HeaderInformations from "./components/HeaderInformations.vue";
import ImageSection from "./components/ImageSection.vue";
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
