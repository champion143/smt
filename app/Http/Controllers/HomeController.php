<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        // $categories = Category::orderBy('id','desc')->get();
        // return view('home')->with('categories',$categories);
        $categories = Category::orderBy('id','desc')->get();
        $destinations = Destination::orderBy('id','desc')->get();
        return view('welcome')->with('categories',$categories)->with('destinations',$destinations);
    }

    public function category(Request $request,$id)
    {
        $categories = Category::orderBy('id','desc')->get();
        $destinations = Destination::orderBy('id','desc')->get();
        $items = Item::where('category_id',$id)->get();
        return view('category')->with('categories',$categories)->with('destinations',$destinations)->with('items',$items);
    }
}
