<template>
  <UiContanier>
    <UiBackgroundCards>
      <ShawarmaCard v-for="store in stores" :store="store"></ShawarmaCard>
    </UiBackgroundCards>
  </UiContanier>
</template>

<script setup>
import UiContanier from '../components/UiContanier.vue';
import UiBackgroundCards from '../components/UiBackgroundCards.vue'
import ShawarmaCard from '../components/ShawarmaCard.vue';
import { ref } from 'vue';

const stores = ref([
  {
    name: 'Simple',
    menu: [
      {}
    ],
    stars: 5,

  },
  {
    name: 'Лаваш и мясо',
    menu: [
      {}
    ],
    stars: 5,
    
  },
  {
    name: 'Simple',
    menu: [
      {}
    ],
    stars: 5,
    
  },
])


</script>

<style>

</style>
