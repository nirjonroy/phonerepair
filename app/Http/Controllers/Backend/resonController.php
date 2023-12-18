<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reason;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
class resonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reasons = Reason::all();
        return view('backend.reason.index', compact('reasons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.reason.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('ok');
        // dd($request->text);
        // $request->validate([
        //     'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'title' => 'nullable',
        //     'text' => 'nullable',

        // ]);

        $imagePath = $request->file('logo')->store('reason', 'public');

        Reason::create([
            'logo' => $imagePath,
            'title' => $request->input('title'),
            'text' => $request->input('text'),

        ]);

        Alert::success('Success ', 'Added Successfully');
        return redirect()->route('reason.index')->with('success', 'Slider created successfully');
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
    public function edit(Reason $reason)
    {
        return view('backend.reason.edit', compact('reason'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reason $reason)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'nullable',
            'text' => 'nullable',
        ]);

        $imagePath = $reason->logo; // Default to the existing image path

        if ($request->hasFile('logo')) {
            // Check if the old image path exists before deleting
            if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                // Delete old image
                Storage::disk('public')->delete($imagePath);
            }

            // Upload new image
            $imagePath = $request->file('logo')->store('reason', 'public');
        }

        // Update the model with new information
        $reason->update([
            'logo' => $imagePath,
            'title' => $request->input('title'),
            'text' => $request->input('text'),
            // Add other fields you want to update as needed
        ]);

        // Redirect the user after the update
        return redirect()->route('reason.edit', $reason->id)->with('success', 'Reason information updated successfully.');
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
