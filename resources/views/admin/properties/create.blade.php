@extends('layouts.dashboard-layout')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-dark">Add New Property</h4>
        <div>
            <a href="{{ route('dashboard') }}" class="btn btn-warning me-2">Back to Dashboard</a>
            <a href="{{ route('admin.properties.index') }}" class="btn btn-secondary">All Properties</a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.properties.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Property Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" class="form-select" required>
                        <option value="">-- Select Type --</option>
                        <option value="for-rent" {{ old('type') == 'for-rent' ? 'selected' : '' }}>For Rent</option>
                        <option value="for-sell" {{ old('type') == 'for-sell' ? 'selected' : '' }}>For Sell</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category (e.g. Villa, Apartment)</label>
                    <input type="text" name="category" class="form-control" value="{{ old('category') }}" required>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" value="{{ old('location') }}" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price ($/mo)</label>
                    <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>
                </div>

                <div class="mb-3">
                    <label for="beds" class="form-label">Number of Beds</label>
                    <input type="number" name="beds" class="form-control" value="{{ old('beds') }}" required>
                </div>

                <div class="mb-3">
                    <label for="baths" class="form-label">Number of Baths</label>
                    <input type="number" name="baths" class="form-control" value="{{ old('baths') }}" required>
                </div>

                <div class="mb-3">
                    <label for="size" class="form-label">Size (Sqft)</label>
                    <input type="number" name="size" class="form-control" value="{{ old('size') }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Property Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Property Description</label>
                    <textarea name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Submit Property</button>
            </form>
        </div>
    </div>
</div>
@endsection
