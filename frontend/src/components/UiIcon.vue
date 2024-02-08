<template>
  <img class="icon" :alt="icon" :src="iconSrc" />
</template>

<script>
import Shawarma from "../assets/icons/icon-shawarma.svg";

const icons = {
  'shawarma': Shawarma,
};

export default {
  name: "UiIcon",

  props: {
    icon: {
      type: String,
      required: true,
      validator: (name) => Object.keys(icons).includes(name),
    },
  },

  computed: {
    iconSrc() {
      return icons[this.icon];
    },
  },
};
</script>

<style scoped>
.icon {
  display: block;
}
</style>
  
