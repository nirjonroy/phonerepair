<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ServiceCategory;

class serviceCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::all();
        return view('Backend.service-categories.index', compact('serviceCategories'));
    }

    public function create()
    {
        return view('Backend.service-categories.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'slug' => 'required',

        ]);

        ServiceCategory::create($request->all());
        // dd($dd);
        Alert::success('Success Title', 'Success Message');

        return redirect()->route('service-categories.index');
    }

    public function edit(ServiceCategory $serviceCategory)
    {
        return view('Backend.service-categories.edit', compact('serviceCategory'));
    }

    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',

        ]);

        $serviceCategory->update($request->all());

        Alert::success('Success', 'Service category updated successfully!');

        return redirect()->route('service-categories.index');
    }

    public function destroy(ServiceCategory $serviceCategory)
    {
        $serviceCategory->delete();

        Alert::success('Success', 'Service category deleted successfully!');

        return redirect()->route('service-categories.index');
    }
}
