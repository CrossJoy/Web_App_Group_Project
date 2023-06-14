<?php

namespace App\Http\Controllers;
use App\Models\Theme;
use App\Models\Game;

// public function displayModulePage()
{
    $themes = Theme::all();
    $games = Game::all();

    if ($themes->isEmpty()) {
        $themes = null; // Set themes to null if there are no themes
    }

    if ($games->isEmpty()) {
        $games = null; // Set games to null if there are no games
    }

    return view('module')->with(compact('themes', 'games'));
}
