@php
    $sliders = \App\Models\Slider::where('status','active')->orderBy('position','ASC')->get();
@endphp

<div id="rs-slider" class="rs-slider rs-slider-style2">
    <div class="bend niceties">
        <div id="nivoSlider" class="slides">
            @foreach($sliders as $key => $slider)
                @if(($key+1) % 2 == 0)
                    <img class="slies-img" src="{{asset($slider->slider_photo)}}" alt="" title="#slide-22" />
                @else
                    <img src="{{asset($slider->slider_photo)}}" alt="" title="#slide-1" />
                 @endif
            @endforeach
        </div>
        @foreach($sliders as $key => $slider)
            @if(($key+1) % 2 == 0)
                <!-- Slide 2 -->
                <div id="slide-22" class="slider-direction">
                    <div class="container-side-slide2">
                        <div class="content-part">
		        			    <span class="sl-subtitle1">
		        			    	<img class="sl-icons" src="{{asset('frontend')}}/assets/images/slider/style1/shapes/icons3.png" alt="Images">
		        			    	{{ $slider->title }}
		        			    </span>
                            <h1 class="sl-title1">
                                {!!  $slider->description_part1 !!}
                            </h1>
                            <p class="sl-desc1">
                                {!! $slider->description_part2 !!}
                            </p>

                            <div class="slider-bottom">
                                <a class="readon more" href="{{ $slider->button_url }}">{{ $slider->button_name }}</a>
                            </div>

                        </div>
                        <div class="animation-wrap2">
                            <div class="animate-style one">
                                <img class="sl-icons2" src="{{asset('frontend')}}/assets/images/slider/style1/shapes/icons1.png" alt="Images">
                            </div>
                            <div class="animate-style two">
                                <img class="sl-icons2" src="{{asset('frontend')}}/assets/images/slider/style1/shapes/icons2.png" alt="Images">
                            </div>
                            <div class="animate-style three">
                                <img class="sl-icons2" src="{{asset('frontend')}}/assets/images/slider/style1/shapes/icons2.png" alt="Images">
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- Slide 1 -->
                <div id="slide-1" class="slider-direction">
                    <div class="container">
                        <div class="content-part">
		        			    <span class="sl-subtitle">
		        			    	<img class="sl-icons" src="{{asset('frontend')}}/assets/images/slider/style1/shapes/icons3.png" alt="Images">
		        			    	{{ $slider->title }}
		        			    </span>
                            <h1 class="sl-title">
                                {!!  $slider->description_part1 !!}
                            </h1>
                            <p class="sl-desc">
                                {!! $slider->description_part2 !!}
                            </p>
                            <div class="slider-bottom">
                                <a class="readon more" href="{{ $slider->button_url }}">{{ $slider->button_name }}</a>
                            </div>
                        </div>
                        <div class="animation-wrap">
                            <div class="animate-style one">
                                <img class="sl-icons1" src="{{asset('frontend')}}/assets/images/slider/style1/shapes/icons1.png" alt="Images">
                            </div>
                            <div class="animate-style two">
                                <img class="sl-icons1" src="{{asset('frontend')}}/assets/images/slider/style1/shapes/icons2.png" alt="Images">
                            </div>
                            <div class="animate-style three">
                                <img class="sl-icons1" src="{{asset('frontend')}}/assets/images/slider/style1/shapes/icons2.png" alt="Images">
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
