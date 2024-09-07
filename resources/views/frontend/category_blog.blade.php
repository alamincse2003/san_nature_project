@extends('frontend.layouts.master')
@section('title',isset($pageTitle) ? $pageTitle : 'Blog Details')
@section('home','active')
@section('mainContent')
    <!-- page-title -->
    <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ttm-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">Blog Single View</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="">Home</a>
                                </span>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">


        <div class="ttm-row sidebar ttm-sidebar-right clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 content-area">
                        <div class="row">


                            @if(count($blogs) > 0)
                                @foreach($blogs as $blog)
                                    <div class="col-lg-12">
                                        <!-- featured-imagebox-post -->
                                        <div class="featured-imagebox featured-imagebox-post style1">
                                            <div class="featured-thumbnail">
                                                <img class="img-fluid" src="{{ asset($blog->featured_photo) }}" style="width: 350px; height: 300px; !important;"  alt="">
                                            </div>
                                            <div class="featured-content">
                                                <!-- ttm-box-post-date -->
                                                <div class="ttm-box-post-date">
                                        <span class="ttm-entry-date">
                                            <time class="entry-date">{{ date('d M',strtotime($blog->created_at)) }}</span></time>
                                                    </span>
                                                </div><!-- ttm-box-post-date end -->
                                                <div class="post-meta">
                                                    <span class="ttm-meta-line byline">{{ $blog->user->name }}</span>
                                                    {{--                                    <span class="ttm-meta-line comments-link">0 Comments</span>--}}
                                                </div>
                                                <div class="featured-title">
                                                    <h3><a href="blog-single.html">{{ $blog->title }}</a></h3>
                                                </div>
                                                <div class="featured-desc">
                                                    {!! substr($blog->description_part1,20) !!}
                                                </div>
                                                <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline" href="{{ route('blogDetails',[$blog->id,$blog->slug]) }}" tabindex="-1">read more</a>
                                            </div>
                                        </div><!-- featured-imagebox-post end -->
                                    </div>
                                @endforeach
                            @else
                                <p>No Blog Found</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 widget-area sidebar-right">
                        <aside class="widget widget-search with-title">
                            <h3 class="widget-title">Search</h3>
                            <form role="search" method="get" class="search-form" action="#">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                                </label>
                                <button class="btn" type="submit"><i class="fa fa-search"></i> </button>
                            </form>
                        </aside>
                        <aside class="widget widget-Categories with-title">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                @foreach($categoryLists as $categoryList)
                                    <li><a href="{{ route('blogCategoryDetails',[$blog->id,$blog->slug]) }}">{{ $categoryList->category_name }}</a><span>1</span></li>
                                @endforeach
                            </ul>
                        </aside>
                        <aside class="widget widget-recent-post with-title">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul class="widget-post ttm-recent-post-list">
                                @if(count($popularPosts) > 0)
                                    @foreach($popularPosts as $popularPost )
                                        <li>
                                            <a href="{{ route('blogDetails',[$popularPost->id,$popularPost->slug]) }}"><img class="img-fluid" src="{{ asset($popularPost->featured_photo) }}" alt="post-img"></a>
                                            <div class="post-detail">
                                                <a href="{{ route('blogDetails',[$popularPost->id,$popularPost->slug]) }}">{{ $popularPost->title }}</a>
                                                <span class="post-date"><i class="fa fa-calendar"></i>{{ date('d M',strtotime($popularPost->created_at)) }}</span>
                                            </div>
                                        </li>
                                    @endforeach

                                @else
                                    <p>No Blog Found</p>
                                @endif
                            </ul>
                        </aside>

                        <aside class="widget widget-banner">
                            <div class="ttm-col-bgcolor-yes ttm-bgcolor-darkgrey col-bg-img-seven ttm-col-bgimage-yes ttm-bg">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="widget-banner-inner">
                                        <h3 class="ttm-textcolor-skincolor">Have Questions?</h3>
                                        <p>Our Client Care Managers Are On Call 24/7 To Answer Your Question.</p>
                                        <ul>
                                            <li><i class="flaticon flaticon-phone-call"></i>+1800 200 4567</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>


    </div><!--site-main end-->
@endsection

