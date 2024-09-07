@extends('backend.layouts.master')
@section('title','RoleUpdate')
@section('roleList','active')
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
                    <h5 class="content-header-title float-left pr-1 mb-0"><a href="{{ route('role.index') }}">Users</a></h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('role.index') }}"><i class="bx bx-user-plus"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Edit Role</li>
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
                                <form class="form-horizontal"  action="{{ route('role.update',$role->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Role Name</label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input type="text" name="name" class="form-control" value="{{ old('name',isset($role->name)?$role->name:null) }}" required  placeholder="Role Name">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-user"></i>
                                                    </div>
                                                    @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            @if(!empty($permissions))
                                                Permission <br>
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" name=""  value="0" id="permissionsAll">
                                                        All
                                                    </label>
                                                </div>
                                                <br>
                                                <hr>

                                                @php  $i = 1; @endphp
                                                @foreach($permission_groups as $groups)
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="">
                                                                <label>
                                                                    <input type="checkbox" name="" id="{{ $i }}-Management" onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox',this)" class="control-primary" value="{{ $groups->name }}" >
                                                                    {{ ucwords(str_replace('.',' ',$groups->name)) }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 role-{{ $i }}-management-checkbox">
                                                            @php
                                                                $permissions = \App\Models\User::getPermissionGroupName($groups->name);
                                                                $j = 1;
                                                            @endphp

                                                            @foreach($permissions as $permission)
                                                                <div class="">
                                                                    <label>
                                                                        <input type="checkbox" name="permissions[]" {{ $role->hasPermissionTo($permission->name)?'checked':'' }} class="control-primary" value="{{ $permission->name }}">
                                                                        {{ ucwords(str_replace('.',' ',$permission->name)) }}
                                                                        @php  $j++; @endphp
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                    </div>
                                                    @php  $i++; @endphp
                                                    <hr>
                                                @endforeach
                                            @else
                                                No Permission Found!!
                                            @endif

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Role </button>
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
    @include('backend.layouts.roles_pages_js')
@endsection

