import { ref } from 'vue'
import axios from "axios";

export default function useGames() {
    const games = ref([])
    const game = ref([])

    const getGames = async () => {
        const response = await axios.get('/api/games');
        games.value = response.data.data;
    }

    const getGame = async (id) => {
        let response = await axios.get('/api/games/' + id)
        game.value = response.data.data;
    }

    return {
        games,
        game,
        getGames,
        getGame
    }
}
