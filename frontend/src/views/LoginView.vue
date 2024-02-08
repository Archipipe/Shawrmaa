<template>
    <UiContanier>
    <div class="wrapper">
        <div class="greeting">
            <h1>Приветствуем!</h1>
            <div class="text"><h3>Войдите в акаунт, чтобы посмотреть наши шаурмы</h3></div>
        </div>
      <form @submit.prevent="" class="form">
        <div class="contanier">
          <div class="label__wrapper">
            <UiInput placeholder="Имя" type="text"></UiInput>
          </div>
          <div class="label__wrapper">
            <UiInput placeholder="Пароль" type="password"></UiInput>
          </div>
        </div>
        <UiButton buttonType="submit" type="submit">Войти</UiButton>
      </form>
      <div class="text">
        <p>Если у вас нет аккаунта <RouterLink :to="{ name: 'signup' }"> нажмите сюда</RouterLink> чтобы зарегистрироваться</p>
      </div>
    </div>
  </UiContanier>
  <ShawarmaBackground></ShawarmaBackground>
</template>

<script setup>
import UiContanier from '../components/UiContanier.vue';
import UiInput from '../components/UiInput.vue';
import UiButton from '../components/UiButton.vue';
import ShawarmaBackground from '../components/ShawarmaBackground.vue';

</script>

<style scoped>
.form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100%;
    justify-content: center;
    padding-bottom: 100px;
}

.greeting {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.text {
    text-align: center;
}
</style>