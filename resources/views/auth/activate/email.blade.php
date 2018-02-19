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
        <section class="clearfix activateSection">
            <div class="container">
                <div class="row">
                    <div class="center-block col-md-5 col-sm-6 col-xs-12">
                        <div class="panel panel-default loginPanel">
                            <div class="panel-heading text-center">Aktivieren</div>
                            <div class="panel-body">
                                <p class="text-center">Wir haben Dir eine E-Mail mit den nächsten Schritten geschickt. </p>
                                <p class="text-center">Folge dem Link in der E-Mail, um Deine Registrierung abzuschließen.</p>
                            </div>
                            <div class="panel-footer text-center">
                                <p><a class="btn btn-primary btn-padding" href="{{ url('activate/send-token') }}">Email nochmal versenden</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
