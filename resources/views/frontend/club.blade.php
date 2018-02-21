@extends('layouts.frontend.front-master')

@section('front-content')

    <div class="main-wrapper">
    @include('layouts.frontend.front-top')
        <!-- LISTINGS DETAILS IMAGE SECTION -->

        <section class="clearfix paddingAdjustBottom">
            <div class="container">
                @if (isset($user) && empty($user->meta->club_id))
                    <div class="row" id="set-main-club">
                        <div class="col-xs-12">
                            <button type="button" class="btn btn-danger btn-block raw-margin-bottom-10" onclick="mainclub({{ $club['id'] }})">
                                <i class="fa fa-ball" aria-hidden="true"></i>Zu meinem Verein hinzufügen
                            </button>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-xs-12">
                        <div class="servicesItem">
                            <ul class="list-inline listServices">
                                <li>
                                    <div class="servicesInfo">
                                        <h2>{{ $club['name'] }}</h2>
                                    </div>
                                    <img src="{{ $club['image'] }}" alt="{{ $club['name'] }}">
                                </li>
                                <li>
                                    <div class="servicesIcon">
                                        <i class="icon-listy icon-user3"></i>
                                    </div>
                                    <div class="servicesInfo">
                                        <h2>{{ $clubFansTotal }} Nutzer</h2>
                                        <p>unterstützen {{ $club['name'] }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="servicesIcon">
                                        <i class="icon-listy icon-shopping-bag-2"></i>
                                    </div>
                                    <div class="servicesInfo">
                                        <h2>{{ $clubSalesTotal }} Bestellungen</h2>
                                        <p>sind eingegangen</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="servicesIcon">
                                        <i class="icon-listy icon-money-bag"></i>
                                    </div>
                                    <div class="servicesInfo">
                                        <h2>{{ number_format($clubCommissionTotal, 0, '.', '') }} €</h2>
                                        <p>sind bereits eingesammelt</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12">
                        <button type="button" class="btn btn-primary btn-lg btn-block raw-margin-top-10">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>Verein helfen und Online Shop auswählen
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- LISTINGS DETAILS INFO SECTION -->
        <section class="clearfix paddingAdjustTop">
            <div class="container">
                <div class="row">
                    @if ($club['address'])
                        <div class="col-sm-6 col-md-8 col-xs-12">
                    @else
                        <div class="col-sm-12 col-md-12 col-xs-12">
                    @endif
                        <div class="listDetailsInfo">
                            <div class="detailsInfoBox">
                                <h3>Über {{ $club['name'] }}</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>
                                <p>Qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
                            </div>
                        </div>
                        <br />
                        @if (!$sales->isEmpty())
                            <div class="panel panel-default panel-card">
                                <div class="panel-heading">
                                    Aktive Nutzer
                                </div>
                                <div class="panel-body plr">
                                    <ul class="list-styled panel-list list-padding-sm">
                                        @foreach($sales as $sale)
                                            <li class="listWrapper">
                                                <span class="recentUserInfo"><img src="{{ asset('img/dashboard/' . $sale->user->meta->gender . '/' . $sale->user->meta->avatar . '.png') }}" alt="Image User" class="img-circle">{{ $sale->user->name }}</span>
                                                <span class="userTime">Zuletzt online: {{ $sale->updated_at->diffForHumans() }} </span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    @if ($club['address'])
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
                                        {{ $club['address'] }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="listSidebarButton">
                            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='https://www.donatiq.com/neue-vereine-vorschlagen';">Neuen Verein vorschlagen</button>
                        </div>
                    </div>

                    @endif
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        @include('layouts.frontend.front-bottom')
    </div>

@stop

@section('page_js')

    @if ($club['address'])
    <script>
        var map_image = '{{ asset('img/map/marker.png') }}';
        var map_lat = {{ $club['lat'] }};
        var map_lng = {{ $club['lng'] }};
    </script>
    @endif

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&callback=initMap" async defer></script>
    <script src="{{ asset('js/single-map.js?rnd=' . time()) }}"></script>
@stop
