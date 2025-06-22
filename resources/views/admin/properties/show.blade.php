@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-dark">Property Details</h2>
        <a href="{{ route('admin.properties.index') }}" class="btn btn-warning">← Back to List</a>
    </div>

    <div class="card shadow-sm">
        <div class="row g-0">
            @if($property->image)
            <div class="col-md-5">
                <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->title }}" class="img-fluid rounded-start w-100 h-100 object-fit-cover">
            </div>
            @endif

            <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">{{ $property->title }}</h3>
                    <p class="card-text text-muted">{{ $property->description }}</p>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Type:</strong> {{ $property->property_type }}</li>
                        <li class="list-group-item"><strong>Status:</strong> {{ ucfirst($property->status) }}</li>
                        <li class="list-group-item"><strong>Location:</strong> {{ $property->location }}</li>
                        <li class="list-group-item"><strong>Price:</strong> ₦{{ number_format($property->price, 2) }}</li>
                        <li class="list-group-item"><strong>Bedrooms:</strong> {{ $property->bedrooms }}</li>
                        <li class="list-group-item"><strong>Bathrooms:</strong> {{ $property->bathrooms }}</li>
                        <li class="list-group-item"><strong>Size:</strong> {{ $property->size }} sqft</li>
                    </ul>

                    <div class="mt-4">
                        <a href="{{ route('admin.properties.edit', $property->id) }}" class="btn btn-primary">Edit Property</a>
                        <form action="{{ route('admin.properties.destroy', $property->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this property?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete Property</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
