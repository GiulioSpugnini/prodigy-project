<template>
  <section>
    <h2>Calls</h2>
    <Loader v-if="isLoading" />
    <div v-else>
      <div v-if="calls.length">
        <div class="card" v-for="call in calls" :key="call.id">
          <h5 class="card-header">
            <strong>Phone number:</strong> {{ call.phone_number }}
          </h5>
          <div class="card-body">
            <h5 class="card-title">
              <strong>Call_duration:</strong> {{ call.call_duration }}
            </h5>
            <h5>
              {{ call.date_time }}
            </h5>
          </div>
        </div>
      </div>
      <h4 v-else>Didn't find any calls</h4>
    </div>
  </section>
</template>

<script>
import Loader from "../Loader.vue";
export default {
  name: "Calls",
  components: {
    Loader,
  },
  data() {
    return {
      calls: [],
      isLoading: true,
    };
  },
  methods: {
    getCalls() {
      this.isLoading = true;
      axios
        .get("http://localhost:8000/api/calls")
        .then((res) => {
          this.calls = res.data;
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
    this.getCalls();
  },
};
</script>

<style>
</style>