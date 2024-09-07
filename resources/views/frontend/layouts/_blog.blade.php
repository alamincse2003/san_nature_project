{{-- @php
    $blogs = \App\Models\Post::where('status','active')->orderBy('id','DESC')->limit(6)->get()
@endphp
<div id="rs-blog" class="rs-blog blog-main-home pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-45 md-mb-25">
			        	<span class="sub-text">
			        		<img src="{{ asset('frontend') }}/assets/images/shape-1.png" alt="Images">
			        		News & Blog
			        	</span>
            <h2 class="title">
                Our latest news post<br>
                and news?
            </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
           @foreach($blogs as $blog)
                <div class="blog-item">
                <div class="image-wrap" style="height: 250px; !important;">
                    <a href="{{ route('blogDetails',[$blog->id,$blog->slug]) }}">
                        <img src="{{ asset($blog->photo) }}" alt="">
                    </a>
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li class="date"><i class="fa fa-calendar-check-o"></i>{{ date('d M Y',strtotime($blog->created_at)) }}</li>
                        <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                    </ul>
                    <h3 class="blog-title" style="font-family: SolaimanLipi !important;">
                        <a href="{{ route('blogDetails',[$blog->id,$blog->slug]) }}">{{ $blog->title }}</a></h3>
                    <div class="blog-button"><a href="{{ route('blogDetails',[$blog->id,$blog->slug]) }}">Read More</a></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> --}}
