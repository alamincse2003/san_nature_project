@extends('backend.layouts.master')
@section('title','All Media')
@section('mediaList','active')
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
                    <h5 class="content-header-title float-left pr-1 mb-0">Media</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('media.index') }}"><i class="bx bx-event-x"></i></a>
                            </li>
                            <li class="breadcrumb-item active">All Media</li>
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
                    @if(!empty($medias))
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
{{--                                    @canany(['media.create'])--}}
                                        <a class="btn btn-primary float-right" href="{{ route('media.create') }}">New Media</a>
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
                                                <th>Media Title</th>
                                                <th>Media Photo</th>
                                                <th>Link</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($medias as $key => $media)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ ucwords($media->name) }}</td>
                                                    <td>
                                                        <img src="{{ asset($media->photo) }}" width="120" alt="">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="{{ asset($media->photo) }}">
                                                    </td>
                                                    <td>
                                                        {{--                                  @canany(['media.delete'])--}}
                                                        <a class="" href="{{ route('mediaDelete',$media->id) }}" onclick="event.preventDefault();
                                                    document.getElementById('delete-form-{{ $media->id }}').submit();"><i data-feather="trash"></i></a>
                                                        <form action="{{ route('mediaDelete',$media->id) }}" id="delete-form-{{ $media->id }}" method="post" style="display: none;">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $media->id }}">
                                                            @method('DELETE')
                                                        </form>
                                                        {{--                                  @endcanany--}}
                                                    </td>
                                                </tr>

                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        No Media Found.
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
