<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Roadmap;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the user's profile settings page.
     */
    public function home()
    {
        $roadmaps = Roadmap::orderBy('name', 'asc')->get();
        //dd($roadmaps);
        return view('home.index')->withRoadmaps($roadmaps);
        //return view('home.index');
    }
}