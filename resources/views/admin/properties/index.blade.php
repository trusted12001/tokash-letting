@extends('layouts.dashboard-layout')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-dark">Manage Properties</h4>
        <div>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary me-2">Back to Dashboard</a>
            <a href="{{ route('properties.create') }}" class="btn btn-primary">Add Property</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($properties as $property)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $property->title }}</td>
                    <td>{{ ucfirst($property->type) }}</td>
                    <td>{{ ucfirst($property->status) }}</td>
                    <td>${{ number_format($property->price) }}</td>
                    <td>{{ $property->location }}</td>
                    <td>
                        <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('properties.destroy', $property->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No properties found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
