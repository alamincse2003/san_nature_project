@extends('backend.layouts.master')
@section('title','Settings Update')
@section('settingsCreate','active')
@section('vendorCSS')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backend/app-assets/vendors/css/forms/select/select2.min.css') }}">
@endsection
@section('pageCSS')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backend/app-assets/css/plugins/forms/validation/form-validation.css') }}">
@endsection
@section('mainContent')
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h5 class="content-header-title float-left pr-1 mb-0">Settings</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('settings.index') }}"><i
                                        class="bx bx-cog"></i></a>
                            </li>
                            <li class="breadcrumb-item active">All Settings</li>
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
                    @if(!empty($settings))
                        <div class="card bg-transparent shadow-none border">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row pills-stacked">
                                        <div class="col-md-2 col-sm-12">
                                            <ul class="nav nav-pills flex-column text-center text-md-left">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="stacked-pill-1" data-toggle="pill"
                                                       href="#General" aria-expanded="true">
                                                        General
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="stacked-pill-5" data-toggle="pill"
                                                       href="#Others" aria-expanded="false">
                                                        Others
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="stacked-pill-6" data-toggle="pill"
                                                       href="#Footer" aria-expanded="false">
                                                        Footer
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-10 col-sm-12">
                                            <form class="form-horizontal"
                                                  action="{{ route('settings.update',$settings->id) }}" method="POST"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="General"
                                                         aria-labelledby="stacked-pill-1" aria-expanded="true">
                                                        <section class="input-validation basic-select2">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h4 class="card-title">General Settings</h4>
                                                                        </div>
                                                                        <div class="card-content">
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Application
                                                                                                Name</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <input type="text"
                                                                                                       name="app_name"
                                                                                                       class="form-control"
                                                                                                       value="{{ old('app_name',isset($settings->app_name)?$settings->app_name:null) }}"
                                                                                                       required
                                                                                                       placeholder="Company Name">
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-building-house"></i>
                                                                                                </div>
                                                                                                @error('app_name')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label>Logo</label>
                                                                                            <div
                                                                                                class="user-profile-images">
                                                                                                @if($settings->logo != null)
                                                                                                    <img
                                                                                                        src="{{ asset($settings->logo) }}"
                                                                                                        class="user-profile-image rounded"
                                                                                                        alt="logo image"
                                                                                                        style="height: 120px !important; width: 120px !important;">
                                                                                                @else
                                                                                                    <div
                                                                                                        class="badge badge-pill badge-light-danger mr-1">
                                                                                                        No Logo Found.
                                                                                                    </div>
                                                                                                @endif
                                                                                            </div>
                                                                                            <hr>
                                                                                            <div
                                                                                                class="controls custom-file">
                                                                                                <input name="logo"
                                                                                                       type="file"
                                                                                                       class="custom-file-input"
                                                                                                       id="logo">
                                                                                                <label
                                                                                                    class="custom-file-label"
                                                                                                    for="logo">Choose
                                                                                                    file</label>
                                                                                                <p class="badge badge-pill badge-light-danger mr-1">
                                                                                                    Logo Required Size:
                                                                                                    180px by 40px</p>
                                                                                                @error('logo')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label>Favicon</label>
                                                                                            <div class="media">
                                                                                                @if($settings->favicon != null)
                                                                                                    <img
                                                                                                        src="{{ asset($settings->favicon) }}"
                                                                                                        class="user-profile-image rounded"
                                                                                                        alt="user profile image"
                                                                                                        height="64"
                                                                                                        width="64">
                                                                                                @else
                                                                                                    <div
                                                                                                        class="badge badge-pill badge-light-danger mr-1">
                                                                                                        No Favicon
                                                                                                        Found.
                                                                                                    </div>
                                                                                                @endif
                                                                                            </div>
                                                                                            <hr>
                                                                                            <div
                                                                                                class="controls custom-file">
                                                                                                <input name="favicon"
                                                                                                       type="file"
                                                                                                       class="custom-file-input"
                                                                                                       id="favicon">
                                                                                                <label
                                                                                                    class="custom-file-label"
                                                                                                    for="favicon">Choose
                                                                                                    file</label>
                                                                                                <p class="badge badge-pill badge-light-danger mr-1">
                                                                                                    Favicon Required
                                                                                                    Size: 64px * 64px,
                                                                                                    32px * 32px</p>
                                                                                                @error('favicon')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="col-md-6">


                                                                                        <div class="form-group">
                                                                                            <label>Phone</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <input type="text"
                                                                                                       name="phone"
                                                                                                       class="form-control"
                                                                                                       maxlength="11"
                                                                                                       value="{{ old('phone',isset($settings->phone)?$settings->phone:null) }}"
                                                                                                       required
                                                                                                       data-validation-containsnumber-regex="(\d)+"
                                                                                                       data-validation-containsnumber-message="Numeric characters only."
                                                                                                       placeholder="Enter Numbers only">
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-mobile"></i>
                                                                                                </div>
                                                                                                @error('phone')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Email</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <input type="text"
                                                                                                       name="email"
                                                                                                       class="form-control"
                                                                                                       maxlength="100"
                                                                                                       value="{{ old('email',isset($settings->email)?$settings->email:null) }}"
                                                                                                       required
                                                                                                       data-validation-containsnumber-message="Email address only."
                                                                                                       placeholder="Enter Email Address">
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-mobile"></i>
                                                                                                </div>
                                                                                                @error('email')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Facebook Link</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <input type="text" name="social_facebook" class="form-control" maxlength="100"
                                                                                                       value="{{ old('social_facebook',isset($settings->social_facebook)?$settings->social_facebook:null) }}"
                                                                                                       required
                                                                                                       data-validation-containsnumber-message="Facebook Profile Link."
                                                                                                       placeholder="Enter Facebook Profile Link">
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-mobile"></i>
                                                                                                </div>
                                                                                                @error('social_facebook')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Link In</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <input type="text" name="social_linkedIn" class="form-control" maxlength="100"
                                                                                                       value="{{ old('social_linkedIn',isset($settings->social_linkedIn)?$settings->social_linkedIn:null) }}"
                                                                                                       required
                                                                                                       data-validation-containsnumber-message="LinkIn Profile Link."
                                                                                                       placeholder="Enter LinkIn Profile Link">
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-mobile"></i>
                                                                                                </div>
                                                                                                @error('social_linkedIn')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Twitter Link</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <input type="text" name="social_twitter" class="form-control" maxlength="100"
                                                                                                       value="{{ old('social_twitter',isset($settings->social_twitter)?$settings->social_twitter:null) }}"
                                                                                                       required
                                                                                                       data-validation-containsnumber-message="Twitter Profile Link."
                                                                                                       placeholder="Enter Twitter Profile Link">
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-mobile"></i>
                                                                                                </div>
                                                                                                @error('social_twitter')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Instagram</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <input type="text" name="social_instagram" class="form-control" maxlength="100"
                                                                                                       value="{{ old('social_instagram',isset($settings->social_instagram)?$settings->social_instagram:null) }}"
                                                                                                       required
                                                                                                       data-validation-containsnumber-message="Instagram Profile Link."
                                                                                                       placeholder="Enter Instagram Profile Link">
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-mobile"></i>
                                                                                                </div>
                                                                                                @error('social_instagram')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label>Address</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <textarea name="address"
                                                                                                          data-length=250
                                                                                                          class="form-control char-textarea"
                                                                                                          id="address-counter"
                                                                                                          rows="4"
                                                                                                          placeholder="Address">{{ old('address',isset($settings->address)?ucfirst($settings->address):null) }}</textarea>
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-home"></i>
                                                                                                </div>
                                                                                                <small
                                                                                                    class="counter-value float-right"><span
                                                                                                        class="char-count">0</span>
                                                                                                    / 100 </small>
                                                                                                @error('address')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Others" role="tabpanel"
                                                         aria-labelledby="stacked-pill-5" aria-expanded="false">
                                                        <section class="input-validation">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h4 class="card-title">Others Settings</h4>
                                                                        </div>
                                                                        <div class="card-content">
                                                                            <div class="card-body">

                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group">
                                                                                            <label>Completed Projects</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <input type="number" name="c_project" class="form-control" maxlength="100"
                                                                                                       value="{{ old('c_project',isset($settings->c_project)?$settings->c_project:null) }}"
                                                                                                       required
                                                                                                       data-validation-containsnumber-message="Completed Projects."
                                                                                                       placeholder="Enter Completed Projects">
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-mobile"></i>
                                                                                                </div>
                                                                                                @error('c_project')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group">
                                                                                            <label>Clients</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <input type="number" name="client" class="form-control" maxlength="100"
                                                                                                       value="{{ old('client',isset($settings->client)?$settings->client:null) }}"
                                                                                                       required
                                                                                                       data-validation-containsnumber-message="Clients."
                                                                                                       placeholder="Enter Clients">
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-mobile"></i>
                                                                                                </div>
                                                                                                @error('client')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group">
                                                                                            <label>Qualified Engineers</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <input type="number" name="engineer" class="form-control" maxlength="100"
                                                                                                       value="{{ old('engineer',isset($settings->engineer)?$settings->engineer:null) }}"
                                                                                                       required
                                                                                                       data-validation-containsnumber-message="Qualified Engineers."
                                                                                                       placeholder="Enter Qualified Engineers">
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-mobile"></i>
                                                                                                </div>
                                                                                                @error('engineer')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group">
                                                                                            <label>Experience</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <input type="number" name="experience" class="form-control" maxlength="100"
                                                                                                       value="{{ old('experience',isset($settings->experience)?$settings->experience:null) }}"
                                                                                                       required
                                                                                                       data-validation-containsnumber-message="Experience."
                                                                                                       placeholder="Enter Experience">
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-mobile"></i>
                                                                                                </div>
                                                                                                @error('experience')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                        <label>Task Banner</label>
                                                                                        <div class="media">
                                                                                            @if($settings->t_banner != null)
                                                                                                <img
                                                                                                    src="{{ asset($settings->t_banner) }}"
                                                                                                    class="user-profile-image rounded"
                                                                                                    alt="user profile image"
                                                                                                    height="64"
                                                                                                    width="64">
                                                                                            @else
                                                                                                <div
                                                                                                    class="badge badge-pill badge-light-danger mr-1">
                                                                                                    No Favicon
                                                                                                    Found.
                                                                                                </div>
                                                                                            @endif
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div
                                                                                            class="controls custom-file">
                                                                                            <input name="t_banner"
                                                                                                   type="file"
                                                                                                   class="custom-file-input"
                                                                                                   id="t_banner">
                                                                                            <label
                                                                                                class="custom-file-label"
                                                                                                for="t_banner">Choose
                                                                                                file</label>
                                                                                            <p class="badge badge-pill badge-light-danger mr-1">
                                                                                                Favicon Required
                                                                                                Size: 64px * 64px,
                                                                                                32px * 32px</p>
                                                                                            @error('t_banner')
                                                                                            <div
                                                                                                class="text-danger">{{ $message }}</div>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label>Google Map
                                                                                                Code</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <textarea
                                                                                                    name="google_map_code"
                                                                                                    data-length=300
                                                                                                    class="form-control char-textarea"
                                                                                                    id="google_map_code-counter"
                                                                                                    rows="7"
                                                                                                    placeholder="Google Map full embed code">{{ old('google_map_code',isset($settings->google_map_code)?ucfirst($settings->google_map_code):null) }}</textarea>
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-map-pin"></i>
                                                                                                </div>
                                                                                                <small
                                                                                                    class="counter-value float-right"><span
                                                                                                        class="char-count">0</span>
                                                                                                    / 300 </small>
                                                                                                @error('google_map_code')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>

                                                    <div class="tab-pane" id="Footer" role="tabpanel"
                                                         aria-labelledby="stacked-pill-6" aria-expanded="false">
                                                        <section class="input-validation">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h4 class="card-title">Footer Settings</h4>
                                                                        </div>
                                                                        <div class="card-content">
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label>Footer
                                                                                                Content</label>
                                                                                            <div
                                                                                                class="controls position-relative has-icon-left">
                                                                                                <textarea name="footer"
                                                                                                          data-length=100
                                                                                                          class="form-control char-textarea"
                                                                                                          id="fc-counter"
                                                                                                          rows="4"
                                                                                                          placeholder="Enter footer text">{{ old('footer',isset($settings->footer)?ucfirst($settings->footer):null) }}</textarea>
                                                                                                <div
                                                                                                    class="form-control-position">
                                                                                                    <i class="bx bx-copyright"></i>
                                                                                                </div>
                                                                                                <small
                                                                                                    class="counter-value float-right"><span
                                                                                                        class="char-count">0</span>
                                                                                                    / 100 </small>
                                                                                                @error('footer')
                                                                                                <div
                                                                                                    class="text-danger">{{ $message }}</div>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>

                                                </div>

                                                <br>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        No Settings Data Found in Settings Table, Please check your Database.
                    @endif

                </div>
            </div>
        </section>

    </div>
@endsection
@section('pageVendorJS')
    <script src="{{ asset('backend/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
@endsection

@section('pageJS')
    <script src="{{ asset('backend/app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>
    <script src="{{ asset('backend/app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
@endsection

