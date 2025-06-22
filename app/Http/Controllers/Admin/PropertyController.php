<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
    use App\Models\Property;



class PropertyController extends Controller
{

public function index()
{
    $properties = Property::latest()->get();
    return view('admin.properties.index', compact('properties'));
}

public function create()
{
    return view('admin.properties.create');
}

public function store(Request $request)
{
    $request->validate([
         'title' => 'required|string|max:255',
        'price' => 'required|numeric',
        'location' => 'required|string|max:255',
        'type' => 'required|in:rent,sell',
        'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'category' => 'nullable|string|max:255',
        'bedrooms' => 'nullable|string|max:255',
        'bathrooms' => 'nullable|string|max:255',
        'area' => 'nullable|string|max:255',
    ]);

    $data = $request->only(['title', 'price', 'location', 'type', 'category', 'bedrooms', 'bathrooms', 'area']);


    if ($request->hasFile('main_image')) {
        $data['main_image'] = $request->file('main_image')->store('properties', 'public');
    }

    Property::create($data);

    return redirect()->route('admin.properties.index')->with('success', 'Property created successfully.');
}

public function edit($id)
{
    $property = Property::findOrFail($id);
    return view('admin.properties.edit', compact('property'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'price' => 'required|numeric',
        'location' => 'required|string|max:255',
        'type' => 'required|in:rent,sell',
        'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'category' => 'nullable|string|max:255',
        'bedrooms' => 'nullable|string|max:255',
        'bathrooms' => 'nullable|string|max:255',
        'area' => 'nullable|string|max:255',
    ]);

    $property = Property::findOrFail($id);
    $data = $request->only(['title', 'price', 'location', 'type', 'category', 'bedrooms', 'bathrooms', 'area']);

    if ($request->hasFile('main_image')) {
        $data['main_image'] = $request->file('main_image')->store('properties', 'public');
    }


    $property->update($data);

    return redirect()->route('admin.properties.index')->with('success', 'Property updated successfully.');
}



public function destroy($id)
{
    $property = Property::findOrFail($id);
    $property->delete();

    return redirect()->route('admin.properties.index')->with('success', 'Property deleted successfully.');
}


public function show($id)
{
    $property = Property::findOrFail($id);
    return view('admin.properties.show', compact('property'));
}

}
