@extends('frontend.layouts.master')
@section('title','Home Page')
@section('home','active')
@section('content')

<!-- Slider Start -->
@includeIf('frontend.layouts._slider')
<!-- Slider End -->

<!-- About Start -->
@includeIf('frontend.layouts._who_we_are')
<!-- About End -->

<!-- What We Do Section Start -->
@includeIf('frontend.layouts._what_we_do')
<!-- What We Do Section End -->

<!-- Counter Start -->
@includeIf('frontend.layouts._counter')
<!-- Counter End -->

<!-- Project Section Start -->
@includeIf('frontend.layouts._projects')
<!-- Project Section End -->

<!-- Why Choose Start -->
@includeIf('frontend.layouts._why_choose_us')
<!-- Why Choose End -->

<!-- Testimonial Section Start -->
@includeIf('frontend.layouts._testimonial')
<!-- Testimonial Section End -->

<!-- Blog Section Start -->
@includeIf('frontend.layouts._blog')
<!-- Blog Section End -->

<!-- Contact Section start -->
<div class="rs-contact contact-style1 bg3" style="background: url({{asset('frontend')}}/assets/images/bg/contact-bg.jpg); background-position: top center; background-repeat: no-repeat; background-size: cover;">
    <div class="row">
        <div class="col-lg-4 offset-2 con-left-6">
            <div class="contact-section">
                <div class="contact-wrap">
                    <div class="sec-title mb-45">
                                <span class="sub-text">
                                    {{-- <img src="{{asset('frontend')}}/assets/images/shape-1.png" alt="Images"> --}}
                                    Lets talk
                                </span>
                        <h2 class="title">
                            Have an upcoming project?
                        </h2>
                    </div>

                    @if(session()->has('success'))
                        {{ session('success') }}
                    @endif
                    <form id="contact-form" action="{{ route('user_contact.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="email" id="email" name="email" placeholder="E-Mail" required="">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="number" id="phone" name="phone" placeholder="Phone Number" required="">
                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="address" name="address" placeholder="Your Address" required="">
                                    @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                    <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                    @error('subject')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <textarea class="from-control" id="message" name="message" placeholder="Your Message Here" required=""></textarea>
                                    @error('message')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="btn-part">
                                <div class="form-group mb-0">
                                    <input class="readon more submit" type="submit" value="Submit Now">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2 pr-50 md-pr-15 con-right-6 md-mt-50">
            <div class="contact-box-item">
                <div class="contact-box mb-20">
                    <div class="contact-icon">
                        <img src="{{asset('frontend')}}/assets/images/contact/style1/icons/1.png" alt="images">
                    </div>
                    <div class="content-text">
                        <h4 class="title"><a href="#">Corporate Office </a></h4>
                        <p class="services-txt">
                            {{ $settings->address }}
                        </p>
                    </div>
                </div>
                <div class="contact-box mb-20">
                    <div class="contact-icon">
                        <img src="{{asset('frontend')}}/assets/images/contact/style1/icons/2.png" alt="images">
                    </div>
                    <div class="content-text">
                        <h4 class="title"><a href="#">Email us</a></h4>
                        <p class="services-txt">
                            <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a><br>
                        </p>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-icon">
                        <img src="{{asset('frontend')}}/assets/images/contact/style1/icons/3.png" alt="images">
                    </div>
                    <div class="content-text">
                        <h4 class="title"><a href="#">Call us</a></h4>
                        <p class="services-txt">
                            <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 contact-right-img"></div>
    </div>
</div>
<!-- Contact Section End -->

<!-- Call To Action Choose Start -->
{{-- <div class="rs-cta bg4 pt-120 pb-115 md-pt-80 md-pb-75" style="background-color: #010D14; background: url({{asset('frontend')}}/assets/images/bg/cta-bg.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="call-action">
            <div class="sec-title text-center">
                        <span class="sub-text yellow-color">
                            <img src="{{asset('frontend')}}/assets/images/shape-1.png" alt="Images">
                            Work With Us !
                        </span>
                <h2 class="title white-color pb-20">
                    Have any upcoming project
                </h2>
                <p class="desc desc3 pb-35">
                    Leverage agile frameworks to provide a robust synopsis for high level overviews.<br>
                    Iterative approaches to corporate strategy foster collaborative thinking
                </p>
                <div class="btn-part">
                    <a class="readon more contact" href="{{ route('user_contact') }}">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Call To Action Choose End -->
@endsection
