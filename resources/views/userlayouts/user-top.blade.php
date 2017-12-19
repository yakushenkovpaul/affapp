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
                    <a class="navbar-brand" href="{!! url('/') !!}">
                        <img src="{{ asset('img/logo-heart.jpg') }}" alt="logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{!! url('/merchants') !!}">online shops </a>
                        </li>
                        <li>
                            <a href="{!! url('/clubs') !!}">vereine </a>
                        </li>
                        <li>
                            <a href="{!! url('/tutorial') !!}">wie es funktioniert </a>
                        </li>
                        <li>
                            <a href="{!! url('/contact') !!}">Kontaktiere uns </a>
                        </li>
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
    <div class="navbar-dashboard-area">
        <nav class="navbar navbar-default lightHeader navbar-dashboard" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-dash">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-dash">
                    <ul class="nav navbar-nav mr0">
                        <li class="active">
                            <a href="dashboard.html"><i class="fa fa-tachometer icon-dash" aria-hidden="true"></i> Übersicht</a>
                        </li>
                        <li>
                            <a href="oders.html"><i class="fa fa-cogs icon-dash" aria-hidden="true"></i> Meine Bestellungen</a>
                        </li>
                        <li>
                            <a href="profile.html"><i class="fa fa-user icon-dash" aria-hidden="true"></i> Persönliche Einstellungen</a>
                        </li>
                    </ul>
                    <div class="row adjustRow">
                        <div class="pull-right col-xs-12 col-sm-2">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>