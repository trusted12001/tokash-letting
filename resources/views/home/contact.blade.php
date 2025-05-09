@extends('layouts.app')

@section('content')


 <!--=====================================-->
    <!--=   Breadcrumb     Start            =-->
    <!--=====================================-->

    @section('header')
    @include('partials.otherHeader')
    @endsection

     <!--=====================================-->
    <!--=   Breadcrumb     Start            =-->
    <!--=====================================-->

    <div class="breadcrumb-wrap">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Page</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="contact-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-box1">
                        <div class="contact-img">
                            <img src="{{ asset('assets/img/blog/contact1.jpg') }}" alt="contact" height="502" width="607">
                        </div>
                        <div class="contact-content">
                            <h3 class="contact-title">Office Information</h3>
                            <div class="contact-list">
                                <ul>
                                    <li>Tokash & Associates Ltd.</li>
                                    <li>Block, Flat 1, NCAA Quraters, NAIA</li>
                                    <li>Abuja, FCT</li>
                                    <li>Abuja</li>
                                </ul>
                            </div>
                            <div class="phone-box">
                                <div class="item-lebel">Emergency Call :</div>
                                <div class="phone-number">+234 70 8192 9243</div>
                                <div class="item-icon"><i class="fas fa-phone-alt"></i></div>
                            </div>
                            <div class="phone-box">
                                <div class="item-lebel">Email :</div>
                                <div class="phone-number">tokash38@hotmail.com</div>
                                <div class="item-icon"><i class="fas fa-envelope"></i></div>
                            </div>
                            <div class="social-box">
                                <div class="item-lebel">Social Share :</div>
                                <ul class="item-social">
                                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                                <div class="item-icon"><i class="fas fa-share-alt"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-box2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5088.270389800074!2d7.2668153656202525!3d9.006363608210444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e71006052cff7%3A0x37e1444c4cb76c79!2sNCAA%20Abuja%20regional%20office!5e0!3m2!1sen!2sng!4v1746798985580!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="contact-content">
                            <h3 class="contact-title">Quick Contact</h3>
                            <p>Borem ipsum dolor sit amet conse ctetur adipisicing elit sed do eiusmod 
                                Eorem ipsum dolor sit amet conse ctetur.
                            </p>
                            <form class="contact-box rt-contact-form">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Name *</label>
                                        <input type="text" class="form-control" name="fname" placeholder="First Name*" data-error="First Name is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Phone *</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone*" data-error="Phone is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Message *</label>
                                        <textarea name="comment" id="message" class="form-text"  placeholder="Message" cols="30" rows="5" data-error="Message Name is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <button type="submit" class="item-btn">Send message</button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
