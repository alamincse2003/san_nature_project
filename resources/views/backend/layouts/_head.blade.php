<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') - {{ config('app.name', 'Apol') }}</title>

<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">

@if(!empty($settings->favicon))
    <link rel="icon" href="{{ asset($settings->favicon) }}" type="image/x-icon">
@endif

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/vendors/css/vendors.min.css">
@yield('vendorCSS')

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/components.css">
<link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/themes/dark-layout.css">
<link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/themes/semi-dark-layout.css">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/core/menu/menu-types/vertical-menu.css">
@yield('pageCSS')

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>
