@extends('backend.layouts.master')
@section('title','Slider Edit')
@section('sliderList','active')
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
                            <li class="breadcrumb-item active">Update Slider</li>
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
                                <form class="form-horizontal"  action="{{ route('slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Slider Title </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="title" class="form-control" value="{{ old('title',isset($slider->title)?ucwords($slider->title):null) }}"  placeholder="Slider Title">
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
                                                    <input type="text" name="sub_title" class="form-control" value="{{ old('sub_title',isset($slider->sub_title)?ucwords($slider->sub_title):null) }}"  placeholder="Slider Sub Title">
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
                                                    <textarea name="description_part1"  class="form-control char-textarea" id="address-counter" rows="10" placeholder="Write details">{{ old('description_part1',isset($slider->description_part1)?ucwords($slider->description_part1):null) }}</textarea>
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
                                                    <textarea name="description_part2" class="form-control char-textarea" id="address-counter" rows="10" placeholder="Write Part Two">{{ old('description_part2',isset($slider->description_part2)?ucwords($slider->description_part2):null) }}</textarea>
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
                                                    <input type="text" name="button_name" class="form-control" value="{{ old('button_name',isset($slider->button_name)?ucwords($slider->button_name):null) }}"  placeholder="Button Name">
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
                                                    <input type="text" name="button_url" class="form-control" value="{{ old('button_url',isset($slider->button_url)?ucwords($slider->button_url):null) }}"  placeholder="Button Url">
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
                                                <label>Published *</label>
                                                <select class="select3-theme form-control"  name="status" required>
                                                    <option value="active"@if(old('status',isset($slider->status)?$slider->status:null) == 'active') selected @endif>Published</option>
                                                    <option value="inactive" @if(old('status',isset($slider->status)?$slider->status:null) == 'inactive') selected @endif>Unpublished</option>
                                                </select>
                                                @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Slider Position *</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="number" name="position" class="form-control" value="{{ old('position',isset($slider->position)?ucwords($slider->position):null) }}" required placeholder="Slider Position (Input Number Only)">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-code-alt"></i>
                                                    </div>
                                                    @error('position')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Slider Photo</label>
                                                <div class="controls custom-file">
                                                    <input name="slider_photo" type="file" class="custom-file-input" id="slider_photo">
                                                    <label class="custom-file-label" for="photo">Choose file</label>
                                                    @if($slider->slider_photo != null)
                                                        <img src="{{ asset($slider->slider_photo) }}" class="user-profile-image rounded" alt="slider image" style="height: 150px !important; width: 250px !important;" >
                                                    @else
                                                        <div class="badge badge-pill badge-light-danger mr-1"> No Slider Photo Found.</div>
                                                    @endif
                                                    @error('slider_photo')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <br><br><br>
                                            <button type="submit" class="btn btn-primary float-right" >Update Slider</button>
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
    <script>
        $(document).ready(function() {
            $('#rate').keyup(function() {
                var rate = $(this).val();

                // alert(rate);
                if(rate) {
                    var quantity = parseFloat($('#quantity').val());
                    var total_amount = rate * quantity;

                    $('#total_amount').attr('value',total_amount);
                }
            });
        });
    </script>
@endsection

