@extends('layouts.dashboard-layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header text-white text-center" style="background: linear-gradient(to right, #3498db, #2ecc71);">
                <h4 class="mb-0">Register</h4>
                <small>Create your TOKASH Letting account below. It’s quick and easy!</small>
            </div>
            <div class="card-body bg-light">
                @if (session('status'))
                    <div class="alert alert-success">{ session('status') }</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{ $error }</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label text-dark">Name</label>
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label text-dark">Email</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label text-dark">Password</label>
        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label text-dark">Confirm Password</label>
        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-success">Register</button>
    </div>
</form>

            </div>
        </div>
    </div>
</div>
@endsection
