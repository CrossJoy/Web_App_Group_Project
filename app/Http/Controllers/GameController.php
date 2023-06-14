<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'image' => 'required|image',
    ]);

    $imagePath = $request->file('image')->store('game_images', 'public');

    $game = Game::create([
        'name' => $request->input('name'),
        'image' => $imagePath,
        // Add other fields as needed
    ]);

    return redirect()->back()->with('success', 'Game added successfully.');
}
}
