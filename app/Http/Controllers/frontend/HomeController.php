<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\About;
use App\Models\Reason;
use App\Models\Testimonial;
use App\Models\Message;
use RealRashid\SweetAlert\Facades\Alert;
class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::where('status', 1)->get();
        $services = Service::all();
        $about = About::first();
        $why_choose = Reason::all();
        $testimonials = Testimonial::all();
        return view('frontend.home.index', compact('sliders', 'services', 'about', 'why_choose', 'testimonials'));
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

    public function submit_contact(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => '',
            'email' => '',
            'phone' => '',
            'address' => '',
            'subject' => '',
            'message' => '',
        ]);

        Message::create($request->all());
        // dd($dd);
        Alert::success('Success ', 'Message sent succesfullay');

        return redirect()->back();
    }


}
