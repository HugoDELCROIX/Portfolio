<template>
  <div class="flex flex-col items-center font-bold mb-10">
    <h1 class="shadowed text-[2.094rem]">Hugo DELCROIX</h1>
    <h2 class="shadowed text-[1.245rem]">
      Étudiant en Informatique et Réseaux
    </h2>
    <div class="flex items-center justify-around w-80 m-auto mt-4 text-4xl">
      <a class="clickable" href="https://www.linkedin.com/in/hugo-delcroix/"
        ><font-awesome-icon icon="fa-brands fa-linkedin"
      /></a>
      <a class="clickable" href="https://github.com/HugoDELCROIX"
        ><font-awesome-icon icon="fa-brands fa-square-github"
      /></a>
      <a class="clickable" href="https://www.instagram.com/hugo.delcroix_pro/"
        ><font-awesome-icon icon="fa-brands fa-square-instagram"
      /></a>
      <a class="clickable" href=""
        ><font-awesome-icon icon="fa-solid fa-square-envelope"
      /></a>
    </div>
    <a
      :href="getResume"
      target="_blank"
      class="clickable button-cv mt-10 bg-section p-2 rounded-md border-white border-2 hover:bg-background"
      >Voir mon CV</a
    >
  </div>
</template>

<script>
import { computed } from "vue";

export default {
  data() {
    const getResume = computed(() => {
      return new URL("../assets/cv.pdf", import.meta.url).href;
    });

    return {
      getResume,
    };
  },
};
</script>
