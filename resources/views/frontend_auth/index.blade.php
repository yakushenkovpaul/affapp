@extends('frontendlayouts.front-master')

@section('front-content')
    <div class="main-wrapper">
        @include('frontendlayouts.front-top')

        <section class="clearfix paddingAdjustBottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="servicesItem">
                            <ul class="list-inline listServices">
                                <li>
                                    <div class="servicesInfo">
                                        <h2>Club name</h2>
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
            </div>
        </section>

        <section class="clearfix appDownload">
            <div class="container">
                <div class="page-header text-center">
                    <h2>finde hier alle online shops  <small></small></h2>
                </div>
                <form role="form" method="POST" action="{!! url('merchants/search')  !!}" id="searchForm">
                    <div class="row">
                        <div class="col-xs-7 col-sm-3 col-md-10">
                            <div class="form-group">
                                <input type="text" name="query" class="form-control" id="query" placeholder="Shop Namen eingeben z.B. Otto.de">
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