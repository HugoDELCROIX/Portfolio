<template>
  <div class="page font-krona">
    <div class="text-white flex justify-center items-center m-auto w-5/6">
      <div class="text-4xl flex flex-col gap-4 items-start m-auto">
        <p class="text-lg font-hack text-green">{{ data.home.hello }}</p>
        <p class="font-black text-gray-200">Hugo DELCROIX</p>
        <p class="text-gray-400">{{ data.home.job }}</p>
        <p class="text-base">
          {{ data.home.description }}
        </p>
        <div class="flex mt-3 justify-between text-3xl flex-wrap items-center">
          <a href="https://github.com/HugoDELCROIX" target="_blank" class="social-link"
            ><font-awesome-icon icon="fa-brands fa-github"
          /></a>
          <a href="https://www.linkedin.com/in/hugo-delcroix/" target="_blank" class="social-link"
            ><font-awesome-icon icon="fa-brands fa-linkedin-in"
          /></a>
          <a
            href="https://app.hackthebox.com/users/923613"
            target="_blank"
            class="social-link text-green"
            ><font-awesome-icon icon="fa-solid fa-cube"
          /></a>
          <a href="https://www.instagram.com/hugo.delcroix_pro/" target="_blank" class="social-link"
            ><font-awesome-icon icon="fa-brands fa-instagram"
          /></a>
          <a href="https://t.me/Hugo_DELCROIX" target="_blank" class="social-link"
            ><font-awesome-icon icon="fa-brands fa-telegram"
          /></a>
          <a href="mailto:hugo.delcroix@proton.me" target="_blank" class="social-link">
            <div class="flex items-center gap-3 border-2 border-white p-2 rounded">
              <font-awesome-icon icon="fa-solid fa-inbox" />
              <p class="text-xs w-3/4">
                {{ data.home.mail }}
              </p>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div id="chevron" class="text-white bottom-0 text-center">
      <a href="#tools"><font-awesome-icon icon="fa-solid fa-chevron-down" class="w-7 h-7" /></a>
    </div>
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
