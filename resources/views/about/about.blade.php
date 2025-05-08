@extends('layouts.app')

@section('content')


    <!--=====================================-->
    <!--=   Breadcrumb     Start            =-->
    <!--=====================================-->

        <div class="breadcrumb-wrap breadcrumb-wrap-2">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Usx</li>
                    </ol>
                </nav>
            </div>
        </div>
    <!--=====================================-->
    <!--=   About     Start                 =-->
    <!--=====================================-->

        <section class="about-wrap2">
            <div class="container">
                <div class="row flex-row-reverse flex-lg-row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-img">
                            <img src="{{ asset('assets/img/blog/about8.jpg') }}" alt="about" width="746" height="587">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-box3 wow fadeInUp" data-wow-delay=".2s">
                            <span class="item-subtitle">About Us</span>
                            <h2 class="item-title">We're on a Mission to Change  View of RealEstate Field.</h2>
                            <p>when an unknown printer took a galley of type and scrambled it to make
                                type specimen bookt has survived not only five centuries alsoey jequery
                                the leap into electronic typesetting.
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-layout1">
                                        <div class="item-img">
                                            <img src="{{ asset('assets/img/figure/shape14.svg') }}" alt="shape" width="60" height="57">
                                        </div>
                                        <h3 class="item-sm-title">Modern Villa</h3>
                                        <p>when unknown printer took galley
                                            of type and scrambled.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-layout1">
                                        <div class="item-img">
                                            <img src="{{ asset('assets/img/figure/shape15.svg') }}" alt="shape" width="62" height="57">
                                        </div>
                                        <h3 class="item-sm-title">Secure Payment</h3>
                                        <p>when unknown printer took galley
                                            of type and scrambled.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row flex-row flex-lg-row-reverse" >
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-layout3">
                            <div class="item-img">
                                <img src="{{ asset('assets/img/blog/about9.jpg')}}" alt="about" width="809" height="587">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-layout2">
                            <span class="item-subtitle">Company Power</span>
                            <h2 class="item-title">The Core Company Values Of Our main Goal.</h2>
                            <p>when an unknown printer took a galley of type and scrambled it to make
                                type specimen bookt has survived.
                            </p>
                            <div class="skills-wrap-layout-2 counter-appear">
                                <div class="single-skill">
                                    <div class="title-bar">
                                        <h4 class="title"> Modern Technology </h4>

                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-per" data-per="59"></div>
                                    </div>
                                </div>

                                <div class="single-skill">
                                    <div class="title-bar">
                                        <h4 class="title">Tax Solution Area</h4>

                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-per" data-per="79"></div>
                                    </div>
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

        <section class="property-banner-wrap1 parallaxie" data-bg-image="img/banner/banner3.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="property-box1 wow slideInUp" data-wow-delay="100">
                            <div class="item-subtitle">Let’s Take a Tour</div>
                            <h2 class="item-title">Search Property Smarter, Quicker & Anywhere</h2>
                            <div class="play-button">
                                <div class="item-icon">
                                    <a href="https://youtube.com/shorts/SYW2edaAJio?feature=share" class="play-btn">
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
    <!--=====================================-->
    <!--=   Brand     Start                 =-->
    <!--=====================================-->

        <div class="brand-wrap1 brand-wrap2">
            <div class="container">
                <div class="brand-layout swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand1.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand2.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand3.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand4.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand5.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand6.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand1.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand2.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand3.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand4.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand5.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand6.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand1.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand2.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img">
                                    <a href="index.html"><img src="{{ asset('assets/img/brand/brand3.svg') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--=====================================-->
    <!--=   Footer     Start                =-->
    <!--=====================================-->

        <!-- start back to top -->
        <a href="javascript:void(0)" id="back-to-top">
            <i class="fas fa-angle-double-up"></i>
        </a>
        <!-- End back to top -->

    </div>
    <div id="template-search" class="template-search">
        <button type="button" class="close">×</button>
        <form class="search-form">
          <input type="search" value="" placeholder="Search" />
          <button type="submit" class="search-btn btn-ghost style-1">
            <i class="flaticon-search"></i>
          </button>
        </form>
    </div>



@endsection
