@extends('backend.layouts.master')
@section('title','All Pages')
@section('pageList','active')
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
                    <h5 class="content-header-title float-left pr-1 mb-0">Page</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('page.index') }}"><i class="bx bx-event-x"></i></a>
                            </li>
                            <li class="breadcrumb-item active">All Pages</li>
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
                    @if(!empty($pages))
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    {{--                                    @canany(['page.create'])--}}
                                    <a class="btn btn-primary float-right" href="{{ route('page.create') }}">New Page</a>
                                    {{--                                    @endcanany--}}
                                </h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Page Name</th>
                                                <th>Page Title</th>
                                                <th>Page Category</th>
                                                <th>Position</th>
                                                <th>Feature Photo</th>
                                                <th>Photo</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($pages as $key => $page)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>
                                                        <a href="{{ route('page.edit',$page->id) }}">
                                                        {{ ucwords($page->page_name) }}
                                                        </a>
                                                    </td>
                                                    <td>{{ ucwords($page->title) }}</td>
                                                    <td>{{ ucwords($page->page_category) }}</td>
                                                    <td>{{ ucwords($page->position_view) }}</td>
                                                    <td>
                                                        <img src="{{ asset($page->featured_photo) }}" width="120" alt="">
                                                    </td>
                                                    <td>
                                                        <img src="{{ asset($page->photo) }}" width="120" alt="">
                                                    </td>

                                                    <td>{{ ucwords($page->status) }}</td>
{{--                                                                                                        @canany(['page.update'])--}}
                                                    <td><a href="{{ route('page.edit',$page->id) }}">Edit</a>
{{--                                                                                                        @endcanany--}}
{{--                                                                                                        @canany(['page.delete'])--}}
{{--                                                                                             <a href="{{ route('page',$page->id) }}">Delete</a></td>--}}
{{--                                                                                                        @endcanany--}}


                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        No Slider Found.
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
