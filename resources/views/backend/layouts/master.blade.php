<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<head>
    @includeIf('backend.layouts._head')
</head>
<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
@includeIf('backend.layouts._header')
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('backend.layouts._main_menu')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        @yield('mainContent')
    </div>
</div>
<!-- END: Content-->

<!-- demo chat-->
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('backend.layouts._footer')

@include('backend.layouts._footer_script')

</body>
</html>
