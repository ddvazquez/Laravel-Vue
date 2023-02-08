import { createRouter, createWebHistory } from 'vue-router';

import GameIndex from './components/games/GameIndex.vue';
import GameShow from './components/games/GameShow.vue';

const routes = [
    {
        path: '/',
        name: 'games.index',
        component: GameIndex
    },
    {
        path: '/games/:id/show',
        name: 'games.show',
        component: GameShow,
        props: true
    },
    { path: "/:pathMatch(.*)", component: { template: "Not found"} }
];

export default createRouter({
    history: createWebHistory(),
    routes
});
