<template>
  <section>
    <h2>Quotes</h2>
    <Loader v-if="isLoading" />
    <div v-else>
      <div v-if="quotes.length">
        <div class="card" v-for="quote in quotes" :key="quote.id">
          <h5 class="card-header">
            <strong>Amount:</strong> {{ quote.amount }}
          </h5>
          <div class="card-body">
            <h5 class="card-title">
              <strong>Discount:</strong> {{ quote.discount }}
            </h5>
            <p class="card-text">
              {{ quote.text }}
            </p>
          </div>
        </div>
      </div>
      <h4 v-else>Didn't find any emails</h4>
    </div>
  </section>
</template>

<script>
import Loader from "../Loader.vue";
export default {
  name: "Quotes",
  components: {
    Loader,
  },
  data() {
    return {
      quotes: [],
      isLoading: true,
    };
  },
  methods: {
    getQuotes() {
      this.isLoading = true;
      axios
        .get("http://localhost:8000/api/quotes")
        .then((res) => {
          this.quotes = res.data;
        })
        .catch((err) => {
          console.error(err);
        })
        .then(() => {
          this.isLoading = false;
        });
    },
  },
  mounted() {
    this.getQuotes();
  },
};
</script>

<style>
</style>