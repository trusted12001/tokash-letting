@extends('layouts.dashboard-layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header text-white text-center" style="background: linear-gradient(to right, #3498db, #2ecc71);">
                <h4 class="mb-0">Verify Email</h4>
                <small>Thanks for signing up! Please verify your email address by clicking the link we just emailed to you.</small>
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

                
<div class="mb-3">
    <p class="text-dark">Before proceeding, please check your email for a verification link.</p>
    <p class="text-dark">If you didn’t receive the email, we will gladly send you another.</p>
</div>
<form method="POST" action="{{ route('verification.send') }}">
    @csrf
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Resend Verification Email</button>
    </div>
</form>

            </div>
        </div>
    </div>
</div>
@endsection
