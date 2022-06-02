<template>
  <section>
    <Loader v-if="isLoading" />
  </section>
</template>

<script>
import Loader from "../Loader.vue";
export default {
  name: "UserPage",
  coomponents: {
    Loader,
  },
  data() {
    return {};
  },
};
</script>

<style>
</style>