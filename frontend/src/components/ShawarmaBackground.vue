<template>
    <div class="shawarmas__wrapper">
        
        <UiIcon icon="shawarma"></UiIcon>
        <UiIcon icon="shawarma"></UiIcon>
        <UiIcon icon="shawarma"></UiIcon>
        <UiIcon icon="shawarma"></UiIcon>

        <UiIcon icon="shawarma"></UiIcon>
        <UiIcon icon="shawarma"></UiIcon>
        <UiIcon icon="shawarma"></UiIcon>
        <UiIcon icon="shawarma"></UiIcon>

        <UiIcon icon="shawarma"></UiIcon>
        <UiIcon icon="shawarma"></UiIcon>
        <UiIcon icon="shawarma"></UiIcon>
        <UiIcon icon="shawarma"></UiIcon>

        <UiIcon icon="shawarma"></UiIcon>
        <UiIcon icon="shawarma"></UiIcon>
        <UiIcon icon="shawarma"></UiIcon>
        <UiIcon icon="shawarma"></UiIcon>

    </div>
</template>

<script setup>
import UiIcon from './UiIcon.vue';
</script>

<style scoped>
.shawarmas__wrapper {
    display: grid;
    grid-template-columns: auto auto auto auto;
    align-items: center;
    justify-content: space-around;
    position: absolute;
    z-index: 0;
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
}

.shawarmas__wrapper > * {
    transform: rotate(50deg);
}
</style>