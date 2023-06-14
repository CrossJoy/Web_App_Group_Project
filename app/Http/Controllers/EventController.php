<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::all();
        return view('event', ['event' => $event]);
    }

    public function create()
    {
        return view('add_event');
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,png,bmp,gif|max:1080',
            'event_name' => 'required|string',
            'venue' => 'required|string',
            'date' => 'required|string',
            'members' => 'required|string',
            'leader' => 'required|string'
        ]);
    
        $uploadImage = $request->file('image');
        $imageNameWithExt = $uploadImage->getClientOriginalName();
        $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        $imageExt = $uploadImage->getClientOriginalExtension();
        $storeImage = $imageName . time() . "." . $imageExt;
        $request->image->move(public_path('images'), $storeImage);
    
        $carousel = Event::create([
            'image' => $storeImage,
            'event_name' => $request->input('event_name'),
            'venue' => 'required|string',
            'date' => $request->input('date'),
            'members' => $request->input('members'),
            'leader' => $request->input('leader')
        ]);
    
        return redirect('event');
    }
}

