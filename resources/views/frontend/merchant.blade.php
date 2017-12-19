@extends('frontendlayouts.front-master')

@section('front-content')

    <div class="main-wrapper">
    @include('frontendlayouts.front-top')
        <!-- LISTINGS DETAILS IMAGE SECTION -->
        <section class="clearfix paddingAdjustBottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="panel-merchant">
                            <div class="panel-body merchant">
                                <ul class="merchant-info">
                                    <li class="merchant-logo">
                                        <center>
                                            <img src="{{ $merchant['image'] }}" alt="{{ $merchant['name'] }}">
                                        </center>
                                    </li>
                                    <li>
                                        <div>
                                            <center>
                                                <ul class="list-inline rating rating-review">
                                                    <li>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                </ul>
                                                <b>4.6/5 - 35 голосов</b>
                                            </center>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel panel-default panel-card hidden-xs">
                            <div class="panel-heading">Cash back</div>
                            <div class="panel-body cashback">
                                <ul class="list-styled panel-list list-padding">
                                    <li>
                                            <span class="itmeName-cashback"><a href="#"><i class="icon-money-bag iconBox"></i></a><b>1.5%</b>
                                            - Category one </span>
                                    </li>
                                    <li>
                                            <span class="itmeName-cashback"><a href="#"><i class="icon-money-bag iconBox"></i></a><b>1.5%</b>
                                            - Category one </span>
                                    </li>
                                    <li>
                                            <span class="itmeName-cashback"><a href="#"><i class="icon-money-bag iconBox"></i></a><b>1.5%</b>
                                            - Category one </span>
                                    </li>
                                    <li>
                                            <span class="itmeName-cashback"><a href="#"><i class="icon-money-bag iconBox"></i></a><b>1.5%</b>
                                            - Category one </span>
                                    </li>
                                    <li>
                                            <span class="itmeName-cashback"><a href="#"><i class="icon-money-bag iconBox"></i></a><b>1.5%</b>
                                            - Category one </span>
                                    </li>
                                    <li>
                                            <span class="itmeName-cashback"><a href="#"><i class="icon-money-bag iconBox"></i></a><b>1.5%</b>
                                            - Category one </span>
                                    </li>
                                    <li>
                                            <span class="itmeName-cashback"><a href="#"><i class="icon-money-bag iconBox"></i></a><b>1.5%</b>
                                            - Category one </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel panel-default panel-card panel-topshop hidden-xs">
                            <div class="panel-heading" id="categories11">Top shop</div>
                            <div>
                                <ul class="panel-list list-padding left">
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-tea-cup-1 iconBox"></i>Restaurants</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-building iconBox"></i>Hotels</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-juice iconBox"></i>Nightclubs</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-tea-cup-1 iconBox"></i>Restaurants</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-building iconBox"></i>Hotels</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-juice iconBox"></i>Nightclubs</span>
                                    </li>
                                </ul>
                                <ul class="panel-list list-padding right">
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-tea-cup-1 iconBox"></i>Restaurants</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-building iconBox"></i>Hotels</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-juice iconBox"></i>Nightclubs</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-tea-cup-1 iconBox"></i>Restaurants</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-building iconBox"></i>Hotels</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-juice iconBox"></i>Nightclubs</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel panel-default panel-card panel-topshop hidden-xs">
                            <div class="panel-heading">Categories</div>
                            <div>
                                <ul class="panel-list list-padding left">
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-tea-cup-1 iconBox"></i>Restaurants</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-building iconBox"></i>Hotels</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-juice iconBox"></i>Nightclubs</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-tea-cup-1 iconBox"></i>Restaurants</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-building iconBox"></i>Hotels</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-juice iconBox"></i>Nightclubs</span>
                                    </li>
                                </ul>
                                <ul class="panel-list list-padding right">
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-tea-cup-1 iconBox"></i>Restaurants</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-building iconBox"></i>Hotels</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-juice iconBox"></i>Nightclubs</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-tea-cup-1 iconBox"></i>Restaurants</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-building iconBox"></i>Hotels</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName"><i class="icon-listy icon-juice iconBox"></i>Nightclubs</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7 col-xs-12 panel-body">
                        <div class="col-md-7 col-sm-12 merchant-title">
                            <h1>
                                {{ $merchant['name'] }}</h1>
                            <p>
                                Average comisson per order is 5%.</p>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Visit shop</button>
                        </div>
                        <section>
                            <div class="col-xs-12 col-sm-12 col-md-12 promo">
                                <div class="row">
                                    <div class="col-sm-8 col-md-9">
                                        <h4>Скидка 10% + доставка Первого заказа!</h4>
                                        <div class="promo-text">
                                            sit ea detraxit menandri mediocritatem, in mel dicant mentitum.&nbsp;sit ea detraxit menandri mediocritatem, in mel dicant mentitum.sit ea detraxit menandri mediocritatem, in mel dicant mentitum.
                                        </div>
                                        <a href="#" class="show-more"><i class="fa fa-caret-down" aria-hidden="true"></i> Show more</a>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <div class="promo-value promo-green">5%</div>
                                        <div class="promo-code">
                                            <a data-toggle="collapse" href="#code-1" class="open-code promo-code">Get a code</a>
                                            <div id="code-1" class="collapse code">
                                                LV5MAY14
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-7 col-md-9">
                                        <div class="promo-view">
                                            <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Viewed 276
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-5 col-md-3">
                                        <div class="promo-end">
                                            <i class="fa fa-history" aria-hidden="true"></i>&nbsp;18 days
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 promo">
                                <div class="row">
                                    <div class="col-sm-8 col-md-9">
                                        <h4>Скидка 10% + доставка Первого заказа!</h4>
                                        <center>
                                            <img src="{{ asset('img/brands/18999_lgo_telekom_affiliate_de.png') }}" alt="Otto.de">
                                        </center>
                                        <div class="promo-text">
                                            sit ea detraxit menandri mediocritatem, in mel dicant mentitum.&nbsp;sit ea detraxit menandri mediocritatem, in mel dicant mentitum.sit ea detraxit menandri mediocritatem, in mel dicant mentitum.
                                        </div>
                                        <a href="#" class="show-more"><i class="fa fa-caret-down" aria-hidden="true"></i> Show more</a>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <div class="promo-value promo-red">5%</div>
                                        <div class="promo-code">
                                            <a data-toggle="collapse" href="#code-2" class="open-code promo-code">Get a code</a>
                                            <div id="code-2" class="collapse code">
                                                LV5MAY14
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-7 col-md-9">
                                        <div class="promo-view">
                                            <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Viewed 276
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-5 col-md-3">
                                        <div class="promo-end">
                                            <i class="fa fa-history" aria-hidden="true"></i>&nbsp;18 days
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 promo">
                                <div class="row">
                                    <div class="col-sm-8 col-md-9">
                                        <h4>Скидка 10% + доставка Первого заказа!</h4>
                                        <div class="promo-text">
                                            sit ea detraxit menandri mediocritatem, in mel dicant mentitum.&nbsp;sit ea detraxit menandri mediocritatem, in mel dicant mentitum.sit ea detraxit menandri mediocritatem, in mel dicant mentitum.
                                        </div>
                                        <a href="#" class="show-more"><i class="fa fa-caret-down" aria-hidden="true"></i> Show more</a>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <div class="promo-value promo-green">5%</div>
                                        <div class="promo-code">
                                            <a data-toggle="collapse" href="#code-3" class="open-code promo-code">Get a code</a>
                                            <div id="code-3" class="collapse code">
                                                LV5MAY14
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-7 col-md-9">
                                        <div class="promo-view">
                                            <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Viewed 276
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-5 col-md-3">
                                        <div class="promo-end">
                                            <i class="fa fa-history" aria-hidden="true"></i>&nbsp;18 days
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 promo">
                                <div class="row">
                                    <div class="col-sm-8 col-md-9">
                                        <h4>Скидка 10% + доставка Первого заказа!</h4>
                                        <center>
                                            <img src="{{ asset('img/brands/14496_lgo_tele2_nl.png') }}" alt="Otto.de">
                                        </center>
                                        <div class="promo-text">
                                            sit ea detraxit menandri mediocritatem, in mel dicant mentitum.&nbsp;sit ea detraxit menandri mediocritatem, in mel dicant mentitum.sit ea detraxit menandri mediocritatem, in mel dicant mentitum.
                                        </div>
                                        <a href="#" class="show-more"><i class="fa fa-caret-down" aria-hidden="true"></i> Show more</a>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <div class="promo-value promo-red">5%</div>
                                        <div class="promo-code">
                                            <a data-toggle="collapse" href="#code-4" class="open-code promo-code">Get a code</a>
                                            <div id="code-4" class="collapse code">
                                                LV5MAY14
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-7 col-md-9">
                                        <div class="promo-view">
                                            <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Viewed 276
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-5 col-md-3">
                                        <div class="promo-end">
                                            <i class="fa fa-history" aria-hidden="true"></i>&nbsp;18 days
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="blogInnerWrapper">
                                <div class="thumbnail blogInner">
                                    <img src="{{ asset('img/blog/blog-1.jpg') }}" alt="Image blog" class="img-responsive">
                                    <div class="caption">
                                        <h4>Nov 22, 2016   by <a href="#">Admin</a></h4>
                                        <h3><a href="blog-details.html">Donec id dolor in erat imperdiet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <div class="thumbnail blogInner">
                                    <div id="blog-carousel-id" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item">
                                                <img src="{{ asset('img/blog/blog-2.jpg') }}" alt="Image blog">
                                            </div>
                                            <div class="item active">
                                                <img src="{{ asset('img/blog/blog-1.jpg') }}" alt="Image blog">
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#blog-carousel-id" data-slide="prev"><i class="icon-listy icon-left-arrow-3"></i></a>
                                        <a class="right carousel-control" href="#blog-carousel-id" data-slide="next"><i class="icon-listy icon-right-arrow-3"></i></a>
                                    </div>
                                    <div class="caption">
                                        <h4>Nov 22, 2016   by <a href="#">Admin</a></h4>
                                        <h3><a href="blog-details.html">Donec id dolor in erat imperdiet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                                    </div>
                                </div>
                                <div class="thumbnail blogInner">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jdMXyXuualc"></iframe>
                                    </div>
                                    <div class="caption">
                                        <h4>Nov 22, 2016   by <a href="#">Admin</a></h4>
                                        <h3><a href="blog-details.html">Donec id dolor in erat imperdiet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                                    </div>
                                </div>
                                <div class="thumbnail blogInner">
                                    <div class="iframWrapper">
                                        <iframe scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/273828810&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                                    </div>
                                    <div class="caption">
                                        <h4>Nov 22, 2016   by <a href="#">Admin</a></h4>
                                        <h3><a href="blog-details.html">Donec id dolor in erat imperdiet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                                    </div>
                                </div>
                                <div class="thumbnail blogInner ">
                                    <div class="caption">
                                        <h4>Nov 22, 2016   by <a href="#">Admin</a></h4>
                                        <h3><a href="blog-details.html">Donec id dolor in erat imperdiet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- LISTINGS DETAILS INFO SECTION -->
        <!-- FOOTER_HERE -->
        @include('frontendlayouts.front-bottom')
    </div>

@stop