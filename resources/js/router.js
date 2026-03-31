import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/dashboard",
        component: () => import("./pages/Dashboard.vue"),
    },
    {
        path: "/:pathMatch(.*)*",
        component: () => import("./pages/NotFound.vue"),
    }
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
