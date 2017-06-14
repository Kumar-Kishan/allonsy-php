<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //

    public function welcome()
    {
        $quote=array("To travel is to take a journey into yourself","The world is a book, and those who do not travel read only a page","Travelling- it leaves you speechless, then turns you into a storyteller","Once a year, go someplace you've never been before");
        $quoter=array("Danny Kaye","Augustine of Hippo","Ibn Battuta","Dalai Lama");
        return view('landinglayout.landingpage', ['quote' => $quote], ['quoter' => $quoter]);
    }

    public function SetPreferences()
    {
         return view('preference.index');
    }

    public function SavePreferences(Request $request)
    {
        //abort(400, 'Bad Request');
        return $request->all();
    }

    public function FeedPage()
    {
        return view('feed.index');
    }

    public function MakePost(Request $request)
    {
        return $request->all();
    }
}
