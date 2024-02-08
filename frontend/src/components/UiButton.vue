<template>
    <button
      :class="{ 'submit-button' : buttonType === 'submit' }" 
      :type="type"
    >
        <slot></slot>
    </button>
</template>

<script setup>

const props = defineProps({
  type: {
    type: String,
    default: 'text',
  },

  buttonType: {
    type: String,
    default: 'default',
  }
});

</script>

<style scoped>
button {
    font-family: 'Catamaran', sans-serif;
    background-color: transparent;
    border: 1px solid black;
    font-size: 20px;
    margin: 20px;
    width: 100%;
}

button:hover {
    cursor: pointer;
}

.submit-button {
  background-color: var(--submit-button);
}

</style>
  