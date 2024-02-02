<template>
  <div class="contanier">
    <h2>{{ store.name }}</h2>
    <div class="card__wrapper">
      {{ store.description }}
      {{ store.stars }}
    </div>
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
  margin: 0 auto;
  margin-bottom: 20px;
  padding: 20px;
  position: inherit;
  z-index: 3;
  background-color: #e4e4e4;
}

.contanier:last-child {
    margin-bottom: 0px;
}

.card__wrapper {

}
</style>
