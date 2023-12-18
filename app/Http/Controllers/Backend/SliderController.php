<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use RealRashid\SweetAlert\Facades\Alert;
class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('backend.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'nullable',
            'paragraph' => 'nullable',
            'status' => 'nullable',
        ]);

        $imagePath = $request->file('image')->store('slider_images', 'public');

        Slider::create([
            'image' => $imagePath,
            'title' => $request->input('title'),
            'paragraph' => $request->input('paragraph'),
            'status' => $request->input('status', 1),
        ]);
        Alert::success('Success ', 'Slider Added succesfullay');
        return redirect()->route('sliders.index')->with('success', 'Slider created successfully');
    }

    public function show(Slider $slider)
    {
        return view('backend.sliders.show', compact('slider'));
    }

    public function edit(Slider $slider)
    {
        return view('backend.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'title' => 'nullable',
        'paragraph' => 'nullable',
        'status' => 'nullable',
    ]);

    if ($request->hasFile('image')) {
        // Delete old image
        Storage::disk('public')->delete($slider->image);

        // Upload new image
        $imagePath = $request->file('image')->store('slider_images', 'public');
    } else {
        // Keep existing image
        $imagePath = $slider->image;
    }

    $slider->update([
        'image' => $imagePath,
        'title' => $request->input('title'),
        'paragraph' => $request->input('paragraph'),
        'status' => $request->input('status', 1),
    ]);
    Alert::success('Success ', 'Slider Updated succesfullay');
    return redirect()->route('sliders.index')->with('success', 'Slider updated successfully');
}

    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('sliders.index')
            ->with('success', 'Slider deleted successfully');
    }
}
