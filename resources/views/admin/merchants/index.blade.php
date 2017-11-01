@extends('dashboard', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Index'])

@section('content')

<!-- DASHBOARD ORDERS SECTION -->
<section class="clearfix bg-dark dashboardOrders">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="dashboardPageTitle">
                    <h2>Merchants</h2>
                </div>
                <div class="btn-area mt30 text-right">
                    <a class="btn btn-primary" href="{!! route('merchants.create') !!}">Add new</a>
                </div>
                @if ($merchants->isEmpty())
                    <div class="well text-center">No merchants found.</div>
                @else
                <div class="table-responsive bgAdd"  data-pattern="priority-columns">
                    <table id="ordersTable" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Merchant ID</th>
                            <th data-priority="1">Name</th>
                            <th data-priority="2">Url</th>
                            <th data-priority="3">Status</th>
                            <th data-priority="4">Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Merchant ID</th>
                            <th>Name</th>
                            <th>Url</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($merchants as $merchant)
                            <tr>
                                <td>{{ $merchant->id }}</td>
                                <td>{{ $merchant->name }}</td>
                                <td><a href="{{ $merchant->url }}" target="_blank">{{ str_limit($merchant->url, 50) }}</a></td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <form method="post" action="{!! route('merchants.destroy', [$merchant->id]) !!}">
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="{!! route('merchants.edit', [$merchant->id]) !!}">Edit</a>
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this merchant?')" class="btn btn-primary">Delete</button>
                                        </div>
                                    </form>
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
                {!! $merchants; !!}
            </div>
        </div>

    </div>
</section>

@stop