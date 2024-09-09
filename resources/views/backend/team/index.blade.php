@extends('backend.layouts.master')
@section('title', 'Team')
@section('team', 'active')
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

                            <li class="breadcrumb-item active">Team Section
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
                                action="@if ($team) {{ route('team.index', $team->id) }} @else {{ route('team.index') }} @endif"
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
                                                        value="@if ($team) {{ old('title', $team->title) }} @endif">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset>
                                                <h5>Designation<span class="star">*</span></h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bx bx-file"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        aria-describedby="basic-Createon1" name="designation"
                                                        value="@if ($team) {{ old('designation', $team->designation) }} @endif">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset>
                                                <h5>Job Experience <span class="star">*</span></h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bx bx-file"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        aria-describedby="basic-Createon1" name="job_experience"
                                                        value="@if ($team) {{ old('job_experience', $team->job_experience) }} @endif">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset>
                                                <h5>Order <span class="star">*</span></h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bx bx-file"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        aria-describedby="basic-Createon1" name="order"
                                                        value="@if ($team) {{ old('order', $team->order) }} @endif">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset><br>
                                                <h5>Position<span class="star">*</span></h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bx bx-file"></i></span>
                                                    </div>
                                                    <select name="position" id="" required class="form-control">
                                                        <option
                                                            @if ($team) @if ($team->position == 'top')
                                                            selected @endif
                                                            @endif value="top">Top</option>
                                                        <option
                                                            @if ($team) @if ($team->position == 'bottom')
                                                        selected @endif
                                                            @endif value="bottom">Bottom</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset><br>
                                                <h5>Status<span class="star">*</span></h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bx bx-file"></i></span>
                                                    </div>
                                                    <select name="status" id="" class="form-control">
                                                        <option
                                                            @if ($team) @if ($team->status == 'active')
                                                            selected @endif
                                                            @endif value="active">Active</option>
                                                        <option
                                                            @if ($team) @if ($team->status == 'inactive')
                                                        selected @endif
                                                            @endif value="inactive">Inactive</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-md-12">
                                            <fieldset><br>
                                                <h5>Tabs<span class="star">*</span></h5>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-Createon1"><i
                                                                class="bx bx-file"></i></span>
                                                    </div>
                                                    <select name="tab_id" id="" class="form-control">
                                                        @foreach ($tabs as $tab)
                                                            <option @if ($tab->id == $team->tab_id) selected @endif
                                                                value="{{ $tab->id }}">{{ $tab->title }}</option>
                                                        @endforeach
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
                                                        aria-label="Upload"
                                                        value="@if ($team) {{ old('image', $team->image) }} @endif"
                                                        onchange="loadFile(event)">
                                                </div>
                                            </fieldset>

                                        </div>


                                        <div class="col-md-2 mt-2">
                                            <button type="submit" class="btn btn-primary mt-2 btn-lg">
                                                @if ($team)
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
                            <h5 class="card-title">Team List</h5>
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
                                                <th>Designation</th>
                                                <th>Job Experience</th>
                                                <th>Tab</th>
                                                <th>Order</th>
                                                <th>Status</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($team)
                                                @foreach ($teams as $team)
                                                    <tr>

                                                        <td><a
                                                                href="{{ route('team.index', $team->id) }}">{{ $team->title }}</a>
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset('images/teams/' . $team->image) }}"
                                                                id="output" alt="image" width="300px"
                                                                height="150px" class="mt-2 mx-1">
                                                        </td>
                                                        <td>{{ $team->designation }}</td>
                                                        <td>{{ $team->job_experience }}</td>
                                                        <td>
                                                            @if ($team->tab)
                                                                {{ $team->tab->title }}
                                                            @endif
                                                        </td>
                                                        <td>{{ $team->order }}</td>
                                                        <td>{{ $team->status }}</td>
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
                                                <th>Designation</th>
                                                <th>Job Experience</th>
                                                <th>Tab</th>
                                                <th>Order</th>
                                                <th>Status</th>

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
