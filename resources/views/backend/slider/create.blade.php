@extends('backend.layouts.master')
@section('title','Create New Slider')
@section('sliderCreate','active')
@section('vendorCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
@endsection
@section('pageCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css') }}">
@endsection
@section('mainContent')
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h5 class="content-header-title float-left pr-1 mb-0"><a href="{{ route('slider.index') }}">Slider</a></h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('slider.index') }}"><i class="bx bx-event-plus"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Create New Slider</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">

        <section id="stacked-pill">
            <div class="row">
                <div class="col-sm-12">
                    @include('backend.layouts._alert')
                    <div class="card bg-transparent shadow-none border">
                        <div class="card-header">
                            <h4 class="card-title"></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form-horizontal"  action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Slider Subtitle </label>--}}
{{--                                                <div class="controls position-relative has-icon-left">--}}
{{--                                                    <input type="text" name="sub_title" class="form-control" value="{{ old('sub_title') }}" required  placeholder="Subtitle">--}}
{{--                                                    <div class="form-control-position">--}}
{{--                                                        <i class="bx bx-user"></i>--}}
{{--                                                    </div>--}}
{{--                                                    @error('sub_title')--}}
{{--                                                    <div class="text-danger">{{ $message }}</div>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Slider Title </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="title" class="form-control" value="{{ old('title') }}"  placeholder="Slider Title">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-user"></i>
                                                    </div>
                                                    @error('title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Slider Sub Title </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="sub_title" class="form-control" value="{{ old('sub_title') }}"  placeholder="Slider Sub Title">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-user"></i>
                                                    </div>
                                                    @error('sub_title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Description Part 1</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <textarea name="description_part1"  class="form-control char-textarea" id="address-counter" rows="10" placeholder="Write details">{{ old('details') }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="bx bx-info-circle"></i>
                                                    </div>
                                                    @error('description_part1')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Description Part 2</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <textarea name="description_part2" class="form-control char-textarea" id="address-counter" rows="10" placeholder="Write Part Two">{{ old('description_part2') }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="bx bx-info-circle"></i>
                                                    </div>
                                                    @error('description_part2')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Button Name</label>
                                                <div class="controls position-relative has-icon-left">
                                                  <input type="text" name="button_name" class="form-control" value="{{ old('button_name') }}"  placeholder="Button Name">
                                                 <div class="form-control-position">
                                                    <i class="bx bx-user"></i>
                                                 </div>
                                                @error('button_name')
                                                 <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Button URL</label>
                                            <div class="controls position-relative has-icon-left">
                                                <input type="text" name="button_url" class="form-control" value="{{ old('button_url') }}"  placeholder="Button Url">
                                                <div class="form-control-position">
                                                    <i class="bx bx-user"></i>
                                                </div>
                                                @error('button_url')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Slider Photo</label>
                                                <div class="controls custom-file">
                                                    <input name="slider_photo" type="file" class="custom-file-input" id="slider_photo" required>
                                                    <label class="custom-file-label" for="photo">Choose file</label>
                                                    @error('slider_photo')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Slider Position</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="number" name="position" class="form-control" value="{{ old('position') }}" required placeholder="Slider Position (Input Number Only)">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-code-alt"></i>
                                                    </div>
                                                    @error('position')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Published *</label>
                                                <select class="select3-theme form-control"  name="status" required>
                                                    <option value="active" @if(old('status') == 'active') selected @endif>Published</option>
                                                    <option value="inactive" @if(old('status') == 'inactive') selected @endif>Unpublished</option>
                                                </select>
                                                @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary float-right" >Create Slider</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
@section('pageVendorJS')
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
@endsection

@section('pageJS')
    <script src="{{ asset('app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'description_part1' );
    </script>
    <script>
        CKEDITOR.replace( 'description_part2' );
    </script>
@endsection

