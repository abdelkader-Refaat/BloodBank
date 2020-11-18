<?php

namespace App\Http\Controllers\Front;
use App\Models\Post;
use App\Models\BloodType;
use App\Models\City;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()   
    {    
    	$blood_types = BloodType::all();
    	$posts = Post::orderBy('id', 'desc')->take(15)->get();
    	$citys = City::all();

    	    return view('front.index', compact(['posts', 'blood_types', 'citys']));
    }
    public function about()
    {
    	return view('front.about');
    }
}
