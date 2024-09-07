@extends('frontend.layouts.master')
@section('title',''.$page->page_name ? ucfirst($page->page_name) : 'Page')
@section('about','current-menu-item')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1" style="background: url({{asset($page->featured_photo)}});">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    {{ $page->page_name }}
                </h1>
                <span class="sub-text">{{ $page->title }}</span>
                <ul class="breadcrumbs-area">
                    <li title="Go to Home">
                        <a class="active" href="{{ route('home.all') }}">Home</a>
                    </li>
                    <li><a href="javascript:void(0)">{{ $page->page_category ? ucwords($page->page_category) : '' }}</a>  </li>
                    <li>Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Page Start -->
    <div class="rs-services-single pt-50 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 md-mb-50">
                    <div class="services-img mb-35">
                        <img src="{{ asset($page->photo) }}" alt="" style="width:100% !important;">
                    </div>
                    {!! $page->description_part1 !!}
                    {!! $page->description_part2 !!}
                </div>
                <div class="col-lg-4 pl-36 md-pl-15">
                    <ul class="services-list mb-50">
                        @foreach($pages = \App\Models\Page::where('status','active')->where('page_category','about')->get() as $item)
                            <li><a class="" href="{{ route('single.projects',[$item->id,$item->slug]) }}">{{ $item->page_name }}</a></li>
                        @endforeach
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
    <!-- Page End -->
@endsection
