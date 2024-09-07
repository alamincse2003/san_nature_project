@extends('backend.layouts.master')
@section('title','Create New Gallery')
@section('galleryCreate','active')
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
                    <h5 class="content-header-title float-left pr-1 mb-0"><a href="{{ route('gallery.index') }}">Gallery</a></h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}"><i class="bx bx-event-plus"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Update Gallery</li>
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
                                <form class="form-horizontal"  action="{{ route('gallery.update',$gallery->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf @method('put')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Gallery Name </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="title" class="form-control" value="{{ old('title',isset($gallery->title)?ucwords($gallery
->title):null) }}" required  placeholder="Gallery Name">
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
                                                <label>Photo</label>
                                                <div class="controls custom-file">
                                                    <input name="photo" type="file" class="custom-file-input">
                                                    <label class="custom-file-label" for="photo">Choose file</label>
                                                    @if($gallery->photo != null)
                                                        <br><br>
                                                        <img src="{{ asset($gallery->photo) }}" class="user-profile-image rounded" alt="slider image" style="height: 150px !important; width: 250px !important;" >
                                                        <br><br>
                                                    @else
                                                        <div class="badge badge-pill badge-light-danger mr-1"> No Photo Found.</div>
                                                    @endif
                                                    @error('photo')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status *</label>
                                                <select class="select3-theme form-control"  name="status" required>
                                                    <option value="active"@if(old('status',isset($gallery->status)?$gallery->status:null) == 'active') selected @endif>Active</option>
                                                    <option value="inactive" @if(old('status',isset($gallery->status)?$gallery->status:null) == 'inactive') selected @endif>Inactive</option>
                                                </select>
                                                @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary float-right" >Update Gallery</button>
                                            </div>
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

@endsection

