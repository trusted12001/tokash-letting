
@extends('layouts.dashboard-layout')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">Add New User</div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="roles" class="form-label">Assign Roles</label>
                <select name="roles[]" class="form-control" multiple>
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="d-flex gap-2">
                    <a href="{{ route('dashboard') }}" class="btn btn-warning">Go Back!</a>
                    <button class="btn btn-success" type="submit">Save User</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
