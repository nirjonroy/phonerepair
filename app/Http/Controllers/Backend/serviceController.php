<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Service;

class serviceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('Backend.service.index', compact('services'));
    }

    public function create()
    {
        return view('Backend.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'serviceImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'serviceName' => 'nullable',
            'serviceNumber' => 'nullable',

        ]);

        $imagePath = $request->file('serviceImage')->store('serviceImage', 'public');

        Service::create([
            'serviceImage' => $imagePath,
            'serviceName' => $request->input('serviceName'),
            'serviceNumber' => $request->input('serviceNumber'),
            'serviceSlug' => $request->input('serviceSlug'),

        ]);
        // dd($dd);
        Alert::success('Success Title', 'Success Message');

        return redirect()->route('service.index');
    }

    public function edit(ServiceCategory $serviceCategory)
    {
        return view('Backend.service.edit', compact('serviceCategory'));
    }

    public function update(Request $request, ServiceCategory $serviceCategory)
    {

    }

    public function destroy(ServiceCategory $serviceCategory)
    {
        $service->delete();

        Alert::success('Success', 'Service category deleted successfully!');

        return redirect()->route('service.index');
    }

}
