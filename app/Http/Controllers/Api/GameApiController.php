<?php

namespace App\Http\Controllers\Api;

use App\Models\Game;
use App\Http\Controllers\Controller;
use App\Http\Resources\GameResource;

class GameApiController extends Controller
{
    public function index()
    {
        return GameResource::collection(Game::all());
    }

    public function show(Game $game)
    {
        return new GameResource($game);
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return response()->noContent();
    }
}
