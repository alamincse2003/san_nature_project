<div class="rs-about about-style1 bg1 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
         @php
            $about= App\Models\Overview::where('type', 'about_us')->first();
            @endphp
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="images-part">
                    <img src="{{asset('images/overviews/'.$about->image)}}" alt="About">
                </div>
            </div>
           
            <div class="col-lg-6 pl-50 md-pl-15">
                <div class="sec-title">
                            <span class="sub-text">
                                {{-- <img src="{{asset('frontend')}}/assets/images/shape-1.png" alt="Images"> --}}
                                About Us
                            </span>
                    <h2 class="title pb-20">
                        {{$about->title}}
                       {{-- Let's Build A Better World Together --}}
                    </h2>
                    <p class="desc pb-37" style="text-align: justify">
                       {{-- {!! $about->content !!} --}}
                       {!! \Illuminate\Support\Str::words($about->content, 100, '...') !!}

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
                    <div class="row mt-47 md-mt-25">
                        <div  class="col-lg-6 col-md-4 sm-mb-30">
                            <div class="btn-part">
                                <a class="readon more know" href="{{ route('about.all') }}">Read More</a>
                                {{-- <a class="readon more know" href="{{ route('pageDetails',['about','company-overview']) }}">Read More</a> --}}
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-md-8">
                            <div class="signeture-img">
                                <img src="{{asset('frontend')}}/assets/images/about/style1/signeture1.png" alt="Images">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
