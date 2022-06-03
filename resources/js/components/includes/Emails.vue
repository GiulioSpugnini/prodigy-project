<template>
  <section>
    <h2>Emails</h2>
    <Loader v-if="isLoading" />
    <div v-else>
      <div v-if="emails.length">
        <div
          class="card bg-dark text-light border-white my-2"
          v-for="email in emails"
          :key="email.id"
        >
          <h5 class="card-header bg-dark text-light border-white">
            <strong>Name:</strong> {{ email.name }}
          </h5>
          <div class="card-body bg-dark text-light border-white">
            <h5 class="card-title bg-dark text-light">
              <strong>Title:</strong> {{ email.title }}
            </h5>
            <p class="card-text bg-dark text-light border-white">
              {{ email.text }}
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
  name: "Emails",
  components: {
    Loader,
  },
  data() {
    return {
      emails: [],
      isLoading: true,
    };
  },
  methods: {
    getEmails() {
      this.isLoading = true;
      axios
        .get("http://localhost:8000/api/emails")
        .then((res) => {
          this.emails = res.data;
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
    this.getEmails();
  },
};
</script>

<style>
</style>