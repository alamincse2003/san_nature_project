@extends('backend.layouts.master')
@section('title','Edit Product')
@section('productList','active')
@section('vendorCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/pickers/daterange/daterangepicker.css') }}">
@endsection
@section('pageCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/datetime/jquery.datetimepicker.css') }}"/>
@endsection
@section('mainContent')
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h5 class="content-header-title float-left pr-1 mb-0"><a href="{{ route('product.index') }}">Product</a></h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('product.index') }}"><i class="bx bx-event-plus"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Edit Product</li>
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
                                <form class="form-horizontal"  action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Blog Title </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="title" class="form-control" value="{{ old('title',isset($product->title)?$product->title:null) }}" required  placeholder="Blog Title">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-user"></i>
                                                    </div>
                                                    @error('title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Slug </label>--}}
{{--                                                <div class="controls position-relative has-icon-left">--}}
{{--                                                    <input type="text" name="slug" class="form-control" value="{{ old('slug',isset($product->slug)?$product->slug:null) }}" required  placeholder="product-slug">--}}
{{--                                                    <div class="form-control-position">--}}
{{--                                                        <i class="bx bx-code"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <p>Note: Must be in English with (-) between 2 words</p>--}}
{{--                                                    @error('slug')--}}
{{--                                                    <div class="text-danger">{{ $message }}</div>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Blog Category *</label>
                                                <select class="select3-theme form-control" name="category_id" required>
                                                    <option value="">-- Select Category--</option>
                                                    @foreach($categories as $cat1)
                                                        <option value="{{ $cat1->id }}"  @if(old('category_id',isset($cat1->id )?$cat1->id :null) == $product->category_id) selected @endif>{{ ucwords($cat1->category_name) }}</option>
                                                        @foreach($cat1->children as $child)
                                                            <option value="{{ $child->id }}"  @if(old('category_id',isset($child->id )?$child->id :null) == $product->category_id) selected @endif>&nbsp;&nbsp; - {{ ucwords($child->category_name) }}</option>
                                                            @foreach($child->children as $child2)
                                                                <option value="{{ $child2->id }}"  @if(old('category_id',isset($child2->id )?$child2->id :null) == $product->category_id) selected @endif>&nbsp;&nbsp;&nbsp;&nbsp; -- {{ ucwords($child2->category_name) }}</option>
                                                            @endforeach
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Details</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <textarea name="description_part1"  class="form-control char-textarea" id="description_part1" rows="4" placeholder="Description Part One">{{ old('description_part1',isset($product->description_part1)?$product->description_part1:null) }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="bx bx-info-circle"></i>
                                                    </div>

                                                    @error('description_part1')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

{{--                                            <div class="form-group">--}}
{{--                                                <label>Description Part 2</label>--}}
{{--                                                <div class="controls position-relative has-icon-left">--}}
{{--                                                    <textarea name="description_part2" class="form-control char-textarea" id="description_part2" rows="4" placeholder="Description Part Two">{{ old('description_part2',isset($product->description_part2)?$product->description_part2:null) }}</textarea>--}}
{{--                                                    <div class="form-control-position">--}}
{{--                                                        <i class="bx bx-info-circle"></i>--}}
{{--                                                    </div>--}}

{{--                                                    @error('description_part2')--}}
{{--                                                    <div class="text-danger">{{ $message }}</div>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Blog Photo</label>
                                                <div class="controls custom-file">
                                                    <input name="photo" type="file" class="custom-file-input" id="photo">
                                                    <label class="custom-file-label" for="photo">Choose file</label>
                                                    @if($product->photo != null)
                                                        <br><br>
                                                        <img src="{{ asset($product->photo) }}" class="user-profile-image rounded" alt="slider image" style="height: 150px !important; width: 250px !important;" >
                                                        <br><br>
                                                    @else
                                                        <div class="badge badge-pill badge-light-danger mr-1"> No Blog Photo Found.</div>
                                                    @endif
                                                    @error('photo')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
{{--                                            <div class="form-group">--}}
{{--                                                <label>Blog Featured Photo</label>--}}
{{--                                                <div class="controls custom-file">--}}
{{--                                                    <input name="featured_photo" type="file" class="custom-file-input" id="featured_photo">--}}
{{--                                                    <label class="custom-file-label" for="featured_photo">Choose file</label>--}}
{{--                                                    @if($product->featured_photo != null)--}}
{{--                                                        <br><br>--}}
{{--                                                        <img src="{{ asset($product->featured_photo) }}" class="user-profile-image rounded" alt="slider image" style="height: 150px !important; width: 250px !important;" >--}}
{{--                                                        <br><br>--}}
{{--                                                    @else--}}
{{--                                                        <div class="badge badge-pill badge-light-danger mr-1"> No Blog Photo Found.</div>--}}
{{--                                                    @endif--}}
{{--                                                    @error('featured_photo')--}}
{{--                                                    <div class="text-danger">{{ $message }}</div>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Published *</label>
                                                <select class="select3-theme form-control"  name="status" required>
                                                    <option value="active"@if(old('status',isset($product->status)?$product->status:null) == 'active') selected @endif>Published</option>
                                                    <option value="inactive" @if(old('status',isset($product->status)?$product->status:null) == 'inactive') selected @endif>Unpublished</option>
                                                </select>
                                                @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <button type="submit" class="btn btn-primary float-right" >Update Product</button>
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

    <script src="{{ asset('backend/datetime/jquery.js') }}"></script>
    <script src="{{ asset('backend/datetime/build/jquery.datetimepicker.full.js') }}"></script>
    <script !src="">
        var checkPastTime = function(inputDateTime) {
            if (typeof(inputDateTime) != "undefined" && inputDateTime !== null) {
                var current = new Date();

                //check past year and month
                if (inputDateTime.getFullYear() < current.getFullYear()) {
                    $('#datetimepicker').datetimepicker('reset');
                    alert("Sorry! Past date time not allow.");
                } else if ((inputDateTime.getFullYear() == current.getFullYear()) && (inputDateTime.getMonth() < current.getMonth())) {
                    $('#datetimepicker').datetimepicker('reset');
                    alert("Sorry! Past date time not allow.");
                }

                // 'this' is jquery object datetimepicker
                // check input date equal to todate date
                if (inputDateTime.getDate() == current.getDate()) {
                    if (inputDateTime.getHours() < current.getHours()) {
                        $('#datetimepicker').datetimepicker('reset');
                    }
                    this.setOptions({
                        minTime: current.getHours() + ':90' //here pass current time hour
                    });
                } else {
                    this.setOptions({
                        minTime: false
                    });
                }
            }
        };
        var currentYear = new Date();
        $('#datetimepicker').datetimepicker({
            format:'Y-m-d H:i',
            minDate : 0,
            yearStart : currentYear.getFullYear(), // Start value for current Year selector
            onChangeDateTime:checkPastTime,
            onShow:checkPastTime
        });
    </script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'description_part1' );
    </script>
    <script>
        CKEDITOR.replace( 'description_part2' );
    </script>

@endsection

