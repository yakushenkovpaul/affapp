@extends('layouts.frontend.front-master')

@section('front-content')
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
                            <a class="navbar-brand" href="/"><img src="{{ asset('img/logo-dq.png') }}" alt="logo"></a>
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
                            <div class="panel-heading text-center">Members log in</div>
                            <div class="panel-body">
                                <form method="POST" action="{!! url('/login') !!}" class="loginForm" id="loginForm">
                                    {!! csrf_field() !!}
                                    @include('partials.errors')
                                    <div class="form-group">
                                        <label for="userName">Email</label>
                                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="userPassword">Password *</label>
                                        <input class="form-control" type="password" name="password" id="password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary pull-left">Log In</button>
                                        <a href="{!! url('password/reset') !!}" class="pull-right link">Fogot Password?</a>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer text-center">
                                <p>Not a member yet? <a href="{!! url('/register') !!}" class="link">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
