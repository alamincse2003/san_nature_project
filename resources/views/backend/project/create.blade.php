@extends('backend.layouts.master')
@section('title','Create New Project')
@section('projectCreate','active')
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
                    <h5 class="content-header-title float-left pr-1 mb-0"><a href="{{ route('project.index') }}">Project</a></h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('project.index') }}"><i class="bx bx-event-plus"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Create New Project</li>
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
                                <form class="form-horizontal"  action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Title </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="title" class="form-control" value="{{ old('title') }}"  placeholder="Project Title" required>
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
                                                <label>Project Sub Title </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="short_title" class="form-control" value="{{ old('short_title') }}"  placeholder="Project Sub Title">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-user"></i>
                                                    </div>
                                                    @error('short_title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Details 1</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <textarea name="description1"  class="form-control char-textarea" id="address-counter" rows="10" placeholder="Write details">{{ old('details') }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="bx bx-info-circle"></i>
                                                    </div>

                                                    @error('description1')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Details 2</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <textarea name="description2"  class="form-control char-textarea" id="address-counter" rows="10" placeholder="Write details">{{ old('details') }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="bx bx-info-circle"></i>
                                                    </div>

                                                    @error('description2')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Banner Photo</label>
                                                <div class="controls custom-file">
                                                    <input name="banner_photo" type="file" class="custom-file-input" id="banner_photo">
                                                    <label class="custom-file-label" for="photo">Choose file</label>
                                                    @error('banner_photo')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Photo</label>
                                                <div class="controls custom-file">
                                                    <input name="photo" type="file" class="custom-file-input" id="photo">
                                                    <label class="custom-file-label" for="photo">Choose file</label>
                                                    @error('photo')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Service Icon</label>--}}
{{--                                                <div class="controls custom-file">--}}
{{--                                                    <input name="icon" type="file" class="custom-file-input" id="icon">--}}
{{--                                                    <label class="custom-file-label" for="icon">Choose file</label>--}}
{{--                                                    @error('icon')--}}
{{--                                                    <div class="text-danger">{{ $message }}</div>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Type *</label>
                                                <select class="select3-theme form-control" name="project_type" required>
                                                    <option value="">-- Select Type--</option>
                                                    <option>Completed</option>
                                                    <option>Running</option>
                                                    <option>Upcoming</option>
                                                </select>
                                                @error('category_id')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
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
                                            <button type="submit" class="btn btn-primary float-right" >Create Project</button>
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

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'description1' );
    </script>
    <script>
        CKEDITOR.replace( 'description2' );
    </script>

@endsection

