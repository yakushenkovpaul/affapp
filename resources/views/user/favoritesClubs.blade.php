@extends('userlayouts.user-master')

@section('user-content')

    <div class="main-wrapper">
        <!-- HEADER -->
    @include('userlayouts.user-top')
    <!-- SETTINGS SECTION -->
        <section class="clearfix bg-dark dashboardOrders">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="dashboardPageTitle">
                            <h2>Favorites clubs</h2>
                        </div>
                        @if ($clubs->isEmpty())
                            <div class="well text-center">No clubs found.</div>
                        @else
                            <div class="table-responsive bgAdd"  data-pattern="priority-columns">
                                <table id="ordersTable" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Club ID</th>
                                        <th data-priority="1">Name</th>
                                        <th data-priority="2">Url</th>
                                        <th data-priority="3">Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Club ID</th>
                                        <th>Name</th>
                                        <th>Url</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($clubs as $club)
                                        <tr>
                                            <td>{{ $club->id }}</td>
                                            <td>{{ $club->name }}</td>
                                            <td><a href="{{ $club->url }}" target="_blank">{{ str_limit($club->url, 50) }}</a></td>
                                            <td>
                                                <form method="post" action="{!! route('favoritesClubs.destroy', [$club->id]) !!}">
                                                    {!! csrf_field() !!}
                                                    {!! method_field('DELETE') !!}
                                                    <div class="btn-group">
                                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this club?')" class="btn btn-primary">Delete</button>
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
                        {!! $clubs; !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        @include('frontendlayouts.front-bottom')
    </div>

@stop