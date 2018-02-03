@extends('layouts.user.user-master')

@section('user-content')

    <div class="main-wrapper">
        <!-- HEADER -->
        @include('layouts.user.user-top')
        <!-- DASHBOARD SECTION -->
        <section class="clearfix bg-dark equalHeight dashboardSection">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading" id="categories">Mein aktiver Verein</div>
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
                        <h2>{{ $clubCommissionTotal }} €</h2>
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
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                        Übersicht Bestellungen
                        <span class="rightContent"><span class="dateRange"><label>Seit:</label><div class="dateSelect">
                                <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div></span><span class="dateRange"><label>Bis:</label><div class="dateSelect">
                                <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div></span><span class="btn-group btn-panel"><button type="button" class="btn btn-primary active">Täglich</button><button type="button" class="btn btn-primary">Wöchentlich</button><button type="button" class="btn btn-primary">Monatlich</button></span></span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div class="chartInfo">
                                    <h2>{{ $clubSalesTotal }}</h2>
                                    <p>Gesamt Bestellungen</p>
                                </div>
                                <div class="chartInfo">
                                    <h2>{{ $clubCommissionTotal }} €</h2>
                                    <p>Gesamt Auszahlungen</p>
                                </div>
                            </div>
                            <div class="col-sm-9 col-xs-12">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading" id="categories">Meine letzte Bestellungen</div>
                    <div class="table-wrapper">
                        <div class="table-responsive bgAdd fixed-solution" data-pattern="priority-columns">
                            <table id="ordersTable" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th id="ordersTable-col-0">Kauf ID</th>
                                        <th data-priority="" id="ordersTable-col-1">Online Shop</th>
                                        <th data-priority="2" id="ordersTable-col-2">Cashback</th>
                                        <th data-priority="6" id="ordersTable-col-3">Kaufdatum</th>
                                        <th data-priority="3" id="ordersTable-col-5">Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th data-org-colspan="1" data-columns="ordersTable-col-0">Order ID</th>
                                        <th data-org-colspan="1" data-columns="ordersTable-col-1">Customer</th>
                                        <th data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">Amount</th>
                                        <th data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">Date Added</th>
                                        <th data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">Date Modified</th>
                                        <th data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5">Status</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($userSales as $sale)
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">{{ $sale->id }}</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">
                                                <a target="_blank" href="{!! url('/merchant/' . $sale->merchant->id . '/' . Format::slug($sale->merchant->dir)) !!}" title="{{ $sale->merchant->name }}">{{ $sale->merchant->name }}</a></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">${{ $sale->value }}</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">{{ $sale->updated_at->format('d/m/Y') }}</td>
                                            @if ($sale->status == 1)
                                                <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5">
                                                    <span class="label label-success">approved</span>
                                                </td>
                                            @else
                                                <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5">
                                                    <span class="label label-warning">pending</span>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                {!! $userSales; !!}
            </div>
        </div>
    </div>
    @endif
    @if ($sales->isEmpty())
        <div class="container">
            <div class="well text-center">No orders found.</div>
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="panel panel-default panel-card">
                        <div class="panel-heading" id="categories_3">Am häufigsten benutzen Shops
    </div>
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
                    <div class="table-responsive bgAdd fixed-solution" data-pattern="priority-columns">

                        <table id="ordersTable" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th id="ordersTable-col-0">Kauf ID</th>
                                    <th data-priority="" id="ordersTable-col-1">Online Shop</th>
                                    <th data-priority="2" id="ordersTable-col-2">Cashback</th>
                                    <th data-priority="6" id="ordersTable-col-3">Kaufdatum</th>
                                    <th data-priority="3" id="ordersTable-col-5">Status</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th data-org-colspan="1" data-columns="ordersTable-col-0">Order ID</th>
                                    <th data-org-colspan="1" data-columns="ordersTable-col-1">Customer</th>
                                    <th data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">Amount</th>
                                    <th data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">Date Added</th>
                                    <th data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">Date Modified</th>
                                    <th data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5">Status</th>
                                    <th data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach($sales as $sale)
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">{{ $sale->id }}</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">
                                        <a target="_blank" href="{!! url('/merchant/' . $sale->merchant->id . '/' . Format::slug($sale->merchant->dir)) !!}" title="{{ $sale->merchant->name }}">{{ $sale->merchant->name }}</a></td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">${{ $sale->value }}</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">{{ $sale->updated_at->format('d/m/Y') }}</td>
                                    @if ($sale->status == 1)
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5">
                                            <span class="label label-success">approved</span>
                                        </td>
                                    @else
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5">
                                            <span class="label label-warning">pending</span>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                {!! $sales; !!}
            </div>
        </div>
    </div>
    @endif
</section>
        <!-- FOOTER -->
        @php
            $graphs = 1;
        @endphp

        <script>
            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];
        </script>

        @include('layouts.frontend.front-bottom')
    </div>

@stop
