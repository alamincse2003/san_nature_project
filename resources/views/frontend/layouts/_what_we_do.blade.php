<div class="rs-about about-style1 bg1 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        @php
            $what_we_do= App\Models\Overview::where('type', 'what_we_do')->first();
            @endphp
        <div class="row y-middle">
            <div class="col-lg-6 pl-50 md-pl-15">
                <div class="sec-title what-we-do">
                            <span class="sub-text">
                                {{-- <img src="{{asset('frontend')}}/assets/images/shape-1.png" alt="Images"> --}}
                                What We Do
                            </span>
                    <h2 class="title pb-20">
                       {{$what_we_do->title}}
                    </h2>
                    <p class="desc pb-37" style="text-align: justify">
                       {!! $what_we_do->content !!}
                    </p>
                   
                    <div class="row mt-47 md-mt-25">
                        <div  class="col-lg-6 col-md-4 sm-mb-30">
                            <div class="btn-part">
                                {{-- <a class="readon more know" href="{{ route('pageDetails',['about','company-overview']) }}">Read More</a> --}}
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6 md-mb-50">
                <div class="images-part">
                     <img src="{{asset('images/overviews/'.$what_we_do->image)}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>