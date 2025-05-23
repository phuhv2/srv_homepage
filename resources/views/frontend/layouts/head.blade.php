<!-- Meta Tag -->
@yield('meta')
<!-- meta tag -->
<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="description" content="Sumirubber Vietnam ltd">
<!-- responsive tag -->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/srv.ico') }}">
<!-- Bootstrap v4.4.1 css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<!-- font-awesome css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css') }}">
<!-- animate css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
<!-- aos css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/aos.css') }}">
<!-- owl.carousel css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}">
<!-- slick css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}">
<!-- off canvas css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/off-canvas.css') }}">
<!-- linea-font css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/linea-fonts.css') }}">
<!-- flaticon css  -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flaticon.css') }}">
<!-- magnific popup css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css') }}">
<!-- Main Menu css -->
<link rel="stylesheet" href="{{ asset('frontend/css/rsmenu-main.css') }}">
<!-- nivo slider CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/nivo-slider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/preview.css') }}">
<!-- rsmenu transitions css -->
<link rel="stylesheet" href="{{ asset('frontend/css/rsmenu-transitions.css') }}">
<!-- spacing css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/rs-spacing.css') }}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
<!-- responsive css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
@stack('styles')
