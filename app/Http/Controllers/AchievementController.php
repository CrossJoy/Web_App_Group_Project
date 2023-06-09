<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementController extends Controller
{
    public function index()
    {
        $achievement = Achievement::all();
        return view('achievement', ['achievement' => $achievement]);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_ach');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,png,bmp,gif|max:1080',
            'title' => 'required|string',
            'description' => 'required|string'
        ]);
    
        $uploadImage = $request->file('image');
        $imageNameWithExt = $uploadImage->getClientOriginalName();
        $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        $imageExt = $uploadImage->getClientOriginalExtension();
        $storeImage = $imageName . time() . "." . $imageExt;
        $request->image->move(public_path('images'), $storeImage);
    
        $carousel = Achievement::create([
            'image' => $storeImage,
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
    
        return redirect('achievement');
    }
}
