<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //

    public function welcome()
    {
        return view('landingpage');
    }

    public function SetPreferences()
    {
           return view('preference');
    }
}
