<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the user's profile settings page.
     */
    public function home()
    {
        //die('test');
        return view('home.index');
    }
}