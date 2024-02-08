<template>
  <div class="container">
    <slot />
  </div>
</template>

<script>
export default {
  name: 'UiContainer',
};
</script>
  
<style scoped>
.container {
  position: relative;
  max-width: 1300px;
  height: 100vh;
  margin: 0 auto;
  z-index: 1;
}

@media all and (max-width: 600px) {

}
</style>
  