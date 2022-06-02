<template>
  <div id="loader">
    <div class="spinner-border text-success" role="status">
      <span class="sr-only">Loading..</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "Loader",
};
</script>

<style lang="scss" scoped>
#loader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba($color: #000000, $alpha: 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1;
  .spinner-border {
    width: 80px;
    height: 80px;
  }
}
</style>