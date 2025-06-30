<?php

namespace App\Http\Controllers\Roadmap;

use App\Http\Controllers\Controller;
use App\Models\Roadmaps;
use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    /**
     * Show the user's profile settings page.
     */
    public function show($id)
    {
        $roadmap = Roadmaps::find($id);
        return view('roadmap.show')->withRoadmap($roadmap);
        //return view('home.index');
    }
}