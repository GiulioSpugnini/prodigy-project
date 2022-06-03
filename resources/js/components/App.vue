<template>
  <div class="p-2 text-white" style="background-color: #12577a">
    <main class="container">
      <div class="row">
        <div class="col-6 py-1">
          <Emails />
        </div>
        <div class="col-6 py-1">
          <Offers />
        </div>
        <div class="col-6 py-1">
          <Calls />
        </div>
        <div class="col-6 py-1">
          <Quotes />
        </div>
      </div>
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
