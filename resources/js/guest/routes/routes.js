import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./Home";
import Post from "./Post";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/post/:slug",
            name: "post",
            component: Post
        },
    ]
});

export default router