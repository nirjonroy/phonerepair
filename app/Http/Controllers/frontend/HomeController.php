<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::where('status', 1)->get();
        return view('frontend.home.index', compact('sliders'));
    }
}
