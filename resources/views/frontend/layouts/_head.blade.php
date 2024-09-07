<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="masagroupbd, mashasteel, MASA STEEL & BUILDERS LTD" />
<meta name="description" content="We Build Your Dream, A Complete Solution Of STEEL BUILDING" />
<meta name="author" content="https://www.masagroupbd.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') - {{ config('app.name', 'masagroupbd') }}</title>

@if(!empty($settings->favicon))
    <link rel="icon" href="{{ asset($settings->favicon) }}" type="image/x-icon">
@else
<link rel="shortcut icon" href="{{asset('frontend')}}/images/favicon.png" />
@endif

<!-- Bootstrap v4.4.1 css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
<!-- font-awesome css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/font-awesome.min.css">
<!-- Uicons Regular Rounded css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/uicons-regular-rounded.css">
<!-- flaticon css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/fonts/flaticon.css">
<!-- animate css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/animate.css">
<!-- slick css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/slick.css">
<!-- owl.carousel css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/owl.carousel.css">
<!-- off canvas css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/off-canvas.css">
<!-- magnific popup css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/magnific-popup.css">
<!-- Main Menu css -->
<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/rsmenu-main.css">
<!-- nivo slider CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/inc/custom-slider/css/nivo-slider.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/inc/custom-slider/css/preview.css">
<!-- spacing css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/rs-spacing.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/style.css"> <!-- This stylesheet dynamically changed from style.less -->
<!-- responsive css -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/responsive.css">
<link href="https://fonts.cdnfonts.com/css/solaimanlipi" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/custom/custom.css">
{{-- sweet alert --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@stack('mainCss')
