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
        'address' => 'required|string|max:255',
        'type' => 'required|in:rent,sell',
        'image' => 'nullable|image|max:2048',
    ]);

    $data = $request->only(['title', 'price', 'address', 'type']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('properties', 'public');
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
        'address' => 'required|string|max:255',
        'type' => 'required|in:rent,sell',
        'image' => 'nullable|image|max:2048',
    ]);

    $property = Property::findOrFail($id);
    $data = $request->only(['title', 'price', 'address', 'type']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('properties', 'public');
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
}
