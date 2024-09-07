@extends('backend.layouts.master')
@section('title', 'All Project')
@section('projectList', 'active')
@section('vendorCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <style>
        .ck-editor__editable_inline {
            height: 100px;
        }
    </style>
@endsection
@section('pageCSS')

@endsection

@section('mainContent')
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h5 class="content-header-title float-left pr-1 mb-0">Others Section</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
                            </li>

                            <li class="breadcrumb-item active">Overview Section
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">

        {{-- Validation Error Message --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success: </strong>{{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <!-- Basic Inputs start -->
        <section id="basic-input">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <form
                                action="@if ($overview) {{ route('overview.index', $overview->id) }} @else {{ route('overview.index') }} @endif"
                                method="post" enctype="multipart/form-data"> @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <h5>Title <span class="star">*</span></h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bx bx-file"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        aria-describedby="basic-Createon1" name="title"
                                                        value="@if ($overview) {{ old('title', $overview->title) }} @endif">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset><br>
                                                <h5>View Page <span class="star">*</span></h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bx bx-file"></i></span>
                                                    </div>
                                                    <select name="type" id="" class="form-control">
                                                        <option @if ($overview && $overview->type == 'about_us') selected @endif
                                                            value="about_us">About Us</option>
                                                        <option @if ($overview && $overview->type == 'what_we_do') selected @endif
                                                            value="what_we_do">What We Do</option>
                                                        <option @if ($overview && $overview->type == 'team_work') selected @endif
                                                            value="team_work">Team Work</option>
                                                    </select>


                                                </div>
                                            </fieldset>
                                        </div>


                                        <div class="col-md-12">
                                            <fieldset><br>
                                                <h5>Image<span class="star">*</span></h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bx bx-file"></i></span>
                                                    </div>
                                                    <input type="file" class="form-control"
                                                        aria-describedby="basic-Createon1" name="image"
                                                        value="@if ($overview) {{ old('image', $overview->image) }} @endif"
                                                        onchange="loadFile(event)">
                                                </div>
                                            </fieldset>
                                            <img src="{{ asset('images/overviews/' . $overview->image) }}" id="output"
                                                alt="image" width="300px" height="150px" class="mt-2 mx-1">

                                        </div>
                                        <div class="col-md-12">
                                            <fieldset><br>
                                                <h5>About us PDF<span class="star">*</span></h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bx bx-file"></i></span>
                                                    </div>
                                                    <input type="file" class="form-control"
                                                        aria-describedby="basic-Createon1" name="pdf"
                                                        value="@if ($overview) {{ old('pdf', $overview->pdf) }} @endif"
                                                        onchange="loadFile(event)">
                                                </div>
                                            </fieldset>


                                        </div>

                                        <div class="col-md-12">
                                            <fieldset><br>
                                                <h5>Content <span class="star">*</span></h5>

                                                <textarea name="content" class="form-control" id="content" cols="30" rows="30"
                                                    aria-describedby="basic-Createon1">
                                                    @if ($overview)
{{ old('content', $overview->content) }}
@endif
                                                </textarea>
                                        </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-2 mt-2">
                                    <button type="submit" class="btn btn-primary mt-2 btn-lg">
                                        @if ($overview)
                                            Update
                                        @else
                                            Create
                                        @endif
                                    </button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Overview List</h5>
                        <div class="heading-elements">

                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>About Us PDF</th>
                                            <th>Content</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($overview)
                                            @foreach ($overviews as $overview)
                                                <tr>

                                                    <td><a
                                                            href="{{ route('overview.index', $overview->id) }}">{{ $overview->title }}</a>
                                                    </td>
                                                    <td><img src="{{ asset('images/overviews/' . $overview->image) }}"
                                                            alt="" height="150px"></td>

                                                    <td> <iframe src="{{ asset('images/overviews/' . $overview->pdf) }}"
                                                            height="150px" frameborder="0"></iframe></td>
                                                    <td>{!! \Illuminate\Support\Str::words($overview->content, 100, '...') !!}</td>

                                                </tr>
                                            @endforeach
                                        @else
                                            {{ 'No Data Found' }}
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>About Us PDF</th>
                                            <th>Content</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Inputs end -->

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
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

@section('pageJS')
    <script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
@endsection
