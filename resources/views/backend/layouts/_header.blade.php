<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">

                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                            <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                            <div class="search-input-close"><i class="bx bx-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#"  data-toggle="dropdown">
                            @if(auth()->check())
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name">{{ auth()->user()->name }}</span>
                                <span class="user-status text-muted"></span>
                            </div>
                                <span>
                                    @if(auth()->user()->profile_photo_path)
                                    <img class="round" src="{{ asset(auth()->user()->profile_photo_path) }}" alt="avatar" height="40" width="40">
                                    @endif
                                </span>
                            @endif
                        </a>

                        <div class="dropdown-menu dropdown-menu-right pb-0">
                            <a class="dropdown-item" href=""><i class="bx bx-user mr-50"></i> Edit Profile</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="bx bx-power-off mr-50"></i>{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
