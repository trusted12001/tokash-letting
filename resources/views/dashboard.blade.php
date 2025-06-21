@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
            <h3>Welcome, {{ Auth::user()->name }}!</h3>
            <p>This is your dashboard. From here, you will be able to manage users and properties.</p>
        </div>
    </div>
</div>
@endsection
