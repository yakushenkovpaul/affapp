@extends('dashboard', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Index'])

@section('content')

<?php

$merchants = array();
$clubs = array();
$users = array();

$status = array(
    1 => 'active',
    2 => 'rejected',
    3 => 'approved'
);

use App\Models\Merchant;
use App\Models\Club;
use App\Models\User;

$result = Merchant::all();

foreach ($result as $r)
{
    $merchants[$r->id] = $r->name;
}

$result = Club::all();

foreach ($result as $r)
{
    $clubs[$r->id] = $r->name;
}

$result = User::all();

foreach ($result as $r)
{
    $users[$r->id] = $r->name;
}


?>

    <!-- DASHBOARD ORDERS SECTION -->
    <section class="clearfix bg-dark dashboardOrders">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="dashboardPageTitle">
                        <h2>Sales</h2>
                    </div>
                    @if ($sales->isEmpty())
                        <div class="well text-center">No sales found.</div>
                    @else
                    <div class="table-responsive bgAdd"  data-pattern="priority-columns">
                        <table id="ordersTable" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th data-priority="1">Sale Id</th>
                                <th data-priority="2">Status</th>
                                <th data-priority="3">Value</th>
                                <th data-priority="4">Merchant</th>
                                <th data-priority="5">User</th>
                                <th data-priority="6">Club</th>
                                <th data-priority="7">Service Fee</th>
                                <th data-priority="8">Commission</th>
                                <th data-priority="9">Created</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Sale Id</th>
                                <th>Status</th>
                                <th>Value</th>
                                <th>Merchant</th>
                                <th>User</th>
                                <th>Club</th>
                                <th>Service Fee</th>
                                <th>Commission</th>
                                <th>Created</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($sales as $sale)
                                <tr>
                                    <td>
                                        {{ $sale->id }}
                                    </td>
                                    <td>
                                        {{ $status[$sale->status] }}
                                    </td>
                                    <td>
                                        {{ $sale->value }}
                                    </td>
                                    <td>
                                        {{ $merchants[$sale->merchant_id] }}
                                    </td>
                                    <td>
                                        {{ $users[$sale->user_id] }}
                                    </td>
                                    <td>
                                        {{ $clubs[$sale->club_id] }}
                                    </td>
                                    <td>
                                        {{ $sale->service_fee }}
                                    </td>
                                    <td>
                                        {{ $sale->commission }}
                                    </td>
                                    <td>
                                        12/10/2017
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    {!! $sales; !!}
                </div>
            </div>

        </div>
    </section>

@stop