@extends('backend.layouts.master')
@section('title','Service Edit')
@section('serviceCreate','active')
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
                    <h5 class="content-header-title float-left pr-1 mb-0"><a href="{{ route('service.index') }}">Service</a></h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('service.index') }}"><i class="bx bx-event-plus"></i></a>
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
                                <form class="form-horizontal"  action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Service Name </label>
                        <div class="controls position-relative has-icon-left">
                            <input type="text" name="service_name" class="form-control" value="{{ old('service_name',isset($service->service_name)?ucwords($service->service_name):null) }}" required  placeholder="Service Name">
                            <div class="form-control-position">
                                <i class="bx bx-user"></i>
                            </div>
                            @error('service_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Service Title </label>
                        <div class="controls position-relative has-icon-left">
                            <input type="text" name="title" class="form-control" value="{{ old('title',isset($service->title)?ucwords($service->title):null) }}" required  placeholder="Service Name">
                            <div class="form-control-position">
                                <i class="bx bx-user"></i>
                            </div>
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Service Heading </label>
                        <div class="controls position-relative has-icon-left">
                            <input type="text" name="heading" class="form-control" value="{{ old('heading',isset($service->heading)?ucwords($service->heading):null) }}" required  placeholder="Service Name">
                            <div class="form-control-position">
                                <i class="bx bx-user"></i>
                            </div>
                            @error('heading')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Service Short Text </label>
                        <div class="controls position-relative has-icon-left">
                            <input type="text" name="short_text" class="form-control" value="{{ old('short_text',isset($service->short_text)?ucwords($service->short_text):null) }}" required  placeholder="Service Name">
                            <div class="form-control-position">
                                <i class="bx bx-user"></i>
                            </div>
                            @error('short_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Service Long Text </label>
                        <div class="controls position-relative has-icon-left">
                            <input type="text" name="long_text" class="form-control" value="{{ old('long_text',isset($service->long_text)?ucwords($service->long_text):null) }}" required  placeholder="Service Name">
                            <div class="form-control-position">
                                <i class="bx bx-user"></i>
                            </div>
                            @error('long_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Service Description </label>
                        <div class="controls position-relative has-icon-left">
                            <input type="text" name="description" class="form-control" value="{{ old('description',isset($service->description)?ucwords($service->description):null) }}" required  placeholder="Service Name">
                            <div class="form-control-position">
                                <i class="bx bx-user"></i>
                            </div>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Video URL</label>
                        <div class="controls position-relative has-icon-left">
                            <input type="text" name="video" class="form-control" value="{{ old('video',isset($service->video)?ucwords($service->video):null) }}" required  placeholder="Service Name">                            <div class="form-control-position">
                                <i class="bx bx-user"></i>
                            </div>
                            @error('video')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Service Photo</label>
                        <div class="controls custom-file">
                            <input name="photo" type="file" class="custom-file-input" id="photo">
                            <label class="custom-file-label" for="photo">Choose file</label>
                            @if($service->photo != null)
                                <img src="{{ asset($service->photo) }}" class="user-profile-image rounded" alt="service image" style="height: 150px !important; width: 250px !important;" >
                            @else
                                <div class="badge badge-pill badge-light-danger mr-1"> No Slider Photo Found.</div>
                            @endif
                            @error('photo')
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
                    <button type="submit" class="btn btn-primary float-right" >Update Service</button>
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

