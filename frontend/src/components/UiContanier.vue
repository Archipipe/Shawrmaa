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
  max-width: 1300px;
  margin: 0 auto;
  margin-top: 100px;
}

@media all and (max-width: 600px) {

}
</style>
  