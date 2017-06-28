<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAttribute;
use App\User;
use Auth;
use App\Media;

class AppController extends Controller
{
    //


    public function upload(Request $request)
    {
        $this->validate($request,[
            'inputImage' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $media = new Media();
        $imageName = time().'.'.$request->inputImage->getClientOriginalExtension();
        $request->inputImage->move(public_path('userimages'),$imageName);
        $media->path = $imageName;
        $media->save();
        return $media;
    }

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
        if(count(Auth::user()->attributes)) $userAttribute = Auth::user()->attributes;
        else $userAttribute = new UserAttribute();
        
       // return $request->all();

        $userAttribute->food = $request->fooding / 100;
        $userAttribute->chill = $request->chilling / 100;
        $userAttribute->thrill = $request->thrilling / 100;
        $userAttribute->trek = $request->trekking / 100;
        $userAttribute->entertainment = $request->entertaining / 100;
        $userAttribute->pilgrimage = $request->pilgrimaging / 100;

        $userAttribute->user_id = Auth::id();

        if(!$userAttribute->save()){
            abort(500, 'Error');
        }
        else{
            return ["status" => "ok"];
        }
    }

    public function FeedPage()
    {
        return view('feed.index');
    }

    public function CompanyPage()
    {
        return view('company.index');
    }
    public function MakePost(Request $request)
    {
        return $request->all();
    }

    public function GetCurrentUser()
    {
        $userId = Auth::id();

        $user = User::with('profileImage')->find($userId);

        return $user;


    }
}
