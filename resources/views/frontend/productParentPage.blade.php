@extends('frontend.layouts.master')
@section('title', request()->segment(2) ? \App\Models\Category::categoryFullName(request()->segment(2) ):'')
@section('products','active')
@section('mainContent')

    <!-- page-title -->
    <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ttm-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">Products</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{ route('home.all') }}">Home</a>
                                </span>
                            <span>Product Page</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">


        <div class="ttm-row sidebar ttm-sidebar-left clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    @includeIf('frontend._product_filter')

                    <div class="col-lg-8 content-area">
                        <a class="btn btn-primary" href="{{ url()->previous() }}">Back</a> <br> <br>
                        <span>
                            <strong>
                                {{ request()->segment(2) ? \App\Models\Category::categoryFullName(request()->segment(2) ):'' }}
                            </strong>
                        </span>
                        <div class="row">
                            @foreach($productParentCategories as $category)
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="featured-imagebox featured-imagebox-team style1">
                                    <div class="ttm-team-box-view-overlay">
                                        <div class="featured-thumbnail" style="border: 1px solid #c3002f;">
                                            <img class="img-fluid" src="https://as2.ftcdn.net/v2/jpg/00/89/55/15/1000_F_89551596_LdHAZRwz3i4EM4J0NHNHy2hEUYDfXc0j.jpg" alt="image">
{{--                                                <img class="img-fluid" src="{{ asset($category->photo) }}" alt="image">--}}
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5><a href="{{ route('products',[$category->id,$category->slug]) }}">{{ $category->category_name }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>


    </div><!--site-main end-->
@endsection
