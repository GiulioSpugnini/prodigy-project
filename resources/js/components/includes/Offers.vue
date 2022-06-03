<template>
  <section>
    <h2>Offers</h2>
    <Loader v-if="isLoading" />
    <div v-else>
      <div v-if="offers.length">
        <div
          class="card bg-dark text-light border-white my-2"
          v-for="offer in offers"
          :key="offer.id"
        >
          <h5 class="card-header bg-dark text-light border-white">
            <strong>Amount:</strong> {{ offer.amount }}
          </h5>
          <div class="card-body bg-dark text-light border-white">
            <h5 class="card-title bg-dark text-light border-white">
              <strong>Offer duration:</strong> {{ offer.offer_duration }}
            </h5>
          </div>
        </div>
      </div>
      <h4 v-else>Didn't find any offers</h4>
    </div>
  </section>
</template>

<script>
import Loader from "../Loader.vue";
export default {
  name: "Offers",
  components: {
    Loader,
  },
  data() {
    return {
      offers: [],
      isLoading: true,
    };
  },
  methods: {
    getOffers() {
      this.isLoading = true;
      axios
        .get("http://localhost:8000/api/offers")
        .then((res) => {
          this.offers = res.data;
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
    this.getOffers();
  },
};
</script>

<style>
</style>