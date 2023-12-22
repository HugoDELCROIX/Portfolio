<template>
  <div id="BotOfLegends" class="page font-krona">
    <HeaderVue></HeaderVue>
    <div class="text-white flex justify-center items-center m-auto w-5/6">
      <div class="text-xl sm:text-4xl flex flex-col gap-4 items-start m-auto">
        <p class="text-lg font-hack text-light_green dark:text-dark_green dark:font-dark">
          {{ $t('botOfLegends.discover') }}
        </p>
        <p class="font-black text-gray-800 dark:text-gray-200">Bot Of Legends</p>
        <p class="text-gray-600 dark:text-gray-400">{{ $t('botOfLegends.botSecondTitle') }}</p>
        <p class="text-base text-black dark:text-white xl:w-[1000px]">
          {{ $t('botOfLegends.description') }}
        </p>
      </div>
    </div>

    <div id="chevron" class="text-dark_blue dark:text-white bottom-0 text-center">
      <a href="#exemple"><font-awesome-icon icon="fa-solid fa-chevron-down" class="w-7 h-7" /></a>
    </div>
  </div>

  <div class="page" id="exemple">
    <p class="text-black dark:text-white text-center text-2xl mt-5">
      {{ $t('botOfLegends.discordSimulation.presentMessage') }}
    </p>
    <div class="w-1/2 m-auto bg-discord rounded-lg font-roboto">
      <div class="text-white font-sans p-4">
        <div class="w-1/2 ml-10">
          <div class="p-3 rounded mb-4">
            <div class="flex gap-2 items-center mb-2 -ml-10">
              <img
                src="https://images-eds-ssl.xboxlive.com/image?url=4rt9.lXDC4H_93laV1_eHHFT949fUipzkiFOBH3fAiZZUCdYojwUyX2aTonS1aIwMrx6NUIsHfUHSLzjGJFxxsG72wAo9EWJR4yQWyJJaDb6rYcBtJvTvH3UoAS4JFNDaxGhmKNaMwgElLURlRFeVkLCjkfnXmWtINWZIrPGYq0-&format=source&h=210"
                class="w-10 rounded-full"
              />
              <p class="font-bold text-white">
                Hugo
                <span class="font-extralight text-gray-400">{{
                  $t('botOfLegends.discordSimulation.dateMessage')
                }}</span>
              </p>
            </div>
            <span class="block text-white">/profile trayton#EUW</span>
          </div>
          <div class="p-3 rounded mb-2">
            <div class="flex gap-2 items-center mb-2 -ml-10">
              <img
                src="https://3.bp.blogspot.com/-tgcfFTOwlV8/WxGrCx_GmtI/AAAAAAABA1Q/CMFQdvzCOtkLhT56z7ZT1JQ_lOPRlSWTQCLcBGAs/s1600/7a102c939fd239aa.png"
                class="w-10 rounded-full"
              />
              <p class="font-bold text-white">
                Bot de Legends
                <span class="font-extralight text-gray-400">{{
                  $t('botOfLegends.discordSimulation.dateMessage')
                }}</span>
              </p>
            </div>

            <img src="/images/discord_bot.png" class="rounded-xl" />
          </div>
        </div>
        <div class="bottom-0 p-4">
          <div class="flex items-center justify-between gap-2 bg-discord_bot rounded px-4 py-2">
            <!-- Icône de plus, peut être remplacée par une icône SVG ou une image -->
            <span class="material-icons text-gray-400 focus:outline-none">add_circle_outline</span>
            <p class="bg-transparent flex-1 border-none focus:ring-0 text-gray-400">
              {{ $t('botOfLegends.discordSimulation.textMessage') }}
            </p>

            <div class="flex space-x-2">
              <!-- Ajoutez d'autres boutons ou icônes ici si nécessaire -->
              <button class="text-gray-400 focus:outline-none">
                <span class="material-icons">emoji_emotions</span>
              </button>
              <button class="text-gray-400 focus:outline-none">
                <span class="material-icons">gif_box</span>
              </button>
              <button class="text-gray-400 focus:outline-none">
                <span class="material-icons">sentiment_satisfied</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Lien pour les icônes Material Design -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</template>

<script>
import HeaderVue from '../components/HeaderVue.vue'
import data from '../locales/fr.json'
export default {
  data() {
    return { data: data }
  },
  components: { HeaderVue }
}
</script>
