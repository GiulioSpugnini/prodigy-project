<template>
  <div>
    <Header />
    <main class="container">
      <router-view> </router-view>
    </main>
  </div>
</template>

<script>
import Header from "./Header.vue";
export default {
  name: "App",
  components: {
    Header,
  },
  data() {
    return {
      isLoading: false,
    };
  },
};
</script>
