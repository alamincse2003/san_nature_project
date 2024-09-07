@php
$testimonials = \App\Models\Testimonial::where('status','active')->orderBy('id','DESC')->get()
@endphp
<div id="rs-testimonial" class="rs-testimonial testimonial-style1 gray-bg pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 md-mb-50">
                <div class="sec-title mb-45">
		        				<span class="sub-text text-center">
		        					{{-- <img src="{{ asset('frontend') }}/assets/images/shape-1.png" alt="Images"> --}}
		        					Testimonials
		        				</span>
                    <h2 class="title text-center">
                        Our clients reviews.
                    </h2>
                </div>
                <div class="testi-item-content">
                    <div class="slider testi-slide-1">
                        @foreach($testimonials as $testimonial)
                            <div class="testi-item">
                            <div class="item-content">
                                <span><img src="{{ asset('frontend') }}/assets/images/testimonial/style1/quote.png" alt="Testimonial"></span>
                                <p>
                                    {{ $testimonial->description }}
                                </p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="{{ $testimonial->photo }}" class="mx-auto"  alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name text-center">{{ $testimonial->name ? ucwords($testimonial->name) : 'Zariq Ltd' }}</div>
                                    <span class="testi-title">{{ $testimonial->designation ? ucwords($testimonial->designation) : 'Managing Director' }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Team Section Start -->
            {{-- <div class="col-lg-6">
                <div class="rs-team team-style1">
                    <div class="sec-title mb-45">
			        				<span class="sub-text">
			        					
			        					Team Members
			        				</span>
                        <h2 class="title">
                            Expert team members.
                        </h2>
                    </div>
                    <div class="vertical-widget-content">
                        <div class="slick-part single-product-slider">
                            <div class="slider slider-for">
                                <div class="team-inner-wrap">
                                    <div class="image-wrap">
                                        <a href="#"><img src="{{ asset('frontend/images/md.jpg') }}" alt="Team"></a>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title"><a href="#">MD Saidur Rahman Bhuiyan</a></h3>
                                        <span class="team-title">Managing Director</span>
                                    </div>
                                </div>
                                <div class="team-inner-wrap">
                                    <div class="image-wrap">
                                        <a href="#"><img src="{{ asset('frontend') }}/assets/images/team/tm2.jpg" alt="Team"></a>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title"><a href="#">Eng Forhad Ahmad</a></h3>
                                        <span class="team-title">Project Manager</span>
                                    </div>
                                </div>
                                <div class="team-inner-wrap">
                                    <div class="image-wrap">
                                        <a href="#"><img src="{{ asset('frontend') }}/assets/images/team/tm3.jpg" alt="Team"></a>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title"><a href="#">Masud Maria</a></h3>
                                        <span class="team-title">Foreman</span>
                                    </div>
                                </div>
                                <div class="team-inner-wrap">
                                    <div class="image-wrap">
                                        <a href="#"><img src="{{ asset('frontend') }}/assets/images/team/tm4.jpg" alt="Team"></a>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title"><a href="#">Shahinur Islam</a></h3>
                                        <span class="team-title">Construction Worker</span>
                                    </div>
                                </div>
                                <div class="team-inner-wrap">
                                    <div class="image-wrap">
                                        <a href="#"><img src="{{ asset('frontend') }}/assets/images/team/tm5.jpg" alt="Team"></a>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title"><a href="#">Abdur Rashid</a></h3>
                                        <span class="team-title">CEO & Engineer</span>
                                    </div>
                                </div>
                                <div class="team-inner-wrap">
                                    <div class="image-wrap">
                                        <a href="#"><img src="{{ asset('frontend') }}/assets/images/team/tm6.jpg" alt="Team"></a>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title"><a href="#">Deluar Hossen</a></h3>
                                        <span class="team-title">Builder Advisor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slider slider-nav">
                                <div class="images-list">
                                    <a href="#"><img src="{{ asset('frontend/images/md.jpg') }}" alt="Sabbir"></a>
                                </div>
                                <div class="images-list">
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/team/tm2.jpg" alt="Team"></a>
                                </div>
                                <div class="images-list">
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/team/tm3.jpg" alt="Team"></a>
                                </div>
                                <div class="images-list">
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/team/tm4.jpg" alt="Team"></a>
                                </div>
                                <div class="images-list">
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/team/tm5.jpg" alt="Team"></a>
                                </div>
                                <div class="images-list">
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/team/tm6.jpg" alt="Team"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div> --}}
             <!-- Team Section End -->
        </div>
    </div>
    <!-- Partner Start -->
{{--    @includeIf('frontend.layouts._partner')--}}
    <!-- Partner End -->
</div>
