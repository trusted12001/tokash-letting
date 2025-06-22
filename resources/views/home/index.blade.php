@extends('layouts.app')

@section('content')


<section class="main-banner-wrap1" data-bg-image="{{ asset('assets/img/slider/slider4.jpg') }}">
    <span class="banner-shape1">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="banner-shpape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
        </svg>
    </span>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="main-banner-box1">
                    <h1 class="item-title wow fadeInUp" data-wow-delay=".4s">Short Lets Designed for Easy Living.</h1>
                    <div class="listing-category-list wow fadeInUp" data-wow-delay=".6s">
                        <div class="search-radio">
                            <ul class="list-inline">
                                <li class="apartments">
                                    <label for="apartments" class="active">
                                        <i class="far fa-building active"></i>
                                        <span>Apartments</span>
                                        <input checked="" type="radio" name="rtcl_category" id="apartments" value="apartments">
                                    </label>
                                </li>
                                <li class="home">
                                    <label for="home">
                                        <i class="fas fa-home"></i>
                                        <span>Home</span>
                                        <input checked="" type="radio" name="rtcl_category" id="home" value="home">
                                    </label>
                                </li>
                                <li class="office">
                                    <label for="office">
                                        <i class="fas fa-briefcase"></i>
                                        <span>Office</span>
                                        <input checked="" type="radio" name="rtcl_category" id="office" value="office">
                                    </label>
                                </li>
                                <li class="shop">
                                    <label for="shop">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>Shop</span>
                                        <input checked="" type="radio" name="rtcl_category" id="shop" value="shop">
                                    </label>
                                </li>
                                <li class="villa">
                                    <label for="villa">
                                        <i class="fas fa-building"></i>
                                        <span>Villa</span>
                                        <input checked="" type="radio" name="rtcl_category" id="villa" value="villa">
                                    </label>
                                </li>
                                <li class="restaurant">
                                    <label for="restaurant">
                                        <i class="fas fa-utensils"></i>
                                        <span>Restaurant</span>
                                        <input checked="" type="radio" name="rtcl_category" id="restaurant" value="restaurant">
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="banner-search-wrap">
                        <div class="rld-main-search">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="box">
                                        <div class="box-top">
                                            <div class="rld-single-input item">
                                                <input type="text" placeholder="Enter Kewword here...">
                                            </div>
                                            <div class="rld-single-select ml-22">
                                                <select class="select single-select">
                                                    <option value="1">Property Type</option>
                                                    <option value="2">Family House</option>
                                                    <option value="3">Apartment</option>
                                                    <option value="3">Condo</option>
                                                </select>
                                            </div>
                                            <div class="rld-single-select item">
                                                <select class="select single-select mr-0">
                                                    <option value="1">All Cities</option>
                                                    <option value="2">Los Angeles</option>
                                                    <option value="3">Chicago</option>
                                                    <option value="3">Philadelphia</option>
                                                </select>
                                            </div>
                                            <div class="item rt-filter-btn">
                                                <div class="dropdown-filter item">
                                                    <span>
                                                        <i class="fas fa-sliders-h"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-button-area">
                                                    <a class="filter-btn" href="with-sidebar.html"><span>Search</span><i
                                                            class="fas fa-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="explore__form-checkbox-list full-filter">
                                            <div class="row">
                                                <div class="row">

                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <h4 class="text-dark">Amenities</h4>
                                                        <ul class="no-ul-list third-row">
                                                            <li>
                                                                <input id="a-1" class="checkbox-custom"
                                                                    name="a-1" type="checkbox">
                                                                <label for="a-1"
                                                                    class="checkbox-custom-label">Air
                                                                    Condition</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-2" class="checkbox-custom"
                                                                    name="a-2" type="checkbox">
                                                                <label for="a-2"
                                                                    class="checkbox-custom-label">Bedding</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-3" class="checkbox-custom"
                                                                    name="a-3" type="checkbox">
                                                                <label for="a-3"
                                                                    class="checkbox-custom-label">Heating</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-4" class="checkbox-custom"
                                                                    name="a-4" type="checkbox">
                                                                <label for="a-4"
                                                                    class="checkbox-custom-label">Internet</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-5" class="checkbox-custom"
                                                                    name="a-5" type="checkbox">
                                                                <label for="a-5"
                                                                    class="checkbox-custom-label">Microwave</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-6" class="checkbox-custom"
                                                                    name="a-6" type="checkbox">
                                                                <label for="a-6"
                                                                    class="checkbox-custom-label">Smoking
                                                                    Allow</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-7" class="checkbox-custom"
                                                                    name="a-7" type="checkbox">
                                                                <label for="a-7"
                                                                    class="checkbox-custom-label">Terrace</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-8" class="checkbox-custom"
                                                                    name="a-8" type="checkbox">
                                                                <label for="a-8"
                                                                    class="checkbox-custom-label">Balcony</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-9" class="checkbox-custom"
                                                                    name="a-9" type="checkbox">
                                                                <label for="a-9"
                                                                    class="checkbox-custom-label">Car Park</label>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="filter-button">
                                                    <a href="index.html" class="filter-btn1">Apply Filter</a>
                                                    <a href="index.html" class="filter-btn1 reset-btn">Reset Filter<i
                                                            class="fas fa-redo-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="item-para wow fadeInUp" data-wow-delay=".4s">We’ve more apartments, place & plot.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=   Property     Start              =-->
<!--=====================================-->

<section class="property-wrap1" id="my_properties">
    <div class="container">
        <div class="isotope-wrap">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-sm-12">
                    <div class="item-heading-left">
                        <span class="section-subtitle">Our PROPERTIES</span>
                        <h2 class="section-title">Latest Properties</h2>
                        <div class="bg-title-wrap" style="display: block;">
                            <span class="background-title solid">Properties</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-12">
                    <div class="isotope-classes-tab">
                        <a class="current nav-item" data-filter="*">All Types</a>
                        <a class="nav-item" data-filter=".for-sell">For Sell</a>
                        <a class="nav-item" data-filter=".for-rent">For Rent</a>
                    </div>
                </div>
            </div>
            <div class="row featuredContainer">
                @forelse($latestProperties as $property)
                    <div class="col-xl-4 col-lg-6 col-md-6 {{ $property->type == 'rent' ? 'for-rent' : 'for-sell' }}">
                        <div class="property-box2 wow animated fadeInUp" data-wow-delay=".2s">
                            <div class="item-img">
                                <a href="{{ route('admin.properties.show', $property->id) }}">
                                    <img src="{{ asset('storage/' . $property->main_image) }}" alt="{{ $property->title }}" width="510" height="340">
                                </a>
                                <div class="item-category-box1">
                                    <div class="item-category">{{ ucfirst($property->type) }}</div>
                                </div>
                                <div class="rent-price">
                                    <div class="item-price">₦{{ number_format($property->price) }}<span><i>/</i>{{ $property->billing_cycle }}</span></div>
                                </div>
                            </div>
                            <div class="item-category10"><a href="#">{{ $property->category }}</a></div>
                            <div class="item-content">
                                <div class="verified-area">
                                    <h3 class="item-title">
                                        <a href="{{ route('admin.properties.show', $property->id) }}">{{ $property->title }}</a>
                                    </h3>
                                </div>
                                <div class="location-area"><i class="flaticon-maps-and-flags"></i>{{ $property->location }}</div>
                                <div class="item-categoery3">
                                    <ul>
                                        <li><i class="flaticon-bed"></i>Beds: {{ $property->bedrooms }}</li>
                                        <li><i class="flaticon-shower"></i>Baths: {{ $property->bathrooms }}</li>
                                        <li><i class="flaticon-two-overlapping-square"></i>{{ $property->area }} Sqft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">No properties available at the moment.</p>
                @endforelse
            </div>
        </div>
    </div>
</section>



<!--=====================================-->
<!--=   About     Start                 =-->
<!--=====================================-->

<section class="about-wrap1 motion-effects-wrap">
    <div class="shape-img1">
        <img src="{{ asset('assets/img/svg/video-bg-2.svg') }}" alt="shape" width="455" height="516">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-box1 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="">
                        <div class="motion-effects1">
                            <img src="{{ asset('assets/img/figure/shape7.png') }}" alt="shape" width="95" height="87">
                        </div>
                        <div class="motion-effects2">
                            <img src="{{ asset('assets/img/figure/shape8.png') }}" alt="shape" width="90" height="46">
                        </div>
                    </div>
                    <div class="item-img">
                        <a href="single-listing1.html"><img src="{{ asset('assets/img/blog/about1.jpg') }}" alt="about" width="626" height="485"></a>
                    </div>
                    <div class="play-button">
                        <div class="item-icon">
                            <a href="https://www.youtube.com/shorts/SYW2edaAJio" class="play-btn play-btn-big">
                                <span class="play-icon style-2">
                                    <i class="fas fa-play"></i>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-box2 wow fadeInRight" data-wow-delay=".5s">
                    <div class="item-heading-left mb-bottom">
                        <span class="section-subtitle">Why Choose Our Properties</span>
                        <h2 class="section-title">The experts in local and international property</h2>
                        <div class="bg-title-wrap" style="display: block;">
                            <span class="background-title solid">Choose</span>
                        </div>
                    </div>
                    <p>Agent hen an unknown printer took a galley of type and scramble
                        d it to make a type specimen book. It has survived not only five
                        centuries, but also the leap into electronic.
                    </p>
                    <div class="about-list">
                        <ul>
                            <li><i class="fas fa-check"></i>Outstanding property </li>
                            <li><i class="fas fa-check"></i>Modern City Locations </li>
                            <li><i class="fas fa-check"></i>Specialist services </li>
                            <li><i class="fas fa-check"></i>Market-leading research</li>
                        </ul>
                    </div>
                    <div class="about-button">
                        <a href="single-listing1.html" class="item-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=   Location     Start              =-->
<!--=====================================-->

<section class="location-wrap1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-12">
                <div class="item-heading-left">
                    <span class="section-subtitle">Target Areas</span>
                    <h2 class="section-title">Popular Landmarks</h2>
                    <div class="bg-title-wrap" style="display: block;">
                        <span class="background-title solid">Locations</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12">
                <div class="heading-button">
                    <a href="single-listing1.html" class="heading-btn item-btn-2">Explore More</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="location-box1 wow zoomIn" data-wow-delay=".2s">
                    <div class="item-img">
                        <a href="single-listing1.html"><img src="{{ asset('assets/img/blog/location1.jpg') }}" alt="location" width="510" height="660"></a>
                    </div>
                    <div class="item-content">
                        <div class="content-body">
                            <div class="item-category">Kano Round-about</div>
                            <div class="item-title">
                                <h3><a href="single-listing2.html">Kano</a></h3>
                            </div>
                        </div>
                        <div class="location-button">
                            <a href="single-listing3.html" class="location-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="location-box1 wow zoomIn" data-wow-delay=".6s">
                    <div class="item-img">
                        <a href="single-listing1.html"><img src="{{ asset('assets/img/blog/location2.jpg') }}" alt="location" width="510" height="660"></a>
                    </div>
                    <div class="item-content">
                        <div class="content-body">
                            <div class="item-category">Abuja City Gate</div>
                            <div class="item-title">
                                <h3><a href="single-listing2.html">Abuja</a></h3>
                            </div>
                        </div>
                        <div class="location-button">
                            <a href="single-listing3.html" class="location-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="location-box1 wow zoomIn" data-wow-delay=".4s">
                    <div class="item-img">
                        <a href="single-listing1.html"><img src="{{ asset('assets/img/blog/location3.jpg') }}" alt="location" width="510" height="660"></a>
                    </div>
                    <div class="item-content">
                        <div class="content-body">
                            <div class="item-category">Cocoa House</div>
                            <div class="item-title">
                                <h3><a href="single-listing2.html">Ibadan</a></h3>
                            </div>
                        </div>
                        <div class="location-button">
                            <a href="single-listing3.html" class="location-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="location-box1 wow zoomIn" data-wow-delay=".2s">
                    <div class="item-img">
                        <a href="single-listing1.html"><img src="{{ asset('assets/img/blog/location4.jpg') }}" alt="location" width="510" height="660"></a>
                    </div>
                    <div class="item-content">
                        <div class="content-body">
                            <div class="item-category">Lekki-Ikoyi Bridge</div>
                            <div class="item-title">
                                <h3><a href="single-listing2.html">Lagos</a></h3>
                            </div>
                        </div>
                        <div class="location-button">
                            <a href="single-listing3.html" class="location-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=   Property Banner     Start       =-->
<!--=====================================-->

<section class="property-banner-wrap1 parallaxie" data-bg-image="{{ asset('assets/img/banner/banner3.jpg')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="property-box1 wow slideInUp" data-wow-delay="100">
                    <div class="item-subtitle">Take a Tour</div>
                    <h3 class="item-title">Let's take you round for a quick tour</h3>
                    <div class="play-button">
                        <div class="item-icon">
                            <a href="http://www.youtube.com/watch?v=1iIZeIy7TqM" class="play-btn">
                                <span class="play-icon style-1">
                                    <i class="fas fa-play"></i>
                                </span>
                                <span class="play-text">Watch Video</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="property-img wow fadeInUp" data-wow-delay="100">
                    <div class="bg-title-wrap" style="display: block;">
                        <span class="background-title solid">Property For All</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
