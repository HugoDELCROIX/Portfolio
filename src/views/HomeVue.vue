<template>
  <div class="page font-krona">
    <div class="text-white flex justify-center items-center m-auto w-5/6">
      <div class="text-xl sm:text-4xl flex flex-col gap-4 items-start m-auto">
        <p class="text-lg font-hack text-light_green dark:text-dark_green dark:font-dark">
          {{ $t('home.hello') }}
        </p>
        <p class="font-black text-gray-800 dark:text-gray-200">Hugo DELCROIX</p>
        <p class="text-gray-600 dark:text-gray-400">{{ $t('home.job') }}</p>
        <p class="text-base text-black dark:text-white xl:w-[1000px]">
          {{ $t('home.description') }}
        </p>
        <div
          class="flex mt-3 justify-between text-3xl flex-wrap items-center text-dark_blue dark:text-white"
        >
          <a href="https://github.com/HugoDELCROIX" target="_blank" class="social-link"
            ><font-awesome-icon icon="fa-brands fa-github"
          /></a>
          <a href="https://www.linkedin.com/in/hugo-delcroix/" target="_blank" class="social-link"
            ><font-awesome-icon icon="fa-brands fa-linkedin-in"
          /></a>
          <a
            href="https://app.hackthebox.com/users/923613"
            target="_blank"
            class="social-link text-light_green dark:text-dark_green"
            ><font-awesome-icon icon="fa-solid fa-cube"
          /></a>
          <a href="https://www.instagram.com/hugo.delcroix_pro/" target="_blank" class="social-link"
            ><font-awesome-icon icon="fa-brands fa-instagram"
          /></a>
          <a href="https://t.me/Hugo_DELCROIX" target="_blank" class="social-link"
            ><font-awesome-icon icon="fa-brands fa-telegram"
          /></a>
          <a href="mailto:hugo.delcroix@proton.me" target="_blank" class="social-link">
            <div
              class="flex items-center gap-3 border-2 dark:border-white border-dark_blue hover:border-light_green p-2 rounded"
            >
              <font-awesome-icon icon="fa-solid fa-inbox" />
              <p class="text-xs w-3/4">
                {{ $t('home.mail') }}
              </p>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div id="chevron" class="text-dark_blue dark:text-white bottom-0 text-center">
      <a href="#certification"
        ><font-awesome-icon icon="fa-solid fa-chevron-down" class="w-7 h-7"
      /></a>
    </div>
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
