<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Game;

class ModuleController extends Controller
{
    public function index()
    {
        $themes = Theme::all();
        $games = Game::with('theme')->get();

        return view('module', compact('themes', 'games'));
    }

    public function storeTheme(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/img'), $imageName);

        $theme = new Theme();
        $theme->name = $request->name;
        $theme->image = $imageName;
        $theme->save();

        return redirect()->route('module.index');
    }

    public function storeGame(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'theme_id' => 'required|exists:themes,id',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/img'), $imageName);

        $game = new Game();
        $game->name = $request->name;
        $game->image = $imageName;
        $game->theme_id = $request->theme_id;
        $game->save();

        return redirect()->route('module.index');
    }
}
