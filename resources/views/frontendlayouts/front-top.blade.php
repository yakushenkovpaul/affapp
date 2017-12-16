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
                    <a class="navbar-brand" href="affapp_index.html">
                        <img src="{{ asset('img/logo-heart.jpg') }}" alt="logo">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{!! url('/shops') !!}">online shops </a>
                        </li>
                        <li>
                            <a href="{!! url('/clubs') !!}">vereine </a>
                        </li>
                        <li>
                            <a href="{!! url('/tutorial') !!}">wie es funktioniert </a>
                        </li>
                        <li>
                            <a href="{!! url('/support') !!}">support </a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-default navbar-btn" type="button" data-toggle="modal" data-target="#loginModal">
                    <span class="visible-xs">Login</span>
                    <span>anmelden</span>
                </button>
            </div>
        </nav>
    </div>
</header>