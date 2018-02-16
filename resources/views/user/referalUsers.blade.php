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
                             <h2><i class="fa fa-trophy icon-dash" aria-hidden="true"></i> Meine Referal Users</h2>
                        </div>
                        @if ($referrals->isEmpty())
                            <div class="well text-center">No refereal users found.</div>
                        @else
                            <div class="table-responsive bgAdd"  data-pattern="priority-columns">
                                <table id="ordersTable" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th data-priority="0">Program</th>
                                        <th data-priority="1">User</th>
                                        <th data-priority="2">User status</th>
                                        <th data-priority="3">Created</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Program</th>
                                        <th>User</th>
                                        <th>User status</th>
                                        <th>Created</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($referrals as $referral)
                                        <tr>
                                            <td>{{ $referral->id }}</td>
                                            <td>{{ $program->name }}</td>
                                            <td>{{ $referral->user->name }}</td>
                                            <td>
                                                @if ($referral->user->meta->is_active == 1)
                                                    <span class="label label-success">Active</span>
                                                @else
                                                    <span class="label label-warning">Pending</span>
                                                @endif
                                            </td>
                                            <td>{{ $referral->created_at->format('d/m/Y') }}</td>
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
                        {!! $referrals; !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        @include('layouts.frontend.front-bottom')
    </div>

@stop
