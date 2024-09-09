@extends('frontend.layouts.master')
@section('title', 'Service Page')
@section('service', 'active')
@section('content')
    <section class="container">
        <h2 class="text-center mt-5">Our Services at a GLANCE</h2>
        <div>
            @php
                $service_manager = App\Models\ServiceManager::get()->first();
            @endphp
            <div>
                <p>{!! $service_manager->content !!}</p>

            </div>
        </div>
    </section>

@endsection

{{-- ============================ --}}
{{-- @php
$services = \App\Models\Page::where('page_category','service')->where('status','active')->limit(3)->get();
@endphp
<div class="rs-services services-main-home gray-bg pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-55 md-mb-35">
			    		<span class="sub-text">
			    			<img src="{{asset('frontend')}}/assets/images/shape-1.png" alt="Images">
What We Do
</span>
<h2 class="title">
    Develop comprehensive solutions<br>
    for each project
</h2>
</div>
<div class="row">
    @foreach ($services as $key => $service)
    @if ($service->photo)
    <div class="col-xl-4 col-md-6 mb-30">
        <div class="services-item">
            <div class="services-wrap">
                <div class="services-image">
                    <img src="{{ asset($service->photo) }}" alt="Services"
                        style="width: 457px; height: 455px; !important;">
                </div>
                <div class="services-content">
                    <div class="service-inner">
                        <div class="icon-top">
                            <img src="{{ asset('frontend/assets/custom/ms-icon.png') }}" alt="Masa Steels">
                        </div>
                        <div class="services-titles">
                            <h3 class="title"><a
                                    href="{{ route('pageDetails',['service',$service->slug]) }}">{{ $service->short_title }}</a>
                            </h3>
                        </div>
                        <p class="services-txt">{{ $service->title }} </p>
                        <div class="services-btn">
                            <a class="btn-text" href="{{ route('pageDetails',['service',$service->slug]) }}">Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="normarl-text-area">
                    <div class="services-titles">
                        <h3 class="title"><a
                                href="{{ route('pageDetails',['service',$service->slug]) }}">{{ $service->page_name }}</a>
                        </h3>
                    </div>
                    <div class="icon-image">
                        <img src="{{ asset('frontend/assets/custom/ms-icon.png') }}" alt="Masa Steels">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
</div>
</div> --}}
