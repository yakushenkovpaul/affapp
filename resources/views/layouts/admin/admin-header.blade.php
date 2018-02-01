
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App</title>

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/listtyicons/style.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrapthumbnail/bootstrap-thumbnail.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/datepicker/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/selectbox/select_option1.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/rwdtable/css/rwd-table.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/fancybox/jquery.fancybox.pack.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/isotope/isotope.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/map/css/map.css') }}" rel="stylesheet">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- FAVICON -->
    <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="body-wrapper">
<div class="page-loader" style="background: url({{ asset('img/preloader.gif') }}) center no-repeat #fff;"></div>
<div class="main-wrapper">
    <!-- HEADER -->
    <header id="pageTop" class="header">

        <!-- TOP INFO BAR -->

        <div class="nav-wrapper navbarWhite">

            <div class="container-fluid header-bg">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-xs-6 header-left empty">empty
                    </div>
                    <div class="col-lg-8 col-sm-8 col-xs-6 header-right empty">empty
                    </div>
                </div>
            </div>

            <!-- NAVBAR -->
            <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img src="{{ asset('img/logo-heart.jpg') }}" alt="logo"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class=" dropdown singleDrop">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{!! url('user/dashboard') !!}">Dashboard</a></li>
                                    <li><a href="{!! url('user/settings') !!}">Settings</a></li>
                                    <li><a href="{!! url('logout') !!}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @include('layouts.admin.admin-navigation')
    </header>