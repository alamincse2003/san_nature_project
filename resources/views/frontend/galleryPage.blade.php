@extends('frontend.layouts.master')
@section('title', 'Photo Gallery')
@section('gallery', 'active')
@section('content')

    <!-- Gallery Start -->
    <div class="rs-gallery gallery-style1 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">

                @if (count($galleries) > 0)
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="gallery-item">
                                <div class="gallery-icon">
                                    {{-- <a class="image-popup" href="#"><img src="{{ asset($gallery->photo) }}" alt=""></a> --}}
                                    <a><img src="{{ asset($gallery->photo) }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No Photo Gallery Found</p>
                @endif

            </div>
        </div>
    </div>
    <!-- Gallery End -->

@endsection
