@extends('backend.layouts.master')
@section('title','Create New Category')
@section('categoryCreate','active')
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
                    <h5 class="content-header-title float-left pr-1 mb-0"><a href="">Category</a></h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href=""><i class="bx bx-user-plus"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Create New  Category</li>
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
                                <form class="form-horizontal"  action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Category Name </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="category_name" class="form-control" value="{{ old('category_name') }}" required  placeholder="Category Name">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-user"></i>
                                                    </div>
                                                    @error('category_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Parent Category </label>
                                                <select class="select3-theme form-control"  name="parent_category_name" >
                                                    <option value="">--Select Parent Category--</option>

                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ ucwords($category->category_name) }}</option>
                                                        @foreach($category->children as $child)
                                                            <option value="{{ $child->id }}">&nbsp;&nbsp; - {{ ucwords($child->category_name) }}</option>
                                                            @foreach($child->children as $child2)
                                                                <option value="{{ $child2->id }}">&nbsp;&nbsp;&nbsp;&nbsp; -- {{ ucwords($child2->category_name) }}</option>
                                                                @foreach($child2->children as $child3)
                                                                    <option value="{{ $child3->id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -- {{ ucwords($child3->category_name) }}</option>
                                                                @endforeach
                                                            @endforeach
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                                @error('parent_category_name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Status *</label>
                                                <select class="select3-theme form-control"  name="status" required>
                                                    <option value="active" @if(old('status') == 'active') selected @endif>Active</option>
                                                    <option value="inactive" @if(old('status') == 'inactive') selected @endif>Inactive</option>
                                                </select>
                                                @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary float-left" >Create Category</button>
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

