<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\Media;
use App\User;
use App\Story;
use DB;
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


    public function UserFeed($random)
    {
        //$stories = Story::with('post')->find(1);
        $story = Story::orderBy(DB::raw('RAND('.$random.')'))
                ->paginate(15);
        $items = $story->items();

        foreach($items as $item)
        {
            if($item->type === 'posts' ) $item->post->media;
            else $item->review->media;
        }        
        return $story;
    }
}
