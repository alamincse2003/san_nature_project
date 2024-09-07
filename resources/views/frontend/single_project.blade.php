@extends('frontend.layouts.master')
@section('title','Project - '.ucfirst($single_project->title ))
@section('project','current-menu-item')
@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img1" style=" background: url({{asset($single_project->banner_photo)}});">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                {{ $single_project->title }}
            </h1>
            <span class="sub-text">{{ $single_project->short_title }}</span>
            <ul class="breadcrumbs-area">
                <li title="Go to konstruk">
                    <a class="active" href="{{ route('home.all') }}">Home</a>
                </li>
                <li>Project</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->


<!-- Services Single Start -->
<div class="rs-services-single pt-50 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 md-mb-50">
                <div class="services-img mb-35">
                    <img src="{{ asset($single_project->photo) }}" alt="" style="width:100% !important;">
                </div>
                    {!! $single_project->description1 !!}
            </div>
            <div class="col-lg-4 pl-36 md-pl-15">
                <ul class="services-list mb-50">
{{--                    @foreach($projects as $project)--}}
{{--                        <li><a class="" href="{{ route('single.projects',[$project->id,$project->slug]) }}">{{ $project->short_title }}</a></li>--}}
{{--                    @endforeach--}}
                    <li><a href="{{ route('projectType','completed') }}">Completed Project</a></li>
                    <li><a href="{{ route('projectType','running') }}">Running Project</a></li>
                    <li><a href="{{ route('projectType','upcoming') }}">Upcoming Project</a></li>
                </ul>
                <div class="services-add mb-50">
                    <div class="services-overlay"></div>
                    <div class="address-wrap-item mb-20">
                        <div class="icon-part mb-37">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h2 class="title">Have any Questions? Call us <span>Today!</span></h2>
                        <div class="divider">
                            <span class="divider-separator"></span>
                        </div>
                        <div class="contact">
                            <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Single End -->
@endsection
