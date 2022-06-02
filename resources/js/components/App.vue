<template>
  <div>
    <Header />
    <main class="container">
      <Emails />
      <!-- <router-view> </router-view> -->
    </main>
  </div>
</template>

<script>
import Header from "./Header.vue";
import Emails from "./includes/Emails.vue";
export default {
  name: "App",
  components: {
    Header,
    Emails,
  },
  data() {
    return {
      isLoading: false,
    };
  },
};
</script>
