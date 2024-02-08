<template>
  <UiContanier>
    <div class="wrapper">
      <form @submit.prevent="sendSignupForm" class="form">
        <div class="contanier">
          <div class="label__wrapper">
            <UiInput type="text" label="Пароль" v-model="email" :value="email"></UiInput>
          </div>
          <div class="label__wrapper">
            <label for=""></label>
            <input type="text">
          </div>
          <div class="label__wrapper">
            <label for=""></label>
            <input type="text">
          </div>
        </div>
        <button buttonType="submit" type="submit">Войти</button>
      </form>
    </div>
  </UiContanier>
</template>

<script setup>
import { ref } from 'vue';
import UiContanier from '../components/UiContanier.vue';
import UiInput from '../components/UiInput.vue';

let email = ref('');



const sendSignupForm = () => {
  return null;
}

</script>

<style scoped>
.form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
</style>
