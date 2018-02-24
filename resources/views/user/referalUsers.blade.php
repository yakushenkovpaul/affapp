@extends('layouts.user.user-master')

@section('user-content')

    <div class="main-wrapper">
        <!-- HEADER -->
    @include('layouts.user.user-top')
    <!-- SETTINGS SECTION -->
        <section class="clearfix bg-dark dashboardOrders">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="dashboardPageTitle">
                             <h2>Bereits eingeladene Freunde</h2>
                        </div>
                        @if ($referrals->isEmpty())
                            <div class="well text-center">Noch keine Freunde registriert. <i class="fa fa-frown-o" aria-hidden="true"></i> <br>
                            Willst Du das ändern, lade Deine Freunde ein, indem Du Ihnen eine Einladungsmail verschickst <i class="fa fa-smile-o" aria-hidden="true"></i></div>
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
                                        <th>Einladung</th>
                                        <th>Nutzer</th>
                                        <th>Status</th>
                                        <th>Erstellt</th>
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
                                                    <span class="label label-success">Aktiver Nutzer</span>
                                                @else
                                                    <span class="label label-warning">Noch nicht registriert</span>
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
                <div class="col-xs-4">
                <div class="dashboardPageTitle">
                <h2>Freunde einladen</h2>
                <div class="well text-center">{{ $link }}</div>
                <form id="inviteForm">
                    <input class="form-control" type="email" name="email_invite" id="email_invite" placeholder="Enter email to invite friend">
                    <button class="btn btn-primary raw-margin-top-25" type="submit" id="send_invite" style="width: 100px;">Senden</button>
                </form>
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
