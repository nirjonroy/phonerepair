<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

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
            'description' => $request->input('description'),

        ]);
        Alert::success('Success Title', 'Success Message');
        return redirect()->route('about.index')->with('success', 'Slider created successfully');
    }


    public function edit(About $about)
    {
        return view('backend.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete($about->image);

            // Upload new image
            $imagePath = $request->file('image')->store('about_us', 'public');
        } else {
            // Keep existing image
            $imagePath = $about->image;
        }

        // Update the model with new information
        $about->update([
            'image' => $imagePath,
            'description' => $request->input('description'),
            // Add other fields you want to update as needed
        ]);

        Alert::success('Success Title', 'Update  Message');
        return redirect()->route('about.edit', $about->id)->with('success', 'About information updated successfully.');
    }


    public function destroy(about $about)
    {
        $about->delete();

        Alert::success('Success', 'Service category deleted successfully!');
        return redirect()->route('about.index')
            ->with('success', 'About deleted successfully');
    }

}
