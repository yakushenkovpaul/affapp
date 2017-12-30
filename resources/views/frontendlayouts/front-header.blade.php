<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <title>Home - Listty</title>
    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('plugins/jquery-ui/jquery-ui.min.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('plugins/listtyicons/style.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrapthumbnail/bootstrap-thumbnail.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('plugins/datepicker/datepicker.min.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('plugins/selectbox/select_option1.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('plugins/owl-carousel/owl.carousel.min.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('plugins/fancybox/jquery.fancybox.pack.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('plugins/isotope/isotope.min.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('plugins/map/css/map.css?rnd=16') }}" rel="stylesheet">
    <!-- GOOGLE FONT -->

    <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="{{ asset('css/style.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('css/reviews.css?rnd=16') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.css?rnd=16') }}" rel="stylesheet">
    <!-- FAVICON -->
    <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon">
</head>
<body class="body-wrapper">
<div class="page-loader" style="background: url({{ asset('img/preloader.gif') }}) center no-repeat #fff;"></div>