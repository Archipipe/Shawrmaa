<template>
  <div class="input-contanier">
    <label v-if="label">
      {{ label }}
    </label>
    <input 
        :type="type" 
        :value="modelValue" 
        @input="updateInput" 
        v-bind="$attrs"
    />
  </div>
</template>

<script setup>

defineOptions({
  inheritAttrs: false,
})

const props = defineProps({
  label: {
    type: String,
  },
  modelValue: {
    type: String,
  },
  type: {
    type: String,
    default: "text",
  },
  inputType: {
    type: String,
    default: 'input',
  }
});

const emit = defineEmits(["update:modelValue"]);

const updateInput = (event) => {
  emit("update:modelValue", event.target.value);
};
</script>

<style scoped>
input {
    font-family: 'Catamaran', sans-serif;
    background-color: transparent;
    border: none;
    border-bottom: 1px solid black;
    font-size: 20px;
    padding: 0px 0px 5px 10px;
    margin: 20px;
}

input:focus {
  outline: none;
}

.input-contanier {
  display: flex;
  flex-direction: column;
  text-align: start;
}

</style>
