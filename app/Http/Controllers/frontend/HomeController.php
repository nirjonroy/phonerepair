<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\About;
class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::where('status', 1)->get();
        $services = Service::all();
        $about = About::first();
        return view('frontend.home.index', compact('sliders', 'services', 'about'));
    }
    public function serviceView($slug){
        $service = ServiceCategory::where('slug',$slug)->first();

        $services = Service::all();
        // dd($service);
        return view('frontend.home.service', compact('service', 'services'));
    }
    public function serviceDetail($slug){
        $services = Service::where('serviceSlug', $slug)->first();
        // dd($service);
        return view('frontend.home.serviceDetail', compact('services'));
    }
    public function aboutPage(){
        $about = About::first();
        return view('frontend.home.about_page', compact('about'));
    }

    
}
