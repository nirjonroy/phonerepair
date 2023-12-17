<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class testimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backend.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'nullable',
            'designation' => 'nullable',
            'message' => 'nullable',
        ]);

        $imagePath = $request->file('image')->store('testimonial_images', 'public');

        Testimonial::create([
            'image' => $imagePath,
            'name' => $request->input('name'),
            'designation' => $request->input('designation'),
            'message' => $request->input('message'),

        ]);

        return redirect()->route('testimonial.index')->with('success', 'Slider created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('backend.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'name' => 'nullable',
        //     'designation' => 'nullable',
        //     'message' => 'nullable',
        // ]);

        $imagePath = $testimonial->image; // Default to the existing image path

        if ($request->hasFile('image')) {
            // Check if the old image path exists before deleting
            if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                // Delete old image
                Storage::disk('public')->delete($imagePath);
            }

            // Upload new image
            $imagePath = $request->file('image')->store('testimonial', 'public');
        }

        // Update the model with new information
        $testimonial->update([
            'image' => $imagePath,
            'name' => $request->input('name'),
            'designation' => $request->input('designation'),
            'message' => $request->input('message'),
            // Add other fields you want to update as needed
        ]);

        // Redirect the user after the update
        return redirect()->route('testimonial.edit', $testimonial->id)->with('success', 'testimonial information updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reason $reason)
    {
        $reason->delete();

        return redirect()->route('reason.index')
            ->with('success', 'Slider deleted successfully');
    }
}
