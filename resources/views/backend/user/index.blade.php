@extends('backend.layouts.master')
@section('title','All User List')
@section('userList','active')
@section('vendorCSS')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection
@section('pageCSS')

@endsection

@section('mainContent')
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h5 class="content-header-title float-left pr-1 mb-0">Users</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('user.index') }}"><i class="bx bx-user-x"></i></a>
                            </li>
                            <li class="breadcrumb-item active">All Users List </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">

        <!-- Column selectors with Export Options and print table -->
        <section id="column-selectors">
            <div class="row">
                <div class="col-12">
                    @include('backend.layouts._alert')
            @if(!empty($users))
                <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                @canany(['user.create'])
                                    <a class="btn btn-primary float-right" href="{{ route('user.create') }}">New User</a>
                                @endcanany
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table table-striped dataex-html5-selectors">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Role</th>
                                            <th>Photo</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $key => $user)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td><a href="{{ route('user.edit',$user->id) }}">{{ ucwords($user->name) }}</a></td>
                                            <td>{{ strtolower($user->email) }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                @foreach($user->roles as $role)
                                                    @canany(['role.show'])
                                                        <div class="badge badge-primary mr-1 mb-1">{{ ucwords($role->name) }}</div>
                                                    @endcanany
                                                @endforeach
                                            </td>
                                            <td>
                                                @if(!empty($user->profile_photo_path))
                                                    <img src="{{ asset($user->profile_photo_path) }}" class="user-profile-image rounded" alt="user profile image" height="50" width="50" />
                                                @else
                                                    <img src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-11.jpg') }}" class="user-profile-image rounded" alt="user profile image" height="50" width="50"/>
                                                @endif
                                            </td>
                                            <td>{{ ucwords($user->status) }}</td>
                                            @canany(['user.update'])
                                            <td><a href="{{ route('user.edit',$user->id) }}">Edit</a></td>
                                            @endcanany
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            @else
                No User Found.
            @endif
                </div>
            </div>
        </section>

    </div>
@endsection


@section('pageVendorJS')
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
@endsection

@section('pageJS')
    <script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
@endsection
