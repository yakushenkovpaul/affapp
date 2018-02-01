@extends('layouts.user.user-master')

@section('user-content')

    <div class="main-wrapper">
        <!-- HEADER -->
    @include('layouts.user.user-top')
    <!-- SETTINGS SECTION -->
        <section class="clearfix bg-dark dashboardOrders">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="dashboardPageTitle">
                            <h2><i class="fa fa-shopping-cart icon-dash" aria-hidden="true"></i> Lieblingsshops</h2>
                        </div>
                        @if ($merchants->isEmpty())
                            <div class="well text-center">Noch keine Shops gespeichert. Klicke 
                            
                            <a href="http://www.affapp.cloud/merchants"> hier</a>, um neue Shops hinzuzufügen</div>
                        @else
                            <div class="table-responsive bgAdd"  data-pattern="priority-columns">
                                <table id="ordersTable" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Shop ID</th>
                                        <th data-priority="1">Name</th>
                                        <th data-priority="2">Shopseite</th>
                                        <th data-priority="3">Entfernen</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Shop ID</th>
                                        <th>Name</th>
                                        <th>Shopseite</th>
                                        <th>Entfernen</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($merchants as $merchant)
                                        <tr>
                                            <td>{{ $merchant->id }}</td>
                                            <td>{{ $merchant->name }}</td>
                                            <td><a href="{!! url('/merchant/' . $merchant['id'] . '/' . Format::slug($merchant['dir'])) !!}" target="_blank">{{ char_limit($merchant['name'], 20, ['exceededText' => false]) }}</a></td>
                                            <td>
                                                <form method="post" action="{!! route('favoritesMerchants.destroy', [$merchant->id]) !!}">
                                                    {!! csrf_field() !!}
                                                    {!! method_field('DELETE') !!}
                                                    <div class="btn-group">
                                                        <button type="submit" onclick="return confirm('Bist Du sicher, dass dieser Shop aus Deiner Liste gelöscht werden soll?')" class="btn btn-primary">Löschen</button>
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
        <!-- FOOTER -->
        @include('layouts.frontend.front-bottom')
    </div>

@stop
