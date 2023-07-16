<template>
  <div class="tool">
    <font-awesome-icon :icon="icon" />
    <span>{{ name }}</span>
  </div>
</template>

<script>
export default {
  props: {
    icon: {
      type: Array,
      default() {
        return []
      }
    },
    name: {
      type: String,
      default() {
        return ''
      }
    }
  }
}
</script>
