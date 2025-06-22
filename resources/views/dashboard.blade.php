@extends('layouts.dashboard-layout')

@section('content')
<div class="row g-4">
    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <i class="fas fa-user-cog fa-2x text-primary mb-3"></i>
                <h5 class="card-title">Manage Profile</h5>
                <p class="card-text">Update your personal details and preferences.</p>
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <i class="fas fa-lock fa-2x text-warning mb-3"></i>
                <h5 class="card-title">Change Password</h5>
                <p class="card-text">Secure your account with a new password.</p>
                <a href="{{ route('profile.edit') }}" class="btn btn-warning">Update Password</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <i class="fas fa-building fa-2x text-success mb-3"></i>
                <h5 class="card-title">Manage Properties</h5>
                <p class="card-text">Add, update or delete property listings.</p>
                <a href="{{ route('admin.properties.index') }}" class="btn btn-success">View Properties</a>
            </div>
        </div>
    </div>
    @role('super-admin')
    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <i class="fas fa-users fa-2x text-danger mb-3"></i>
                <h5 class="card-title">Manage Users</h5>
                <p class="card-text">View and manage registered users (Admins only).</p>
                <a href="{{ route('admin.users.index') }}" class="btn btn-danger">User Management</a>
            </div>
        </div>
    </div>
    @endrole
</div>
@endsection
