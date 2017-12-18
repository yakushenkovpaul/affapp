@extends('frontendlayouts.front-master')

@section('front-content')

    <div class="main-wrapper">
    @include('frontendlayouts.front-top')
        <!-- LISTINGS DETAILS IMAGE SECTION -->
        <section class="clearfix paddingAdjustBottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="servicesItem">
                            <ul class="list-inline listServices">
                                <li>
                                    <div class="servicesInfo">
                                        <h2>FSV Germania Fulda</h2>
                                    </div>
                                    <img src="{{ asset('img/clubs/cb-1.jpeg') }}" border="0">
                                </li>
                                <li>
                                    <div class="servicesIcon">
                                        <i class="icon-listy icon-user3"></i>
                                    </div>
                                    <div class="servicesInfo">
                                        <h2>100500 Nutzer</h2>
                                        <p>helfen dem Verein beim Shoppen</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="servicesIcon">
                                        <i class="icon-listy icon-candy"></i>
                                    </div>
                                    <div class="servicesInfo">
                                        <h2>10250 Bestellungen</h2>
                                        <p>sind registriert</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="servicesIcon">
                                        <i class="icon-listy icon-money-bag"></i>
                                    </div>
                                    <div class="servicesInfo">
                                        <h2>22943 Euro</h2>
                                        <p>sind bereits eingesammelt</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="listingTitleArea">
                            <div class="listingReview">
                                <div class="club-buttons">
                                    <a href="#" class="btn btn-primary"><i class="fa fa-heart" aria-hidden="true"></i>Zu meinem Verein hinzufügen</a>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Verein merken und einkaufen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- LISTINGS DETAILS INFO SECTION -->
        <section class="clearfix paddingAdjustTop">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-8 col-xs-12">
                        <div class="listDetailsInfo">
                            <div class="detailsInfoBox">
                                <h3>Über {Club_Name}</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>
                                <p>Qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg btn-block">Zu Lieblingsverein hinzufügen </button>
                        <br />
                        <div class="panel panel-default panel-card">
                            <div class="panel-heading">
                                Aktive Nutzer
                            </div>
                            <div class="panel-body plr">
                                <ul class="list-styled panel-list list-padding-sm">
                                    <li class="listWrapper">
                                        <span class="recentUserInfo"><img src="{{ asset('img/dashboard/recent-user-1.jpg') }}" alt="Image User" class="img-circle">Adam Smith</span>
                                        <span class="userTime">Zuletzt online: vor 10 Minuten </span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="recentUserInfo"><img src="{{ asset('img/dashboard/recent-user-2.jpg') }}" alt="Image User" class="img-circle">Adam Smith</span>
                                        <span class="userTime">Zuletzt online: vor 10 Minuten</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="recentUserInfo"><img src="{{ asset('img/dashboard/recent-user-3.jpg') }}" alt="Image User" class="img-circle">Adam Smith</span>
                                        <span class="userTime">Zuletzt online: vor 10 Minuten</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="recentUserInfo"><img src="{{ asset('img/dashboard/recent-user-4.jpg') }}" alt="Image User" class="img-circle">Adam Smith</span>
                                        <span class="userTime">Zuletzt online: vor 10 Minuten</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="recentUserInfo"><img src="{{ asset('img/dashboard/recent-user-1.jpg') }}" alt="Image User" class="img-circle">Adam Smith</span>
                                        <span class="userTime">Zuletzt online: vor 10 Minuten</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="recentUserInfo"><img src="{{ asset('img/dashboard/recent-user-2.jpg') }}" alt="Image User" class="img-circle">Adam Smith</span>
                                        <span class="userTime">Zuletzt online: vor 10 Tagen</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="recentUserInfo"><img src="{{ asset('img/dashboard/recent-user-3.jpg') }}" alt="Image User" class="img-circle">Adam Smith</span>
                                        <span class="userTime">Zuletzt online: vor 10 Tagen</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <div class="clearfix map-sidebar map-right">
                            <div id="map" style="height: 538px; margin-bottom:40px;"></div>
                        </div>
                        <div class="listSidebar">
                            <h3>Anschrift</h3>
                            <div class="contactInfo">
                                <ul class="list-unstyled list-address">
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        16/14 Babor Road, Mohammad pur
                                        <br> Dhaka, Bangladesh
                                    </li>
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        +55 654 545 122
                                        <br> +55 654 545 123
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <a href="#">info @example.com</a>
                                        <a href="#">info@bayernmunich.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <div class="listSidebarButton">
                            <button type="button" class="btn btn-primary btn-lg btn-block">Neuen Verein hinzufügen</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        @include('frontendlayouts.front-bottom')
    </div>

@stop