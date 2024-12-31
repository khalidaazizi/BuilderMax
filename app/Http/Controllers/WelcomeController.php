<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashboard\Slider;
class WelcomeController extends Controller
{
    public function index(){
        $sliders =Slider::where('id', '>=', 1)->get();
        // return $sliders;
        return view('front.partials.main.header', compact('sliders'));
    }
}