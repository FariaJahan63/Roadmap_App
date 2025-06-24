<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

   class CustomLoginController extends Controller
   {
       public function logout(Request $request)
       {
           Auth::logout();
           $request->session()->invalidate();
           $request->session()->regenerateToken();
           return redirect('/'); // Redirect to the homepage or desired route
       }
   }