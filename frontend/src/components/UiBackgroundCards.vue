<template>
    <div class="wrapper">
        <slot></slot>
    </div>
</template>
  
<script setup>
  
  
</script>

<style scoped>
.wrapper {
    width: 100%;
    height: 100%;
    padding: 20px;
    border-radius: 10px;
    position: relative;
    z-index: 2;
    background-color: rgba(180, 180, 180, 0.5);
}
</style>