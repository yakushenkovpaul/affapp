@extends('frontendlayouts.front-master')

@section('front-content')

    <div class="main-wrapper">
    @include('frontendlayouts.front-top')
        <!-- LISTINGS DETAILS IMAGE SECTION -->
        <section class="clearfix paddingAdjustBottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="panel-merchant raw-margin-bottom-28">
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
                                                <b>123 Bewertungen</b>
                                            </center>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Durchschnittliches Cashback beträgt {{ $merchant['cashback'] }}%.
                            @if($merchant['cashback_info'])
                            <a href="#" class="show-more-cashback-info">
                                <i class="fa fa-caret-down" aria-hidden="true"></i> Mehr
                            </a>
                            @endif
                        </p>
                        @if($merchant['cashback_info'])
                        <p class="cashback_info">
                            {!! nl2br(e($merchant['cashback_info'])) !!}
                        </p>
                        @endif

                        <div class="panel panel-default panel-card hidden-xs">
                            <div class="panel-heading">Cash back detalliert</div>
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
                            <div class="panel-heading" id="categories11">Top shops</div>
                            <div>
                                <ul class="panel-list list-padding left">
                                    <li class="listWrapper">
                                        <span class="itmeName">Restaurants</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName">Hotels</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName">Nightclubs</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName">Restaurants</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName">Hotels</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName">Nightclubs</span>
                                    </li>
                                </ul>
                                <ul class="panel-list list-padding right">
                                    <li class="listWrapper">
                                        <span class="itmeName">Restaurants</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName">Hotels</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName">Nightclubs</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName">Restaurants</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName">Hotels</span>
                                    </li>
                                    <li class="listWrapper">
                                        <span class="itmeName">Nightclubs</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel panel-default panel-card panel-topshop hidden-xs">
                            <div class="panel-heading">Kategorien</div>
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
                        <div class="row">
                            <div class="col-md-6 col-sm-12 merchant-title">
                                <h1>{{ $merchant['name'] }}</h1>
                            </div>
                        </div>

                        <div class="row">
                            @if (isset($merchant['fav']))
                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <button type="button" class="btn btn-primary btn-lg btn-block raw-margin-top-10" onclick="fav({{ $merchant['id'] }}, 'fav-merchant')">
                                        @if ($merchant['fav'])
                                            <i id="fav-merchant-{{ $merchant['id'] }}" class="fa fa-heart" aria-hidden="true"></i>Mein Lieblingsshop
                                        @else
                                            <i id="fav-merchant-{{ $merchant['id'] }}" class="fa fa-heart-o" aria-hidden="true"></i>Mein Lieblingsshop
                                        @endif
                                    </button>
                                </div>                     
                                <div class="col-sm-6 col-md-8 col-xs-12">
                                    <a href="{{ $merchant['url'] }}" title="{{ $merchant['name'] }}" class="btn btn-primary btn-lg btn-block raw-margin-top-10">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>Zum Shop gehen &amp; gutes tun
                                    </a>
                                </div>
                                
                            @else
                                <div class="col-sm-12 col-md-12 col-xs-12">
                                    <a href="{!! url('/merchant/' . $merchant['id'] . '/go') !!}" target="_blank" title="{{ $merchant['name'] }}" class="btn btn-primary btn-lg btn-block raw-margin-top-10">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>Zum Shop gehen &amp; gutes tun
                                    </a>
                                </div>
                            @endif
                        </div>

                        <section>
                            <div class="col-xs-12 col-sm-12 col-md-12 promo">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8">
                                        <h4>Скидка 10% + доставка Первого заказа!</h4>
                                        <div class="promo-text">
                                            Bis zu 30% Rabatt auf Animona VOM FEINSTEN Bundles.

                                            <br>
                                            Gültig bis:
                                            31.01.2018
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <a data-toggle="collapse" href="#code-1" class="open-value promo-code collapsed" aria-expanded="false">
                                            <div class="promo-value promo-green">code anzeigen</div>
                                        </a>
                                        <div id="code-1" class="code collapse" aria-expanded="false" style="height: 0px;">
                                            LV5MAY14
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 promo">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8">
                                        <h4>Скидка 10% + доставка Первого заказа!</h4>
                                        <div class="promo-text">
                                            sit ea detraxit menandri mediocritatem, in mel dicant mentitum.&nbsp;sit ea detraxit menandri mediocritatem, in mel dicant mentitum.sit ea detraxit menandri mediocritatem, in mel dicant mentitum.
                                        </div>
                                        <a href="#" class="show-more"><i class="fa fa-caret-down" aria-hidden="true"></i> Mehr</a>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <a data-toggle="collapse" href="#code-2" class="open-value promo-code collapsed" aria-expanded="false">
                                            <div class="promo-value promo-green">code anzeigen</div>
                                        </a>
                                        <div id="code-2" class="code collapse" aria-expanded="false" style="height: 0px;">
                                            LV5MAY14
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 promo">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8">
                                        <h4>Скидка 10% + доставка Первого заказа!</h4>
                                        <div class="promo-text">
                                            Bis zu 30% Rabatt auf Animona VOM FEINSTEN Bundles.

                                            <br>
                                            Gültig bis:
                                            31.01.2018
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <a data-toggle="collapse" href="#code-2" class="open-value promo-code collapsed" aria-expanded="false">
                                            <div class="promo-value promo-green">code anzeigen</div>
                                        </a>
                                        <div id="code-2" class="code collapse" aria-expanded="false" style="height: 0px;">
                                            LV5MAY14
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 promo">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8">
                                        <h4>Скидка 10% + доставка Первого заказа!</h4>
                                        <div class="promo-text">
                                            Bis zu 30% Rabatt auf Animona VOM FEINSTEN Bundles.

                                            <br>
                                            Gültig bis:
                                            31.01.2018
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <a data-toggle="collapse" href="#code-2" class="open-value promo-code collapsed" aria-expanded="false">
                                            <div class="promo-value promo-green">code anzeigen</div>
                                        </a>
                                        <div id="code-2" class="code collapse" aria-expanded="false" style="height: 0px;">
                                            LV5MAY14
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 promo">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8">
                                        <h4>Скидка 10% + доставка Первого заказа!</h4>
                                        <div class="promo-text">
                                            Bis zu 30% Rabatt auf Animona VOM FEINSTEN Bundles.

                                            <br>
                                            Gültig bis:
                                            31.01.2018
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <a data-toggle="collapse" href="#code-2" class="open-value promo-code collapsed" aria-expanded="false">
                                            <div class="promo-value promo-green">code anzeigen</div>
                                        </a>
                                        <div id="code-2" class="code collapse" aria-expanded="false" style="height: 0px;">
                                            LV5MAY14
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 promo">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8">
                                        <h4>Скидка 10% + доставка Первого заказа!</h4>
                                        <div class="promo-text">
                                            Bis zu 30% Rabatt auf Animona VOM FEINSTEN Bundles.

                                            <br>
                                            Gültig bis:
                                            31.01.2018
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <a data-toggle="collapse" href="#code-2" class="open-value promo-code collapsed" aria-expanded="false">
                                            <div class="promo-value promo-green">code anzeigen</div>
                                        </a>
                                        <div id="code-2" class="code collapse" aria-expanded="false" style="height: 0px;">
                                            LV5MAY14
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 promo">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8">
                                        <h4>Скидка 10% + доставка Первого заказа!</h4>
                                        <div class="promo-text">
                                            Bis zu 30% Rabatt auf Animona VOM FEINSTEN Bundles.

                                            <br>
                                            Gültig bis:
                                            31.01.2018
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <a data-toggle="collapse" href="#code-2" class="open-value promo-code collapsed" aria-expanded="false">
                                            <div class="promo-value promo-green">code anzeigen</div>
                                        </a>
                                        <div id="code-2" class="code collapse" aria-expanded="false" style="height: 0px;">
                                            LV5MAY14
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 promo">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8">
                                        <h4>Скидка 10% + доставка Первого заказа!</h4>
                                        <div class="promo-text">
                                            Bis zu 30% Rabatt auf Animona VOM FEINSTEN Bundles.

                                            <br>
                                            Gültig bis:
                                            31.01.2018
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <a data-toggle="collapse" href="#code-2" class="open-value promo-code collapsed" aria-expanded="false">
                                            <div class="promo-value promo-green">code anzeigen</div>
                                        </a>
                                        <div id="code-2" class="code collapse" aria-expanded="false" style="height: 0px;">
                                            LV5MAY14
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="thumbnail blogContent">
                                <div class="caption">
                                    <h2>{{ $merchant['name'] }}</h2>
                                    <center>
                                            <img src="{{ $merchant['image'] }}" alt="{{ $merchant['name'] }}">
                                        </center>
                                    
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est. </p>
                                    <h2>Cashback von {{ $merchant['name'] }} </h2>
                                    <p>Qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est. </p>
                                    <p>Sed eiusmod tempor incididunt  labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <h2>Verein helfen und beim {{ $merchant['name'] }} mit Gutscheinen sparen</h2>
                                    <p>Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est. </p>
                                    <p>Mod tempor incididunt  labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                </div>
                            </div>
                            <div class="commentArea">
                                <h3>Leave A Comment</h3>
                                <form action="#" class="deafultForm">
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <label for="messageBox" class="control-label">Message</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="userName" class="control-label">Name</label>
                                            <input type="text" class="form-control" id="userName">
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="userEmail" class="control-label">Email</label>
                                            <input type="email" class="form-control" id="userEmail">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <button type="submit" class="btn btn-primary">Get Started</button>
                                        </div>
                                    </div>
                                </form>
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
