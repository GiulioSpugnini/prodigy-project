<template>
  <div>
    <Header />
    <main class="container">
      <Emails />
      <Offers />
      <Calls />
      <Quotes />
      <!-- <router-view> </router-view> -->
    </main>
  </div>
</template>

<script>
import Header from "./Header.vue";
import Emails from "./includes/Emails.vue";
import Offers from "./includes/Offers.vue";
import Quotes from "./includes/Quotes.vue";
import Calls from "./includes/Calls.vue";
export default {
  name: "App",
  components: {
    Header,
    Emails,
    Offers,
    Quotes,
    Calls,
  },
  data() {
    return {
      isLoading: false,
    };
  },
};
</script>
