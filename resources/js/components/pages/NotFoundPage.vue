<template>
  <section
    id="not-found"
    class="d-flex justify-content-center align-items-center"
  >
    <h3 class="mt-5">404 | Not Found</h3>
    <button class="btn btn-secondary mt-5 ml-2" @click="$router.back()">
      Indietro
    </button>
  </section>
</template>

<script>
export default {
  name: "NotFoundPage",
};
</script>

<style>
</style>