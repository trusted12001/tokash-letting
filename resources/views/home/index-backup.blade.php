@extends('layouts.app')

@section('content')

<!-- Hero Banner -->
<section class="hero-home1 pb90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="home1-hero-content">
                    <h1 class="title">Find Your Perfect Place to Stay</h1>
                    <p class="text">Search short and long stay properties across Nigeria with flexible pricing and packages.</p>
                </div>

                <!-- Search Box -->
                <form action="{{ route('properties.search') }}" method="GET" class="search-box mt-4">
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" name="location" class="form-control" placeholder="Enter Location">
                        </div>
                        <div class="col-md-4">
                            <select name="duration_type" class="form-select">
                                <option value="">Any Duration</option>
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                                <option value="yearly">Yearly</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-thm w-100" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5">
                <img src="{{ asset('assets/images/home-banner.png') }}" alt="Home Banner" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- You can continue with popular listings, testimonials, CTA, etc... -->

@endsection
