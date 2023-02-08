require('./bootstrap');

import { createApp } from "vue";
import routes from './routes';
import GameIndex from './components/games/GameIndex.vue';

const app = createApp({
    components: {
        GameIndex,
    },
}).use(routes).mount('#app')
