<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function list() {

        $games = Game::all();

        return view('internals.games', [
            'games' => $games,
        ]);

    }
}
