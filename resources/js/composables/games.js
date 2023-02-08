import { ref } from 'vue'
import axios from "axios";
import { useRouter } from 'vue-router';

export default function useGames() {
    const games = ref([])
    const game = ref([])
    const router = useRouter()

    const getGames = async () => {
        const response = await axios.get('/api/games');
        games.value = response.data.data;
    }

    const getGame = async (id) => {
        let response = await axios.get('/api/games/' + id)
        game.value = response.data.data;
    }

    const removeGame = async (id) => {
        await axios.delete('/api/games/' + id);
        await getGames()
    }

    return {
        games,
        game,
        getGames,
        getGame,
        removeGame
    }
}
