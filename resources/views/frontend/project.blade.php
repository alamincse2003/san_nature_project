@extends('frontend.layouts.master')
@section('title','Projects')
@section('project','current-menu-item')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1" style="background: url({{asset($single_project->banner_photo)}});">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    {{--                {{ $single_project->short_title }}--}}
                    Our All Projects
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
    <!-- Project Section Start -->
    <div class="rs-project project-style1 gray-bg pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-45">
			    		<span class="sub-text">
			    			<img src="{{ asset('frontend') }}/assets/images/shape-1.png" alt="Images">
			    			Projects
			    		</span>
                <h2 class="title">
                    Latest projects
                </h2>
            </div>
            <div class="gridFilter gridfilter-style2 mb-47 text-center">
                <button class="active" data-filter="*">All</button>
                <button data-filter=".completed">Completed</button>
                <button data-filter=".running">Running</button>
                <button data-filter=".upcoming">Upcoming</button>
            </div>
            <div class="row grid">
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6 mb-30 grid-item {{ $project->project_type }}">
                        <div class="project-item">
                            <div class="project-img">
                                <a href="{{ route('single.projects',[$project->id,$project->slug]) }}">
                                    <img src="{{ asset($project->photo) }}" style="width: 457px; height: 455px; !important;" alt="images">
                                </a>
                            </div>
                            <div class="project-content">
                                <div class="project-inner">
                                    <h3 class="title"><a href="{{ route('single.projects',[$project->id,$project->slug]) }}">{{ ucfirst($project->title) }}</a></h3>
                                    <span class="category"><a href="{{ route('single.projects',[$project->id,$project->slug]) }}">{{ ucfirst($project->project_type) }}</a></span>
                                </div>
                                {{--                        <div class="p-icon"><a href="{{ route('single.projects',[$project->id,$project->slug]) }}"><i class="flaticon-next"></i></a></div>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Project Section End -->

@endsection
