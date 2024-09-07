@php
    $sliders = \App\Models\Slider::where('status','active')->orderBy('position','ASC')->get();
@endphp

<div id="rs-slider" class="rs-slider rs-slider-style2">
    <div class="bend niceties">
        <div id="nivoSlider" class="slides">
            @foreach($sliders as $key => $slider)
                <img src="{{asset($slider->slider_photo)}}" alt="" title="#slide-1">
            @endforeach
        </div>
        @foreach($sliders as $key => $slider)
            <div id="slide-1" class="slider-direction">
                <div class="container">
                    <div class="content-part">
                        <span class="sl-subtitle" style="color: white;">
                            {{-- <img class="sl-icons"
                                 src="{{asset('frontend')}}/assets/images/slider/style1/shapes/icons3.png"
                                 alt="Images"> --}}
                            {{ $slider->title }}
                        </span>
                        <h1 class="sl-title" style="color: white;">
                            {!!  $slider->description_part1 !!}
                        </h1>
                        <p class="sl-desc" style="color: white;">
                            {!! $slider->description_part2 !!}
                        </p>
                        @if($slider->button_url)
                        <div class="slider-bottom">
                            <a class="readon more" href="{{ $slider->button_url }}">{{ $slider->button_name }}</a>
                        </div>
                        @endif
                    </div>
                    <div class="animation-wrap">
                        <div class="animate-style one">
                            <img class="sl-icons1"
                                 src="{{asset('frontend')}}/assets/images/slider/style1/shapes/icons1.png" alt="Images">
                        </div>
                        <div class="animate-style two">
                            {{-- <img class="sl-icons1"
                                 src="{{asset('frontend')}}/assets/images/slider/style1/shapes/icons2.png" alt="Images"> --}}
                        </div>
                        <div class="animate-style three">
                            {{-- <img class="sl-icons1"
                                 src="{{asset('frontend')}}/assets/images/slider/style1/shapes/icons2.png" alt="Images"> --}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@push('mainJs')

@endpush
