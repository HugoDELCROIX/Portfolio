<template>
  <div id="tools" class="page pt-10">
    <div class="section">
      <div>
        <div class="title">
          <font-awesome-icon
            class="md:flex-shrink-0 hidden md:block"
            icon="fa-solid fa-thumb-tack"
          />
          <p class="flex-grow md:w-5/6 text-center">{{ $t('navigation.tools') }}</p>
          <hr class="w-full md:w-3/4 border-gray-600 dark:border-gray-400 rounded" />
        </div>
        <div class="flex flex-col justify-center gap-5">
          <div class="tools-grid">
            <ToolComponent :icon="['fa-brands', 'fa-linux']" name="Linux" />
            <ToolComponent :icon="['fa-brands', 'fa-fedora']" name="Fedora" />
            <ToolComponent :icon="['fa-brands', 'fa-apple']" name="macOS" />
            <ToolComponent :icon="['fa-brands', 'fa-windows']" name="Windows" />
          </div>
          <hr
            class="w-1/2 border-dashed border border-gray-600 dark:border-gray-400 m-auto rounded"
          />
          <div class="tools-grid">
            <ToolComponent :icon="['fa-brands', 'fa-python']" name="Python" />
            <ToolComponent :icon="['fa-brands', 'fa-php']" name="php" />
            <ToolComponent :icon="['fa-brands', 'fa-symfony']" name="Symfony" />
            <ToolComponent :icon="['fa-brands', 'fa-js']" name="JavaScript" />
            <ToolComponent :icon="['fa-brands', 'fa-vuejs']" name="VueJS" />
            <ToolComponent :icon="['fa-brands', 'fa-java']" name="Java" />
          </div>
          <hr
            class="w-1/2 border-dashed border border-gray-600 dark:border-gray-400 m-auto rounded"
          />
          <div class="tools-grid">
            <ToolComponent :icon="['fa-brands', 'fa-github']" name="GitHub" />
            <ToolComponent :icon="['fa-brands', 'fa-figma']" name="Figma" />
            <ToolComponent :icon="['fa-brands', 'fa-trello']" name="Trello" />
          </div>
        </div>
      </div>
    </div>
    <div id="chevron" class="text-dark_blue dark:text-white bottom-0 text-center">
      <a href="#education"><font-awesome-icon icon="fa-solid fa-chevron-down" class="w-7 h-7" /></a>
    </div>
  </div>
</template>

<script>
import ToolComponent from '../components/ToolComponent.vue'
import data from '../locales/fr.json'
export default {
  data() {
    return { data: data }
  },
  components: { ToolComponent }
}
</script>
