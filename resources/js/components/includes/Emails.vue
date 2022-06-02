<template>
  <section>
    <Loader v-if="isLoading" />
    <h2>Emails</h2>
    <ul v-if="emails.length">
      <li v-for="email in emails" :key="email.id">email</li>
    </ul>
    <h4 v-else>Didn't find any emails</h4>
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
          console.log(err);
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