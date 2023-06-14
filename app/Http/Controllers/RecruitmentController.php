<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment;

class RecruitmentController extends Controller
{
    public function index()
    {
        return view('recruitment');
    }

    public function home()
    {
        return view('mainpage');
    }

    public function store(Request $request)
    {

        
        // Store the data in the database using a model
        $recruitment = new Recruitment();
        $recruitment->name = $request->input('name');
        $recruitment->matric_id = $request->input('matric_id');
        $recruitment->email = $request->input('email');
        $recruitment->kulliyah = $request->input('kulliyah');
        $recruitment->year_of_study = $request->input('year_of_study');
        $recruitment->reason_to_join = $request->input('reason_to_join');
        $recruitment->save();

        // Redirect to a thank you page
    return response()->json([
        'success' => true,
        'message' => 'Thank you for your submission!',
        ]);
    }
}