@extends('userlayouts.user-master')

@section('user-content')

    <div class="main-wrapper">
        <!-- HEADER -->
        @include('userlayouts.user-top')
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
                                <a href="affapp_club.html">
                                    <img src="storage/images/clubs/15/1420/logo.png" border="0" alt="Germania Fulda">
                                </a>
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
                        <h2>103</h2>
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
                        <h2>23</h2>
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
                        <h2>1.200</h2>
                        <p>Veränderung zum letzten Monat um <span class="resultInfo resultUp">+10%                     <i class="fa fa-level-up"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>     
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
                                    <h2>23</h2>
                                    <p>Gesamt Bestellungen</p>
                                </div>
                                <div class="chartInfo">
                                    <h2>1.200 €</h2>
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
                            <div class="sticky-table-header" style="height: 78px; visibility: hidden; width: auto; top: -1px;">
                                <table id="ordersTable-clone" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th id="ordersTable-col-0-clone">Order ID</th>
                                            <th data-priority="" id="ordersTable-col-1-clone">Customer</th>
                                            <th data-priority="2" id="ordersTable-col-2-clone">Amount</th>
                                            <th data-priority="6" id="ordersTable-col-3-clone">Date Added</th>
                                            <th data-priority="6" id="ordersTable-col-4-clone">Date Modified</th>
                                            <th data-priority="3" id="ordersTable-col-5-clone">Status</th>
                                            <th data-priority="2" id="ordersTable-col-6-clone">Action</th>
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
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2475</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2475</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2470</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2471</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2472</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2465</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2474</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2461</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2463</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2468</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2466</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2457</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2354</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2648</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2145</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2874</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2963</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2854</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2654</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2185</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2598</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2176</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2211</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2323</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2636</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2525</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2727</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2929</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2424</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-0">2531</td>
                                            <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                            <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                            <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                            <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">View</button>
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2475</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Otto.de</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">erfasst </span></td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2475</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Zalando</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">erfasst</span></td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2470</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Amazon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">bestätigt</span></td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2471</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">abgelehnt</span></td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2472</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">bestätigt</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading" id="categories_3">Am häufigsten benutzen Shops
</div>
                    <div class="panel-body plr">
                        <ul class="list-styled panel-list list-padding">
                            <li class="listWrapper">
                                <a href="http://www.affapp.cloud/merchant/1036/dreamhack"><span class="itmeName"><span><img src="images/merchants/9/872/logo.png" width="45" alt="Otto.de"></span> Telekom.de</span></a> 
                                <span class="itemSubmit">Getätigte Einkäufe: <strong>250</strong></span>
                            </li>
                            <li class="listWrapper">
                                <a href="http://www.affapp.cloud/merchant/1036/dreamhack"><span class="itmeName"><span><img src="http://www.affapp.cloud/storage/images/merchants/9/872/logo.png" width="45" alt="Otto.de"></span> Telekom.de</span></a> 
                                <span class="itemSubmit">Getätigte Einkäufe: <strong>250</strong></span>
                            </li>
                            <li class="listWrapper">
                                <a href="http://www.affapp.cloud/merchant/1036/dreamhack"><span class="itmeName"><span><img src="img/brands/18999_lgo_telekom_affiliate_de.png" width="45" alt="Otto.de"></span> Telekom.de</span></a> 
                                <span class="itemSubmit">Getätigte Einkäufe: <strong>250</strong></span>
                            </li>
                            <li class="listWrapper">
                                <a href="http://www.affapp.cloud/merchant/1036/dreamhack"><span class="itmeName"><span><img src="img/brands/18999_lgo_telekom_affiliate_de.png" width="45" alt="Otto.de"></span> Telekom.de</span></a> 
                                <span class="itemSubmit">Getätigte Einkäufe: <strong>250</strong></span>
                            </li>
                            <li class="listWrapper">
                                <a href="http://www.affapp.cloud/merchant/1036/dreamhack"><span class="itmeName"><span><img src="img/brands/18999_lgo_telekom_affiliate_de.png" width="45" alt="Otto.de"></span> Telekom.de</span></a> 
                                <span class="itemSubmit">Getätigte Einkäufe: <strong>250</strong></span>
                            </li>
                            <li class="listWrapper">
                                <a href="http://www.affapp.cloud/merchant/1036/dreamhack"><span class="itmeName"><span><img src="img/brands/18999_lgo_telekom_affiliate_de.png" width="45" alt="Otto.de"></span> Telekom.de</span></a> 
                                <span class="itemSubmit">Getätigte Einkäufe: <strong>250</strong></span>
                            </li>
                            <li class="listWrapper">
                                <a href="http://www.affapp.cloud/merchant/1036/dreamhack"><span class="itmeName"><span><img src="img/brands/18999_lgo_telekom_affiliate_de.png" width="45" alt="Otto.de"></span> Telekom.de</span></a> 
                                <span class="itemSubmit">Getätigte Einkäufe: <strong>250</strong></span>
                            </li>                                        
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                        Aktive Nutzer  
</div>
                    <div class="panel-body plr">
                        <ul class="list-styled panel-list list-padding-sm">
                            <li class="listWrapper">
                                <span class="recentUserInfo"><img src="http://www.affapp.cloud/img/dashboard/male/5.png" alt="Image User" class="img-circle">Adam Smith</span> 
                                <span class="userTime">Active 10m ago</span>
                            </li>
                            <li class="listWrapper">
                                <span class="recentUserInfo"><img src="http://www.affapp.cloud/img/dashboard/male/4.png" alt="Image User" class="img-circle">Adam Smith</span> 
                                <span class="userTime">Active 12m ago</span>
                            </li>
                            <li class="listWrapper">
                                <span class="recentUserInfo"><img src="http://www.affapp.cloud/img/dashboard/male/3.png" alt="Image User" class="img-circle">Adam Smith</span> 
                                <span class="userTime">Active 15m ago</span>
                            </li>
                            <li class="listWrapper">
                                <span class="recentUserInfo"><img src="http://www.affapp.cloud/img/dashboard/male/1.png" alt="Image User" class="img-circle">Adam Smith</span> 
                                <span class="userTime">Active 17m ago</span>
                            </li>
                            <li class="listWrapper">
                                <span class="recentUserInfo"><img src="http://www.affapp.cloud/img/dashboard/male/2.png" alt="Image User" class="img-circle">Adam Smith</span> 
                                <span class="userTime">Active 19m ago</span>
                            </li>
                            <li class="listWrapper">
                                <span class="recentUserInfo"><img src="http://www.affapp.cloud/img/dashboard/female/5.png" alt="Image User" class="img-circle">Adam Smith</span> 
                                <span class="userTime">Active 14m ago</span>
                            </li>
                            <li class="listWrapper">
                                <span class="recentUserInfo"><img src="http://www.affapp.cloud/img/dashboard/female/1.png" alt="Image User" class="img-circle">Adam Smith</span> 
                                <span class="userTime">Active 1h ago</span>
                            </li>
                        </ul>
                    </div>
                </div>                 
            </div>
        </div>         
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
                        <div class="sticky-table-header" style="height: 78px; visibility: hidden; width: auto; top: -1px;">
                            <table id="ordersTable-clone" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th id="ordersTable-col-0-clone">Order ID</th>
                                        <th data-priority="" id="ordersTable-col-1-clone">Customer</th>
                                        <th data-priority="2" id="ordersTable-col-2-clone">Amount</th>
                                        <th data-priority="6" id="ordersTable-col-3-clone">Date Added</th>
                                        <th data-priority="6" id="ordersTable-col-4-clone">Date Modified</th>
                                        <th data-priority="3" id="ordersTable-col-5-clone">Status</th>
                                        <th data-priority="2" id="ordersTable-col-6-clone">Action</th>
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
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2475</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2475</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2470</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2471</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2472</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2465</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2474</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2461</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2463</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2468</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2466</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2457</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2354</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2648</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2145</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2874</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2963</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2854</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2654</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2185</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2598</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2176</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2211</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2323</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2636</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2525</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2727</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2929</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2424</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-0">2531</td>
                                        <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                        <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">15/12/2017</td>
                                        <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                        <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">View</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2475</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2475</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2470</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2471</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2472</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2465</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2474</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2461</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2463</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2468</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2466</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2457</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2354</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2648</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2145</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2874</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2963</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2854</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2654</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2185</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2598</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2176</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2211</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2323</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2636</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2525</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2727</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2929</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-danger">Canceled</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2424</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-0">2531</td>
                                    <td data-org-colspan="1" data-columns="ordersTable-col-1">Tiger Nixon</td>
                                    <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">$700</td>
                                    <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">12/12/2017</td>
                                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5"><span class="label label-warning">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>             
        </div>
    </div>
</section>
        <!-- FOOTER -->
        @include('frontendlayouts.front-bottom')
    </div>

@stop
