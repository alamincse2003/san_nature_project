@extends('frontend.layouts.master')
@section('title',ucfirst($projectType) . ' Projects')
@section('project','current-menu-item')
@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img1" style="background: url({{asset($single_project->banner_photo)}});">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
{{--                {{ $single_project->short_title }}--}}
                Our All {{ ucfirst($projectType) }} Projects
            </h1>
            <span class="sub-text">
{{--                {{ $single_project->title }} --}}
                We Build Your Dream
            </span>
            <ul class="breadcrumbs-area">
                <li title="Go to konstruk">
                    <a class="active" href="{{ route('home.all') }}">Home</a>
                </li>
                <li>Projects</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Projects Section Start -->

<div class="rs-services services-main-home gray-bg pt-60 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        @if(count($projects) > 0)
        <div class="row">
            @foreach($projects as $key => $project)
                @if($project->photo)
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-image">
                                    <img src="{{ asset($project->photo) }}" alt="Services" style="width: 457px; height: 455px; !important;">
                                </div>
                                <div class="services-content">
                                    <div class="service-inner">
                                        <div class="icon-top">
                                            {{--                                        <img src="{{ asset($project->icon) }}" alt="Services">--}}
                                            <img src="{{ asset('frontend/assets/custom/ms-icon.png') }}" alt="Masa Steels">
                                        </div>
                                        <div class="services-titles">
                                            <h3 class="title"><a href="{{ route('single.projects',[$project->id,$project->slug]) }}">{{ $project->short_title }}</a></h3>
                                        </div>
                                        <p class="services-txt">{{ $project->title }} </p>
                                        <div class="services-btn">
                                            <a class="btn-text" href="{{ route('single.projects',[$project->id,$project->slug]) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="normarl-text-area">
                                    <div class="services-titles">
                                        <h3 class="title"><a href="{{ route('single.projects',[$project->id,$project->slug]) }}">{{ $project->title }}</a></h3>
                                    </div>
                                    <div class="icon-image">
                                        {{--                                    <img src="{{ asset($project->icon) }}" alt="Services">--}}
                                        <img src="{{ asset('frontend/assets/custom/ms-icon.png') }}" alt="Masa Steels">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        @else
            <div class="sec-title text-center md-mb-35">
                <h2 class="title">
                    No {{ ucfirst($projectType) }} Project Found
                </h2>
            </div>
        @endif
    </div>
</div>

<!-- Projects Section End -->
@endsection
