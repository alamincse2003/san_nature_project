@extends('backend.layouts.master')
@section('title','Create New User')
@section('userCreate','active')
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
                    <h5 class="content-header-title float-left pr-1 mb-0"><a href="{{ route('user.index') }}">Users</a></h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('user.index') }}"><i class="bx bx-user-plus"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Create New User</li>
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
                                    <form class="form-horizontal"  action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <div class="controls position-relative has-icon-left">
                                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required  placeholder="Full Name">
                                                        <div class="form-control-position">
                                                            <i class="bx bx-user"></i>
                                                        </div>
                                                        @error('name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <div class="controls position-relative has-icon-left">
                                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" data-validation-required-message="Must be a valid email" placeholder="Valid Email Address">
                                                        <div class="form-control-position">
                                                            <i class="bx bx-envelope"></i>
                                                        </div>
                                                        @error('email')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <div class="controls position-relative has-icon-left">
                                                        <input type="text" name="phone" class="form-control" minlength="11" maxlength="11" value="{{ old('phone') }}" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Numeric characters only." placeholder="Enter Numbers only">
                                                        <div class="form-control-position">
                                                            <i class="bx bx-mobile"></i>
                                                        </div>
                                                        @error('phone')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Select Role</label>
                                                    <select name="roles[]" data-placeholder="Select Role" class="select2 w-full" multiple>
                                                        @foreach($roles as $role)
                                                            <option value="{{ $role->name }}">{{ ucwords($role->name) }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('role')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Profile Photo</label>
                                                    <div class="controls custom-file">
                                                        <input name="photo" type="file" class="custom-file-input" id="photo">
                                                        <label class="custom-file-label" for="photo">Choose file</label>
                                                        @error('photo')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <div class="controls position-relative has-icon-left">
                                                        <input type="password" name="password" id="showPassword" class="form-control" minlength="6" maxlength="12" data-validation-required-message="This field is required" placeholder="******" required autocomplete="new-password">
                                                        <div class="form-control-position">
                                                            <i class="bx bx-dots-horizontal"></i>
                                                        </div>
                                                        @error('password')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <label>Repeat password</label>
                                                        <div class="controls position-relative has-icon-left">
                                                            <input type="password" name="password_confirmation" id="showPasswordC" minlength="6" maxlength="12" data-validation-match-match="password" class="form-control" data-validation-required-message="Repeat password must match" placeholder="******" required autocomplete="new-password">
                                                            <div class="form-control-position">
                                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                                            </div>
                                                            @error('password_confirmation')
                                                            <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                            <br>
                                                            <input type="checkbox" onclick="showFunction()"> Show Password!
                                                        </div>

                                                    </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Create </button>
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
        function showFunction() {
            var x = document.getElementById("showPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            var y = document.getElementById("showPasswordC");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }


        }
    </script>
@endsection

