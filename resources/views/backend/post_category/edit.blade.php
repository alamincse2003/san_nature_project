@extends('backend.layouts.master')
@section('title','Update Post Category')
@section('postCategoryCreate','active')
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
                    <h5 class="content-header-title float-left pr-1 mb-0"><a href="{{ route('purchase.index') }}">Expense</a></h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('purchase.index') }}"><i class="bx bx-user-plus"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Product Expense Edit</li>
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
                                <form class="form-horizontal"  action="{{ route('purchase.update',$expense->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product Name</label>

                                                <select name="product_id" class="form-control" required>
                                                    @foreach($products as $product)
                                                        <option value="{{ $product->id }}"  @if(old('product_id', isset($product->id)?$product->id:null) == $expense->product_id) selected @endif>{{ ucfirst($product->name) }}</option>
                                                    @endforeach
                                                </select>
                                                @error('product_id')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="number" id="quantity" name="quantity" class="form-control" value="{{ old('quantity',isset($expense->quantity)?$expense->quantity:null) }}" data-validation-required-message="Must be a valid quantity" placeholder="Product Amount">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-envelope"></i>
                                                    </div>
                                                    @error('quantity')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Rate</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="number" id="rate" name="rate" class="form-control" value="{{ old('rate',isset($expense->rate)?$expense->rate:null) }}" data-validation-required-message="Must be a valid rate" placeholder="Product Amount">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-envelope"></i>
                                                    </div>
                                                    @error('rate')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Total</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="number" id="total_amount" name="total" class="form-control" value="{{ old('total',isset($expense->total)?$expense->total:null) }}" data-validation-required-message="Must be a valid total" placeholder="Product Amount">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-envelope"></i>
                                                    </div>
                                                    @error('total')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product Expense Note</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <textarea name="note" class="form-control">{{ old('note',isset($expense->note)?$expense->note:null) }}</textarea>
                                                    <div class="form-control-position">
                                                        <i class="bx bx-envelope"></i>
                                                    </div>
                                                    @error('note')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Amount </button>
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

