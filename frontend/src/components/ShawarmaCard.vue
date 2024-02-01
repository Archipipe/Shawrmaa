<template>
  <div class="contanier">

  </div>
</template>

<script setup>
defineProps({
  store: {
    type: Object,
    required: true,
  },
});
</script>

<style scoped>
.contanier {
  width: 86%;
  height: 200px;
  margin-bottom: 40px;
  background-color: var(--active);
}

.contanier:last-child {
    margin-bottom: 0px;
}
</style>
