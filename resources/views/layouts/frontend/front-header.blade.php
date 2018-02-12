<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <title>DonatIQ - Der wohl smarteste Weg zum zusätzlichen Finanzieren Deines Vereins</title>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M8TR6C6');</script>
    <!-- End Google Tag Manager -->
    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('plugins/jquery-ui/jquery-ui.min.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('plugins/listtyicons/style.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrapthumbnail/bootstrap-thumbnail.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('plugins/datepicker/datepicker.min.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('plugins/selectbox/select_option1.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('plugins/owl-carousel/owl.carousel.min.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('plugins/fancybox/jquery.fancybox.pack.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('plugins/isotope/isotope.min.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('plugins/map/css/map.css?rnd=28') }}" rel="stylesheet">
    <!-- GOOGLE FONT -->

    <!--
    <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">
    -->

    <!-- CUSTOM CSS -->
    <link href="{{ asset('css/raw.min.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('css/reviews.css?rnd=28') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.css?rnd=28') }}" rel="stylesheet">
    <!-- FAVICON -->
    <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon">
</head>
<body class="body-wrapper">
<!--<div class="page-loader" style="background: url({{ asset('img/preloader.gif') }}) center no-repeat #fff;"></div>-->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8TR6C6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
