import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);
import HomePage from "./components/pages/HomePage.vue";
import UserPage from "./components/pages/UserPage.vue";

const router = new VueRouter({
    mode: "history",
    linkExactActiveClass: "active",
    routes: [
        { path: "/", component: HomePage },
        { path: "/users", component: UserPage },
        { path: "*", component: NotFoundPage },
    ],
});

export default router;
