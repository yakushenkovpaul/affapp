@extends('frontendlayouts.front-master')

@section('front-content')
    <div class="main-wrapper">
        @include('frontendlayouts.front-top')
        <!-- WORKS SECTION -->
        <section class="clearfix worksArea">
            <div class="container">
                <div class="page-header text-center">
                    <h2>Kaufe online und unterstütze deinen lieblingsvereien<small>in vier einfachen Schritten und dabei völlig kostenlos</small></h2>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="thumbnail text-center worksContent">
                            <img src="{{ asset('img/works/star.png') }}" alt="Image works">
                            <div class="caption">
                                <h3>Wähle einen Verein zum Unterstützen</h3>
                                <p>Bestimme, welchem Verein oder welcher Organisation Du helfen möchtest.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="thumbnail text-center worksContent">
                            <img src="{{ asset('img/works/cart.png') }}" alt="Image works">
                            <div class="caption">
                                <h3>Kaufe wie gewohnt online ein</h3>
                                <p>Kaufe ganz normal bei mehr als 300 bekannten Onlineshops ein.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="thumbnail text-center worksContent">
                            <img src="{{ asset('img/works/link.png') }}" alt="Image works">
                            <div class="caption">
                                <h3>Verwende dabei unsere Partnerlinks</h3>
                                <p>Verwendest Du dabei unsere Partnerlinks, erhalten wir eine Provision von Partner Shops.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="thumbnail text-center worksContent">
                            <img src="{{ asset('img/works/donate.png') }}" alt="Image works">
                            <div class="caption">
                                <h3>Freu Dich über zusätzliche Spenden</h3>
                                <p>Die erhaltene Provision überweisen wir an Deinen Verein.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="btnArea text-center">
                            <a href="{!! url('/tutorial') !!}" class="btn btn-primary">wie es funktioniert <em class="fa fa-play-circle" aria-hidden="true"></em></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- COUNT UP SECTION -->
        <section class="clearfix countUpSection">
            <div class="container">
                <div class="page-header text-center">
                    <h2>Seit Beginn des Projekts haben wir</h2>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="text-center countItem">
                            <div class="counter">{{ $merchants_total }}</div>
                            <div class="counterInfo bg-color-1">Onlineshops hinzugefügt</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="text-center countItem">
                            <div class="counter">{{ $clubs_total }}</div>
                            <div class="counterInfo bg-color-2">Vereinsseiten hinzugefugt</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="text-center countItem">
                            <div class="counter">251</div>
                            <div class="counterInfo bg-color-3">Fussballspiele angeschaut</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="text-center countItem">
                            <div class="counter">72</div>
                            <div class="counterInfo bg-color-4">Liter Bier dabei getrunken</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if ($clubs['data'])
            <section class="clearfix thingsArea">
                <div class="container">
                    <div class="page-header text-center">
                        <h2>Aktive Vereine</h2>
                    </div>
                    <div class="row" id="clubs">
                        @include('listing.clubs')
                    </div>
                    <div class="col-xs-12">
                        <div class="btnArea btnAreaBorder text-center">
                            <a href="{!! url('clubs/') !!}" class="btn btn-primary">Mehr Vereine</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <section class="clearfix callAction">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <div class="callInfo">
                            <h4><span>DonatIQ</span> ist der <span>smarte weg</span> <br>zum zusätzlichen Finanzieren Deines Vereins</h4>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <div class="btnArea">
                            <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#loginModal">
                                <span class="visible-xs">Login</span>
                                <span>anmelden</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clearfix appDownload">
            <div class="container">
                <div class="page-header text-center">
                    <h2>Wo möchtest Du einkaufen?</h2>
                </div>
                <form role="form" method="POST" action="{!! url('merchants/search')  !!}" id="searchForm">
                    <div class="row">
                        <div class="col-xs-7 col-sm-3 col-md-10">
                            <div class="form-group">
                                <input type="text" name="query" class="form-control" id="query" placeholder="z.B. SportScheck">
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-2 col-sm-3">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">suchen
                                    <em class="fa fa-search" aria-hidden="true"></em>
                                </button>
                            </div>
                        </div>
                    </div>
                    {!! csrf_field() !!}
                </form>
            </div>
        </section>
        <!-- MERCHANTS SECTION -->
        @if ($merchants['data'])
            <section class="clearfix thingsArea">
                <div class="container">
                    <div class="page-header text-center">
                        <h2>Meist gesuchte Shops</h2>
                    </div>
                    <div class="row dymanic" id="shops">
                        @include('listing.merchants')
                    </div>
                    <div class="col-xs-12">
                        <div class="btnArea btnAreaBorder text-center">
                            <a href="{!! url('merchants/') !!}" class="btn btn-primary">Mehr Shops</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- SLIDER SECTION -->
        <section class="carousel-reviews broun-block reviews">
        <div class="page-header text-center">
        <h2>Das sagen unsere Nutzer</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-wow-delay="0.2s">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                <img class="img-responsive " src="img/dashboard/male/2.png" alt="">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="1">
                                <img class="img-responsive" src="img/dashboard/male/9.png" alt="">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="2">
                                <img class="img-responsive" src="img/dashboard/female/4.png" alt="">
                            </li>
                        </ol>
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                            <small>Someone famous</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                            <small>Someone famous</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                            <small>Someone famous</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        </section>
        
        <section class="clearfix callAction">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <div class="callInfo">
                             <h4><span>DonatIQ</span> ist der <span>einfache Weg</span> <br>für zusätzliche Unterstützung gemeinnütziger Organisationen</h4>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <div class="btnArea">
                            <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#loginModal">
                                <span class="visible-xs">Login</span>
                                <span>anmelden</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clearfix thingsArea">
            <div class="container">
                <div class="page-header text-center">
                    <h2>Die besten Gutscheine zum sparen</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thingsBox thinsSpace">
                            <div class="thingsImage">
                                <a href="blog-details.html">
                                    <img src="{{ asset('img/things/bf-1.jpg') }}" alt="Image things">
                                </a>
                            </div>
                            <div class="thingsCaption ">
                                <ul class="list-inline captionItem">
                                    <li>
                                        <i class="fa fa-user-o" aria-hidden="true"></i> 10 k
                                    </li>
                                    <li>
                                        <a href="affapp_merchant.html">Amazon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thingsBox thinsSpace">
                            <div class="thingsImage">
                                <a href="blog-details.html">
                                    <img src="{{ asset('img/things/bf-1.jpg') }}" alt="Image things">
                                </a>
                            </div>
                            <div class="thingsCaption ">
                                <ul class="list-inline captionItem">
                                    <li>
                                        <i class="fa fa-user-o" aria-hidden="true"></i> 10 k
                                    </li>
                                    <li>
                                        <a href="affapp_merchant.html">Amazon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thingsBox thinsSpace">
                            <div class="thingsImage">
                                <a href="blog-details.html">
                                    <img src="{{ asset('img/things/bf-1.jpg') }}" alt="Image things">
                                </a>
                            </div>
                            <div class="thingsCaption ">
                                <ul class="list-inline captionItem">
                                    <li>
                                        <i class="fa fa-user-o" aria-hidden="true"></i> 10 k
                                    </li>
                                    <li>
                                        <a href="affapp_merchant.html">Amazon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thingsBox thinsSpace">
                            <div class="thingsImage">
                                <a href="blog-details.html">
                                    <img src="{{ asset('img/things/bf-1.jpg') }}" alt="Image things">
                                </a>
                            </div>
                            <div class="thingsCaption ">
                                <ul class="list-inline captionItem">
                                    <li>
                                        <i class="fa fa-user-o" aria-hidden="true"></i> 10 k
                                    </li>
                                    <li>
                                        <a href="category-list-full.html">Amazon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thingsBox thinsSpace">
                            <div class="thingsImage">
                                <a href="blog-details.html">
                                    <img src="{{ asset('img/things/bf-1.jpg') }}" alt="Image things">
                                </a>
                            </div>
                            <div class="thingsCaption ">
                                <ul class="list-inline captionItem">
                                    <li>
                                        <i class="fa fa-user-o" aria-hidden="true"></i> 10 k
                                    </li>
                                    <li>
                                        <a href="category-list-full.html">Amazon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thingsBox thinsSpace">
                            <div class="thingsImage">
                                <a href="blog-details.html">
                                    <img src="{{ asset('img/things/bf-1.jpg') }}" alt="Image things">
                                </a>
                            </div>
                            <div class="thingsCaption ">
                                <ul class="list-inline captionItem">
                                    <li>
                                        <i class="fa fa-user-o" aria-hidden="true"></i> 10 k
                                    </li>
                                    <li>
                                        <a href="category-list-full.html">Amazon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thingsBox thinsSpace">
                            <div class="thingsImage">
                                <a href="blog-details.html">
                                    <img src="{{ asset('img/things/bf-2.jpg') }}" alt="Image things">
                                </a>
                            </div>
                            <div class="thingsCaption ">
                                <ul class="list-inline captionItem">
                                    <li>
                                        <i class="fa fa-user-o" aria-hidden="true"></i> 10 k
                                    </li>
                                    <li>
                                        <a href="category-list-full.html">eBay</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thingsBox thinsSpace">
                            <div class="thingsImage">
                                <a href="blog-details.html">
                                    <img src="{{ asset('img/things/bf-2.jpg') }}" alt="Image things">
                                </a>
                            </div>
                            <div class="thingsCaption ">
                                <ul class="list-inline captionItem">
                                    <li>
                                        <i class="fa fa-user-o" aria-hidden="true"></i> 10 k
                                    </li>
                                    <li>
                                        <a href="category-list-full.html">eBay</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thingsBox thinsSpace">
                            <div class="thingsImage">
                                <a href="blog-details.html">
                                    <img src="{{ asset('img/things/bf-2.jpg') }}" alt="Image things">
                                </a>
                            </div>
                            <div class="thingsCaption ">
                                <ul class="list-inline captionItem">
                                    <li>
                                        <i class="fa fa-user-o" aria-hidden="true"></i> 10 k
                                    </li>
                                    <li>
                                        <a href="category-list-full.html">eBay</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="btnArea btnAreaBorder text-center">
                            <a href="affapp_listing_merchants.html" class="btn btn-primary">Mehr Gutscheine</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        @include('frontendlayouts.front-bottom')
    </div>
@stop
