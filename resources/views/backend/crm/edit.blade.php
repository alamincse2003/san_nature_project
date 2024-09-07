@extends('backend.layouts.master')
@section('title','CRM Edit')
@section('crmList','active')
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
                    <h5 class="content-header-title float-left pr-1 mb-0"><a href="{{ route('crm.index') }}">CRM</a></h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('crm.index') }}"><i class="bx bx-event-plus"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Create New CRM</li>
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
                                <form class="form-horizontal"  action="{{ route('crm.update',$crm->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Client Name </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="title" class="form-control" value="{{ old('title',isset($crm->title)?ucwords($crm->title):null) }}" required  placeholder="Client Name">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-user"></i>
                                                    </div>
                                                    @error('title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="phone" class="form-control" value="{{ old('phone',isset($crm->phone)?ucwords($crm->phone):null) }}" required  placeholder="Phone No">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-phone"></i>
                                                    </div>
                                                    @error('phone')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="email" class="form-control" value="{{ old('email',isset($crm->email)?ucwords($crm->email):null) }}" required  placeholder="Email Address">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-envelope"></i>
                                                    </div>
                                                    @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <textarea name="details"  class="form-control char-textarea" id="address-counter" rows="10" placeholder="Write details">{{ old('details',isset($crm->details)?ucwords($crm->details):null) }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="bx bx-info-circle"></i>
                                                    </div>

                                                    @error('details')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">



                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Folow Up Date </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="date" class="form-control" id="datetimepicker" value="{{ old('date',isset($crm->date)?$crm->date:null) }}" required>
                                                    <div class="form-control-position">
                                                        <i class="bx bx-calendar-check"></i>
                                                    </div>
                                                    <p>Date: {{ date('d M Y h:m a',strtotime($crm->date)) }}</p>
                                                    @error('date')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Status *</label>
                                                <select class="select3-theme form-control"  name="status" required>
                                                    <option value="active"@if(old('status',isset($crm->status)?$crm->status:null) == 'active') selected @endif>Active</option>
                                                    <option value="inactive" @if(old('status',isset($crm->status)?$crm->status:null) == 'inactive') selected @endif>Inactive</option>
                                                </select>
                                                @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>CRM Photo</label>
                                                <div class="controls custom-file">
                                                    <input name="photo" type="file" class="custom-file-input" id="photo">
                                                    <label class="custom-file-label" for="photo">Choose file</label>
                                                    @error('photo')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <br>
                                            <button type="submit" class="btn btn-primary float-left" >Update CRM</button>
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
        CKEDITOR.replace( 'details' );
    </script>

@endsection

