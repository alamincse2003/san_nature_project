@extends('frontend.layouts.master')
@section('title','Blog Page')
@section('blogs','active')
@section('content')

    <!-- Blog Section Start -->
   <div class="rs-inner-blog pt-120 pb-105 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 md-mb-50">
                    {{-- <div> --}}
                        @if(count($blogs) > 0)
                            @foreach($blogs as $blog)
                        <div class="col-lg-12 mb-50">
                            <div class="blog-item">
                                <div class="blog-img">
                                    {{-- {{ route('blogDetails',[$blog->id,$blog->slug]) }} --}}
                                    <a href="#"><img src="{{ asset($blog->photo) }}" width="1000px" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h3 class="blog-title" style="font-family: Solaimanlipi !important;">
                                        {{-- {{ route('blogDetails',[$blog->id,$blog->slug]) }} --}}
                                        <a href="#">{{ $blog->title }}</a></h3>
                                    <div class="blog-meta">
                                        <ul class="btm-cate">
                                            <li>
                                                <div class="author">
                                                    <i class="fi fi-rr-user"></i> {{ $blog->user->name }}
                                                </div>
                                            </li>
                                            <li>
                                                <div class="blog-date">
                                                    <i class="fi fi-rr-calendar"></i> {{ date('d M',strtotime($blog->created_at)) }}
                                                </div>
                                            </li> 
                                        </ul>
                                    </div>
                                    <div class="blog-desc">
                                        {!! substr($blog->description_part1,0,250) !!}
                                    </div>
                                    {{-- <div class="blog-button inner-btn">
                                        <a class="blog-btn" href="{{ route('blogDetails',[$blog->id,$blog->slug]) }}">Continue Reading</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @else
                            <p>No Blog Found</p>
                        @endif
                    {{-- </div> --}}
                </div>
                {{-- <div class="col-lg-4 col-md-12 ">
                    <div class="widget-area">
                        <div class="recent-posts mb-50">
                            <div class="widget-title">
                                <h3 class="title">Recent Posts</h3>
                            </div>
                            @if(count($recentPosts) > 0)
                                @foreach($recentPosts as $recent)
                                    <div class="recent-post-widget no-border">
                                        <div class="post-img">
                                            <a href="{{ route('blogDetails',[$blog->id,$blog->slug]) }}"><img src="{{ asset($recent->photo) }}" alt=""></a>
                                        </div>
                                        <div class="post-desc" style="font-family: Solaimanlipi !important;">
                                            <a href="{{ route('blogDetails',[$blog->id,$blog->slug]) }}">{{ $recent->title }}</a>
                                            <span class="date-post"> <i class="fi fi-rr-calendar"></i>{{ date('d M',strtotime($blog->created_at)) }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>Not Found</p>
                            @endif

                        </div>
                        <div class="categories mb-50">
                            <div class="widget-title mb-15">
                                <h3 class="title">Categories</h3>
                            </div>
                            <ul>
                                @if(count($categories = \App\Models\PostCategory::where('status','active')->get() ) > 0)
                                    @foreach($categories as $category)
                                        <li><a href="#">{{ $category->category_name }}</a></li>
                                    @endforeach
                                @else
                                    <p>Not Found</p>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Blog Section End -->

@endsection
