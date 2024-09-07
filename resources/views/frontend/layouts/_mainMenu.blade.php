@php
    $setting = \App\Models\Settings::where('status', 'active')->first();
@endphp
<!-- Menu Start -->
<div class="menu-area menu-sticky">
    <div class="container">
        <div class="row-table">
            <div class="col-cell header-logo">
                <div class="logo-area">
                    <a href="{{ route('home.all') }}">
                        @if (!empty($setting->logo))
                            <img class="normal-logo" src="{{ asset($setting->logo) }}" alt="logo">
                            <img class="sticky-logo" src="{{ asset($setting->logo) }}" alt="logo">
                        @else
                            <img class="normal-logo" src="{{ asset('frontend') }}/assets/images/logo-dark.png"
                                alt="logo">
                            <img class="sticky-logo" src="{{ asset('frontend') }}/assets/images/logo-dark.png"
                                alt="logo">
                        @endif

                    </a>
                </div>
            </div>
            <div class="col-cell">
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <nav class="rs-menu hidden-md">
                            <ul class="nav-menu">
                                <li class="menu-item-has-children">
                                    <a href="{{ route('home.all') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about.all') }}">About Us</a>
                                    <!-- <ul class="sub-menu">
                              <li class="last-item menu-item-has-children">
                                <a href="about.html">About Our Company</a>
                                <a href="work.html">working syesteam</a>
                                <a href="technology.html">Masa Technology</a>
                                <a href="message.html"
                                  >Managing Director Speech</a
                                >
                              </li>
                            </ul> -->
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#">Sister Concern</a>
                                    <ul class="sub-menu">
                                        <li class="last-item menu-item-has-children">
                                            @php
                                                $list_companies = App\Models\ListCompany::where('status', 'active')
                                                    ->get()
                                                    ->all();
                                            @endphp
                                            @foreach ($list_companies as $list_company)
                                                <a href="#">{{ $list_company->name }}</a>
                                                {{-- <a href="{{ url($list_company->url) }}">{{ $list_company->name }}</a> --}}
                                            @endforeach
                                            {{-- <a href="#">SAN Nature Farms</a>
                                <a href="#"
                                  >Agro Trading Corporation EPC (BD) Limited</a
                                >
                                <a href="#"
                                  >InterScience Technologies & SIMI Bangladesh
                                  Limited</a
                                > --}}
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Products</a>
                                </li>
                                <li>
                                    <a href="{{ route('services.all') }}">Services</a>
                                </li>
                                <li class="@yield('gallery')">
                                    <a href="{{ route('photo-gallery.all') }}">Gallery</a>
                                </li>
                                <li>
                                    <a href="{{ route('team') }}">Team</a>
                                </li>
                                <li>
                                    <a href="{{ route('blogs.all') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('coe') }}">COE</a>
                                </li>
                                <li>
                                    <a href="{{ route('user_contact') }}">Contact</a>
                                </li>

                                <li>
                                    <a href="{{ route('carrier') }}">Career</a>
                                </li>
                            </ul>
                            <!-- //.nav-menu -->
                        </nav>
                    </div>
                    <!-- //.main-menu -->
                </div>
            </div>

            <div class="col-cell">
                <div class="expand-btn-inner">
                    <ul>
                        <li class="btn-quote"><a class="quote-button" href="{{ route('user_contact') }}">Let's Talk</a>
                        </li>
                        <li class="humburger">
                            <a id="nav-expander" class="nav-expander bar" href="#">
                                <div class="bar">
                                    <span class="dot1"></span>
                                    <span class="dot2"></span>
                                    <span class="dot3"></span>
                                    <span class="dot4"></span>
                                    <span class="dot5"></span>
                                    <span class="dot6"></span>
                                    <span class="dot7"></span>
                                    <span class="dot8"></span>
                                    <span class="dot9"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end Menu Start -->
{{-- <div class="menu-area menu-sticky">
    <div class="container">
        <div class="row-table">
            <div class="col-cell header-logo">
                <div class="logo-area">
                    <a href="{{ route('home.all') }}">
                        @if (!empty($setting->logo))
                            <img class="normal-logo" src="{{asset( $setting->logo)}}" alt="logo">
                            <img class="sticky-logo" src="{{asset( $setting->logo)}}" alt="logo">
                        @else
                            <img class="normal-logo" src="{{asset('frontend')}}/assets/images/logo-dark.png" alt="logo">
                            <img class="sticky-logo" src="{{asset('frontend')}}/assets/images/logo-dark.png" alt="logo">
                        @endif

                    </a>
                </div>
            </div>
            <div class="col-cell">
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <nav class="rs-menu hidden-md">
                            <ul class="nav-menu">
                                <li>
                                    <a href="{{ route('home.all') }}">Home</a>
                                </li>
                                <li class="menu-item-has-children @yield('about')">
                                    <a href="#">About Us</a>
                                    <ul class="sub-menu">
                                        @foreach (\App\Models\Page::where('page_category', 'about')->where('status', 'active')->orderBy('position_view', 'ASC')->get() as $item)
                                            <li><a href="{{ route('pageDetails',['about',$item->slug]) }}">{{ $item->page_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="menu-item-has-children @yield('service')">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        @foreach (\App\Models\Page::where('page_category', 'service')->where('status', 'active')->orderBy('position_view', 'ASC')->get() as $item)
                                            <li><a href="{{ route('pageDetails',['service',$item->slug]) }}">{{ $item->page_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="menu-item-has-children @yield('project')">
                                    <a href="{{ route('projects.all') }}">Project</a>
                                    <ul class="sub-menu">
                                    <li><a href="{{ route('projectType','completed') }}">Completed Project</a></li>
                                    <li><a href="{{ route('projectType','running') }}">Running Project</a></li>
                                    <li><a href="{{ route('projectType','upcoming') }}">Upcoming Project</a></li>
                                    </ul>

                                </li>
                                <li class="@yield('blog')">
                                    <a href="{{ route('blogs.all') }}">Blog</a>
                                </li>
                                <li class="@yield('gallery')">
                                    <a href="{{ route('photo-gallery.all') }}">Gallery</a>
                                </li>
                                <li class="@yield('contact')">
                                    <a href="{{ route('user_contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div> --}}
<!-- Canvas Mobile Menu start -->
<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
    <div class="close-btn">
        <a id="nav-close2" class="nav-close">
            <div class="line">
                <span class="line1"></span>
                <span class="line2"></span>
            </div>
        </a>
    </div>
    <ul class="nav-menu">
        <li class="menu-item-has-children ">
            <a id="home2" href="{{ route('home.all') }}">Home</a>
        </li>
        <li>
            <a href="{{ route('about.all') }}">About Us</a>
            <!-- <ul class="sub-menu">
                              <li class="last-item menu-item-has-children">
                                <a href="about.html">About Our Company</a>
                                <a href="work.html">working syesteam</a>
                                <a href="technology.html">Masa Technology</a>
                                <a href="message.html"
                                  >Managing Director Speech</a
                                >
                              </li>
                            </ul> -->
        </li>
        {{-- @php
            $team_work = App\Models\Overview::where('type', 'team_work')->first();
            @endphp --}}

        <li class="menu-item-has-children">
            <a href="#">Sister Concern</a>

            <ul class="sub-menu sister_concern_menu">
                <li class="last-item menu-item-has-children">
                    @php
                        $list_companies = App\Models\ListCompany::where('status', 'active')->get()->all();
                    @endphp
                    @foreach ($list_companies as $list_company)
                        <a href="#">{{ $list_company->name }}</a>
                    @endforeach
                    {{-- <a href="#">SAN Nature Farms</a>
                                <a href="#"
                                  >Agro Trading Corporation EPC (BD) Limited</a
                                >
                                <a href="#"
                                  >InterScience Technologies & SIMI Bangladesh
                                  Limited</a
                                > --}}
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Products</a>
        </li>
        <li>
            <a href="{{ route('services.all') }}">Services</a>
        </li>
        <li>
            <a href="{{ route('photo-gallery.all') }}">Gallery</a>
        </li>
        <li>
            <a href="{{ route('team') }}">Team</a>
        </li>
        <li>
            <a href="{{ route('blogs.all') }}">Blog</a>
        </li>
        <li>
            <a href="{{ route('coe') }}">COE</a>
        </li>
        <li>
            <a href="{{ route('user_contact') }}">Contact</a>
        </li>

        <li>
            <a href="{{ route('carrier') }}">Career</a>
        </li>
    </ul>
    {{-- <ul class="nav-menu">
        <li>
            <a href="{{ route('home.all') }}">Home</a>
        </li>
        <li class="menu-item-has-children @yield('about')">
            <a href="#">About Us</a>
            <ul class="sub-menu">
                @foreach (\App\Models\Page::where('page_category', 'about')->where('status', 'active')->orderBy('position_view', 'ASC')->get() as $item)
                    <li><a href="{{ route('pageDetails',['about',$item->slug]) }}">{{ $item->page_name }}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="menu-item-has-children @yield('service')">
            <a href="#">Services</a>
            <ul class="sub-menu">
                @foreach (\App\Models\Page::where('page_category', 'service')->where('status', 'active')->orderBy('position_view', 'ASC')->get() as $item)
                    <li><a href="{{ route('pageDetails',['service',$item->slug]) }}">{{ $item->page_name }}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="menu-item-has-children @yield('project')">
            <a href="{{ route('projects.all') }}">Project</a>
            <ul class="sub-menu">
                <li><a href="{{ route('projectType','completed') }}">Completed Project</a></li>
                <li><a href="{{ route('projectType','running') }}">Running Project</a></li>
                <li><a href="{{ route('projectType','upcoming') }}">Upcoming Project</a></li>
            </ul>

        </li>
        <li class="@yield('blog')">
            <a href="{{ route('blogs.all') }}">Blog</a>
        </li>
        <li class="@yield('gallery')">
            <a href="{{ route('photo-gallery.all') }}">Gallery</a>
        </li>
        <li class="@yield('contact')">
            <a href="{{ route('user_contact') }}">Contact</a>
        </li>
    </ul> --}}
    <!-- //.nav-menu -->
    <!-- //.nav-menu -->

    <!-- //.nav-menu -->
    <div class="canvas-contact">
        <div class="address-area">
            <div class="address-list">
                <div class="info-icon">
                    <i class="fi fi-rr-map-marker-home"></i>
                </div>
                <div class="info-content">
                    <h4 class="title">Address</h4>
                    <em>{{ $setting->address }}</em>
                </div>
            </div>
            <div class="address-list">
                <div class="info-icon">
                    <i class="fi fi-rr-envelope-plus"></i>
                </div>
                <div class="info-content">
                    <h4 class="title">Email</h4>
                    <em><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></em>
                </div>
            </div>
            <div class="address-list">
                <div class="info-icon">
                    <i class="fi fi-rr-phone-call"></i>
                </div>
                <div class="info-content">
                    <h4 class="title">Phone</h4>
                    <em>{{ $setting->phone }}</em>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Canvas Menu end -->
