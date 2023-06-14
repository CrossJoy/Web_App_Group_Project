<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'image' => 'required|image',
    ]);

    $imagePath = $request->file('image')->store('theme_images', 'public');

    $theme = Theme::create([
        'name' => $request->input('name'),
        'image' => $imagePath,
        // Add other fields as needed
    ]);

    return redirect()->back()->with('success', 'Theme added successfully.');
}
}

