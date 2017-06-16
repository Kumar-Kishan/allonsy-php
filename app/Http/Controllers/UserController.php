<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\Media;
use App\User;
class UserController extends Controller
{
    public function ChangeProfilePic(Request $req)
    {
        if(count(Auth::user()->profileImage)) $profileImage = Auth::user()->profileImage;
        else{
            $profileImage = new Media();
        } 
        
        
        $this->validate($req,[
            'inputImage' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$req->inputImage->getClientOriginalExtension();

        $req->inputImage->move(public_path('userimages'),$imageName);

        $profileImage->path = $imageName;
        $profileImage->save();

        $user = Auth::user();
        $user->media_id = $profileImage->id;
        $user->save();


        return $profileImage;
    }
}
