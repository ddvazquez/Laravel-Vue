<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2" v-for="game in games" :key="game.id">
                <div class="card">
                    <img :src="`${game.image_url}`" class="card-img-top" alt="">

                    <div class="card-body">
                        <h5 class="card-title">{{ game.name}}</h5>

                        <p class="card-text">{{ game.description}}.</p>

                        <div class="h-100 d-flex flex-row">
                            <router-link :to="{ name: 'games.show' , params: { id: game.id }}" class="btn btn-primary me-2">View</router-link>

                            <a id="deleteBtn" @click="deleteGame(game)" href="#" role="button" class="btn btn-warning position-end">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import useGames from '../../composables/games';
import { onMounted } from 'vue';

export default {
    setup() {
        const { games, getGames, removeGame } = useGames()

        onMounted(getGames)

        const deleteGame = async ( game ) => {
            if (!window.confirm(`delete  ${game.name}?`)) {
                return
            }
            await removeGame(game.id);
        };

        return {
            games,
            deleteGame
        }
    }
}
</script>
