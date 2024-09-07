@extends('backend.layouts.master')
@section('title','All Gallery')
@section('galleryList','active')
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
                    <h5 class="content-header-title float-left pr-1 mb-0">Gallery</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}"><i class="bx bx-event-x"></i></a>
                            </li>
                            <li class="breadcrumb-item active">All Gallery</li>
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
                    @if(!empty($gallerys))
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    @canany(['gallery.create'])
                                        <a class="btn btn-primary float-right" href="{{ route('gallery.create') }}">New Gallery</a>
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
                                                <th>Gallery Name</th>
                                                <th>Gallery Photo</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($gallerys as $key => $gallery)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ ucwords($gallery->title) }}</td>
                                                    <td>
                                                        <img src="{{ asset($gallery->photo) }}" width="120" alt="">
                                                    </td>
                                                    <td>{{ ucwords($gallery->status) }}</td>
{{--                                                    @canany(['gallery.update'])--}}
                                                        <td><a href="{{ route('gallery.edit',$gallery->id) }}">Edit</a>
{{--                                                    @endcanany--}}
{{--                                                    @canany(['gallery.delete'])--}}
                                                        {{--                                         <a href="{{ route('adminGalleryDelete',$gallery->id) }}">Delete</a></td>--}}
{{--                                                    @endcanany--}}


                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        No Gallery Found.
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
