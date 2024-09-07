<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<head>
    @includeIf('frontend.layouts._head')
</head>
<body>
<!--page start-->
<div class="offwrap"></div>
<!--Preloader start here-->
<!--<div id="pre-load">-->
<!--    <div id="loader" class="loader">-->
<!--        <div class="loader-container">-->
<!--            <div class="loader-icon"><img src="{{ asset($settings->favicon) }}" alt="{{ $settings->app_name }}"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--Preloader area end here-->
<!-- Main content Start -->
<div class="main-content">
<!--Full width header Start-->
<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Toolbar Area Start -->
        @includeIf('frontend.layouts._topbarArea')
        <!-- Toolbar Area End -->
        @includeIf('frontend.layouts._mainMenu')
        <!-- Menu Start -->
    </header>
    <!--Header End-->
</div>
<!--Full width header End-->
@yield('content')
</div>
<!-- Main content End -->
<!-- Footer Start -->
@includeIf('frontend.layouts._footer')
<!-- Footer End -->
<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->
<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->
<!-- page end -->
<!-- Javascript -->
@includeIf('frontend.layouts._footer_script')
<!-- Javascript end-->
</body>
</html>
