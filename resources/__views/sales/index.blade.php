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

    <div class="row">
        <div class="col-md-12">
            <div class="pull-right raw-margin-top-24 raw-margin-left-24">
                {!! Form::open(['route' => 'sales.search']) !!}
                <input class="form-control form-inline pull-right" name="search" placeholder="Search">
                {!! Form::close() !!}
            </div>
            <h1 class="pull-left">Sales</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if ($sales->isEmpty())
                <div class="well text-center">No sales found.</div>
            @else
                <table class="table table-striped">
                    <thead>
                        <th>#</th>
                        <th>Status</th>
                        <th>Value</th>
                        <th>Merchant</th>
                        <th>User</th>
                        <th>Club</th>
                        <th>Service Fee</th>
                        <th>Commission</th>
                        <th>Created</th>
                    </thead>
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
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            {!! $sales !!}
        </div>
    </div>

@stop