@extends('backend.layouts.master')
@section('title','Create New Testimonial')
@section('testimonialCreate','active')
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
                    <h5 class="content-header-title float-left pr-1 mb-0"><a href="{{ route('testimonial.index') }}">Testimonial</a></h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('testimonial.index') }}"><i class="bx bx-event-plus"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Create New Testimonial</li>
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
                                <form class="form-horizontal"  action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required  placeholder="Name">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-user"></i>
                                                    </div>
                                                    @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Designation </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="designation" class="form-control" value="{{ old('designation') }}"  placeholder="Designation">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-task"></i>
                                                    </div>
                                                    @error('designation')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <textarea name="description"  class="form-control char-textarea" id="description" rows="3" placeholder="Write Part One">{{ old('description') }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="bx bx-info-circle"></i>
                                                    </div>
                                                    @error('description')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Rating</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="number" name="rating" class="form-control" min="1" max="10" value="{{ old('rating') }}"  placeholder="1 to 10">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-no-entry"></i>
                                                    </div>
                                                    @error('rating')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Testimonial Photo</label>
                                                <div class="controls custom-file">
                                                    <input name="photo" type="file" class="custom-file-input" id="slider_photo" required>
                                                    <label class="custom-file-label" for="photo">Choose file</label>
                                                    @error('photo')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

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

                                            <button type="submit" class="btn btn-primary float-right" >Create Testimonial</button>
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

