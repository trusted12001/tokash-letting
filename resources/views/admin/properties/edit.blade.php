@extends('layouts.dashboard-layout')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-dark">Edit Property</h4>
        <div>
            <a href="{{ route('dashboard') }}" class="btn btn-warning me-2">Back to Dashboard</a>
            <a href="{{ route('admin.properties.index') }}" class="btn btn-secondary">All Properties</a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.properties.update', $property->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Property Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $property->title) }}" required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" class="form-select" required>
                        <option value="for-rent" {{ $property->type === 'for-rent' ? 'selected' : '' }}>For Rent</option>
                        <option value="for-sell" {{ $property->type === 'for-sell' ? 'selected' : '' }}>For Sell</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" name="category" class="form-control" value="{{ old('category', $property->category) }}" required>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" value="{{ old('location', $property->location) }}" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price ($/mo)</label>
                    <input type="number" name="price" class="form-control" value="{{ old('price', $property->price) }}" required>
                </div>

                <div class="mb-3">
                    <label for="beds" class="form-label">Beds</label>
                    <input type="number" name="beds" class="form-control" value="{{ old('beds', $property->beds) }}" required>
                </div>

                <div class="mb-3">
                    <label for="baths" class="form-label">Baths</label>
                    <input type="number" name="baths" class="form-control" value="{{ old('baths', $property->baths) }}" required>
                </div>

                <div class="mb-3">
                    <label for="size" class="form-label">Size (Sqft)</label>
                    <input type="number" name="size" class="form-control" value="{{ old('siz

