<template>
  <header class="header-bar">
    <div class="logo"><UiIcon :icon="'logo'"></UiIcon></div>
    <nav class="nav-bar">
      <ul class="nav-links">
        <li>
          <RouterLink
            :to="{ name: 'home' }"
            exactActiveClass="active-link"
            class="link"
          >
            Главная
          </RouterLink>
        </li>
        <li>
          <RouterLink
            :to="{ name: 'login' }"
            exactActiveClass="active-link"
            class="link"
          >
            Войти
          </RouterLink>
        </li>
        <li>
            <RouterLink
              :to="{ name: 'signup' }"
              exactActiveClass="active-link"
              class="link"
            >
              Регистрация
            </RouterLink>
        </li>
      </ul>
    </nav>
  </header>
</template>

<script setup>
import UiIcon from './UiIcon.vue';
</script>

<style scoped>
.header-bar {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  width: 90%;
  height: 100px;
  margin: 0 auto;
  padding: 30px;
  background-color: var(--main-bg);
  border-radius: 0px 0px 30px 30px;
  -webkit-box-shadow: 0px 20px 10px 0px rgba(34, 60, 80, 0.07);
  -moz-box-shadow: 0px 20px 10px 0px rgba(34, 60, 80, 0.07);
  box-shadow: 0px 20px 10px 0px rgba(34, 60, 80, 0.07);
}

.nav-links {
  display: flex;
  flex-direction: row;
  list-style: none;
}
.nav-links li {
  margin-right: 20px;
}
.nav-links li:last-child {
  margin-right: 0px;
}
.link {
  color: var(--main-text);
  text-decoration: none;
}
.link:hover {
  color: var(--active);
  cursor: pointer;
  transition: .3s color;
}
.active-link {
  color: var(--active);
}

@media all and (max-width: 600px) {
  .nav-bar {
    display: none;
  }
}

</style>
