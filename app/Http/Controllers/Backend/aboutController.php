<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class aboutController extends Controller
{
    public function index(){
        $abouts = About::all();
        return view('backend.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('backend.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable',

        ]);

        $imagePath = $request->file('image')->store('about_us', 'public');

        About::create([
            'image' => $imagePath,
            'description' => $request->input('title'),

        ]);

        return redirect()->route('about.index')->with('success', 'Slider created successfully');
    }

    public function destroy(about $about)
    {
        $about->delete();

        return redirect()->route('about.index')
            ->with('success', 'Slider deleted successfully');
    }

}
