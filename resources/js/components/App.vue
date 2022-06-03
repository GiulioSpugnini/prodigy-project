<template>
  <div>
    <main class="container">
      <Emails />
      <Offers />
      <Calls />
      <Quotes />
    </main>
  </div>
</template>

<script>
import Emails from "./includes/Emails.vue";
import Offers from "./includes/Offers.vue";
import Quotes from "./includes/Quotes.vue";
import Calls from "./includes/Calls.vue";
export default {
  name: "App",
  components: {
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
