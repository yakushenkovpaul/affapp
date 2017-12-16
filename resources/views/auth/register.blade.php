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

        <?php
            #echo 'errors:' . PHP_EOL;
            #print_r($errors->get('password'));
        ?>

        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>

        <!-- LOGIN SECTION -->
        <section class="clearfix loginSection">
            <div class="container">
                <div class="row">
                    <div class="center-block col-md-5 col-sm-6 col-xs-12">
                        <div class="panel panel-default loginPanel">
                            <div class="panel-heading text-center">Sign up</div>
                            <div class="panel-body">
                                <form method="POST" action="{!! url('/register') !!}" class="loginForm" id="signupForm">
                                    {!! csrf_field() !!}

                                    <div class="form-group">
                                        <label for="userName">Name</label>
                                        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="userName">Email</label>
                                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input id="password" class="form-control" type="password" name="password">
                                    </div>

                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation">
                                    </div>

                                    <div class="form-group">
                                        <label for="userName">Club</label>
                                        <input id="club" class="form-control" type="text" name="club" value="{{ old('club') }}" placeholder="enter club">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary pull-left">Sing up</button>
                                    </div>

                                    <input type="hidden" name="club_id" id="club_id">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop
