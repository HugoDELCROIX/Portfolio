<template>
  <button
    class="fixed right-10 top-10 text-green text-3xl pt-2 pb-2 pl-3 pr-3 transition duration-500 border-2 border-green rounded-md bg-dark_blue"
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
