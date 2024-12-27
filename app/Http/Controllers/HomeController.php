<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
    // public function index()
    // { 
    //      $slider= Slider::where('id','>',1)->get();
    //     return view('home',compact('slider'));
    // }


    public function index()
    {
        // $sliders = Slider::where('id', '>', 1)->get();
        // return view('front.main.header', compact('sliders'));
    }

}
