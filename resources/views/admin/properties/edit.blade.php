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
                        <option value="rent" {{ $property->type === 'rent' ? 'selected' : '' }}>For Rent</option>
                        <option value="sell" {{ $property->type === 'sell' ? 'selected' : '' }}>For Sell</option>
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
                    <input type="number" name="bedrooms" class="form-control" value="{{ old('bedrooms', $property->bedrooms) }}" required>
                </div>

                <div class="mb-3">
                    <label for="baths" class="form-label">Baths</label>
                    <input type="number" name="bathrooms" class="form-control" value="{{ old('bathrooms', $property->bathrooms) }}" required>
                </div>

                <div class="mb-3">
                    <label for="size" class="form-label">Size (Sqft)</label>
                    <input type="number" name="area" class="form-control" value="{{ old('area', $property->area) }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ old('description', $property->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="main_image" class="form-label">Property Image</label>
                    <input type="file" name="main_image" class="form-control">
                    @if($property->main_image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $property->main_image) }}" alt="Current Image" width="150">
                        </div>
                    @endif
                </div>

                <div class="mb-3 text-end">
                    <button type="submit" class="btn btn-primary">Update Property</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
