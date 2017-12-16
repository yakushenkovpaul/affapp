@extends('frontendlayouts.front-master')

@section('front-content')

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
                    </div>
                </nav>
            </div>
        </header>


        <!-- LOGIN SECTION -->
        <section class="clearfix loginSection">
            <div class="container">
                <div class="row">
                    <div class="center-block col-md-5 col-sm-6 col-xs-12">
                        <div class="panel panel-default loginPanel">
                            <div class="panel-heading text-center">Password Reset</div>
                            <div class="panel-body">
                                <form method="POST" action="{!! url('password/email') !!}" class="loginForm">
                                    {!! csrf_field() !!}
                                    @include('partials.errors')
                                    @include('partials.status')
                                    <div class="form-group">
                                        <label for="userName">Email</label>
                                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary pull-left">Reset</button>
                                        <a href="{!! url('login') !!}" class="pull-right link">Wait, I remember!</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop
