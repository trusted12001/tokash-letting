@extends('layouts.dashboard-layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header text-white text-center" style="background: linear-gradient(to right, #3498db, #2ecc71);">
                <h4 class="mb-0">Forgot Password</h4>
                <small>Forgot your password? No problem. Just let us know your email address and we’ll email you a password reset link.</small>
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

                
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label text-dark">Email</label>
        <input type="email" name="email" id="email" class="form-control" required autofocus>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Email Password Reset Link</button>
    </div>
</form>

            </div>
        </div>
    </div>
</div>
@endsection
