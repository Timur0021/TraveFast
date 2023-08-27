import { createRouter, createWebHistory } from "vue-router";
import Main from '../Main.vue' 
import Bilet from '../Bilet.vue' 
import Card from '../Card.vue'
import Show from '../Show.vue'
const routes = [
    {
        path: '/main',
        component: Main
    },
    {
        path: '/main/tiket',
        name: 'tiket',
        component: Bilet

    },
    {
        path: '/main/tiket/:id',
        name: 'tiket.show',
        component: () => import('../Show.vue')
    },
    {
        path: '/main/card',
        name: 'card.index',
        component: () => import('../Card.vue')
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router