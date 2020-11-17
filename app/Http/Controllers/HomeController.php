<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {    
     
         auth()->user()->where('email','AsR@g.com')->first()->assignRole('admin');
         auth()->user()->givePermissionTo('edit post');
         auth()->user()->assignRole('editor');
         // return auth()->user()->role('editor')->get();
        return view('front.index');
    }
}
