<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function profile()
    {
        $categories = Category::orderBy('id','desc')->get();
        $destinations = Destination::orderBy('id','desc')->get();
        return view('user.user-profile')->with('categories',$categories)->with('destinations',$destinations);
    }

    public function update(Request $request)
    {
        User::where('id',Auth::user()->id)->update(
            array(
                'about' => $request->input('about'),
                'location' => $request->input('location'),
                'language' => json_encode($request->input('taggone')),
                'work' => $request->input('work')
            )
        );
        return redirect()->back();
    }
}
