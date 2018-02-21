<section class="clearfix bg-dark equalHeight dashboardSection">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading" id="categories">Mein aktiver Verein
                        <span style="font-size: 12px;">
                            ( <a href="{!! url('/clubs/?changeClub=true') !!}">change</a> )
                        </span>
                    </div>
                    <div class="panel-body plr">
                        <ul class="list-styled panel-list list-padding">
                            <li class="listWrapper">
                                <div class="center-block">
                                    <a href="{!! url('/club/' . $club['id'] . '/' . Format::slug($club['dir'])) !!}" title="{{ $club['name'] }}">
                                        <img src="{{ $club['image'] }}" alt="{{ $club['name'] }}">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                        Nutzer
                    </div>
                    <div class="panel-body">
                        <h2>{{ $clubFansTotal }}</h2>
                        <p>Veränderung zum letzten Monat um<span class="resultInfo resultUp">+10%                     <i class="fa fa-level-up" aria-hidden="true"></i></span></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                        Bestellungen
                    </div>
                    <div class="panel-body">
                        <h2>{{ $clubSalesTotal }}</h2>
                        <p>Veränderung zum letzten Monat um  <span class="resultInfo resultDown">-5%                     <i class="fa fa-level-down" aria-hidden="true"></i></span></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                        Cashback in Euro
                    </div>
                    <div class="panel-body">
                        <h2>{{ number_format($clubCommissionTotal, 0, '.', '') }} €</h2>
                        <p>Veränderung zum letzten Monat um <span class="resultInfo resultUp">+10%                     <i class="fa fa-level-up"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($userSales->isEmpty())
        <div class="container">
            <div class="well text-center">No orders found.</div>
        </div>
    @else
        <div class="container">

            <div class="dynamic_graph">
                @include('user.dashboard.graph')
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="table-wrapper">
                        <div class="btn-toolbar">
                            <div class="btn-group focus-btn-group">
                                <button class="btn btn-default">
                                    <span class="glyphicon glyphicon-screenshot"></span> Meine letzte Bestellungen
                                </button>
                            </div>
                        </div>

                        <div class="dynamic_orders_user" id="page_user_dashboard">
                            @include('user.dashboard.sales', ['listing_sales' => $userSales])
                        </div>
                    </div>
                </div>
            </div>




        </div>
    @endif
    @if ($sales->isEmpty())
        <div class="container">
            <div class="well text-center">No orders found.</div>
        </div>
    @else
        <div class="container" style="margin-top: 90px;">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="panel panel-default panel-card">
                        <div class="panel-heading" id="categories_3">Am häufigsten benutzen Shops</div>
                        <div class="panel-body plr">
                            @if ($salesMerchants)
                                <ul class="list-styled panel-list list-padding">
                                    @foreach($salesMerchants as $sale)
                                        <li class="listWrapper">
                                            <a target="_blank" href="{!! url('/merchant/' . $sale->merchant->id . '/' . Format::slug($sale->merchant->dir)) !!}" title="{{ $sale->merchant->name }}">
                                                            <span class="itmeName">
                                                                <span><img src="{{ $sale->merchant->image }}" alt="{{ $sale->merchant->name }}" width="45"></span>
                                                                {{ $sale->merchant->name }}
                                                            </span></a>
                                            <span class="itemSubmit">Getätigte Einkäufe: <strong>250</strong></span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="panel panel-default panel-card">
                        <div class="panel-heading">
                            Aktive Nutzer
                        </div>
                        @if ($sales)
                            <div class="panel-body plr">
                                <ul class="list-styled panel-list list-padding-sm">
                                    @foreach($sales as $sale)
                                        <li class="listWrapper">
                                                <span class="recentUserInfo">
                                                    <img src="{{ asset('img/dashboard/' . $sale->user->meta->gender . '/' . $sale->user->meta->avatar . '.png') }}" alt="Image User" class="img-circle">{{ $sale->user->name }}</span>
                                            <span class="userTime">Active {{ $sale->updated_at->diffForHumans() }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-wrapper">
                        <div class="btn-toolbar">
                            <div class="btn-group focus-btn-group">
                                <button class="btn btn-default">
                                    <span class="glyphicon glyphicon-screenshot"></span> Gesamtübersicht aller Einkäufe
                                </button>
                            </div>
                        </div>

                        <div class="dynamic_orders_all" id="page_user_dashboard">
                            @include('user.dashboard.sales', ['listing_sales' => $sales])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>