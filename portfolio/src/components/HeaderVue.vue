<template>
  <button
    class="fixed right-10 top-10 text-white text-3xl pt-2 pb-2 pl-3 pr-3 transition duration-200 border-2 border-white rounded-md bg-dark_blue hover:border-green hover:text-green"
    v-on:click="toggle"
  >
    <font-awesome-icon class="w-10" icon="fa-solid fa-bars" />
  </button>
</template>

<script>
import { ref } from 'vue'
import { useRouter } from 'vue-router'
export default {
  setup() {
    const isHidden = ref(true)
    const router = useRouter()

    function toggle() {
      router.push('/menu')
    }

    return { toggle, isHidden }
  }
}
</script>
