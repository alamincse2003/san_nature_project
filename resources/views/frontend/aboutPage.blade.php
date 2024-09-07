@extends('frontend.layouts.master')
@section('title', 'About Us Page')
@section('about', 'active')
@section('content')
    <div class="rs-about about-style1 bg1 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            @php
                $about = App\Models\Overview::where('type', 'about_us')->first();
            @endphp
            <div class="row y-middle">

                <div class="col-lg-6 md-mb-50 mt-4">
                    <div class="images-part">
                        <iframe src="{{ asset('images/overviews/' . $about->pdf) }}" height="500px" width="100%"
                            frameborder="0"></iframe>
                    </div><br>
                    <div class="images-part">
                        <img src="{{ asset('images/overviews/' . $about->image) }}" alt="About">
                    </div>
                </div>
                <div class="col-lg-6 pl-50 md-pl-15">
                    <div class="sec-title">
                        <span class="sub-text">
                            {{-- <img src="{{asset('frontend')}}/assets/images/shape-1.png" alt="Images"> --}}
                            About Us
                        </span>
                        <h2 class="title pb-20">
                            {{ $about->title }}
                        </h2>
                        <p class="desc pb-37" style="text-align: justify">
                            {!! $about->content !!}

                        </p>
                        {{-- <div class="row y-middle">
                        <div class="col-lg-4 col-md-4 sm-mb-30">
                            <div class="about-img">
                                <img src="{{asset('frontend')}}/images/md.png" alt="Managing Director">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <ul class="check-lists">
                                <li class="list-item">
                                            <span class="icon-list-icon">
                                                <i class="fa fa-check-circle"></i>
                                            </span>
                                    <span class="list-text">Pre-construction services</span>
                                </li>
                                <li class="list-item">
                                            <span class="icon-list-icon">
                                                <i class="fa fa-check-circle"></i>
                                            </span>
                                    <span class="list-text">Industrial manufacturing</span>
                                </li>
                                <li class="list-item">
                                            <span class="icon-list-icon">
                                                <i class="fa fa-check-circle"></i>
                                            </span>
                                    <span class="list-text">Building and construction</span>
                                </li>
                            </ul>
                        </div>
                    </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
