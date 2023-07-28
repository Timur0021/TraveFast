import { createRouter, createWebHistory } from "vue-router";
import Main from '../Main.vue' 
import Tiket from '../Tiket.vue' 
import Card from '../Card.vue'
const routes = [
    {
        path: '/main',
        component: Main
    },
    {
        path: '/main/tiket',
        component: Tiket

    },
    {
        path: '/main/pay',
        component: Card
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router