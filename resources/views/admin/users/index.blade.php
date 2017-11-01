@extends('dashboard', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Index'])

@section('content')

    <!-- DASHBOARD ORDERS SECTION -->
    <section class="clearfix bg-dark dashboardOrders">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="dashboardPageTitle">
                        <h2>User List</h2>
                    </div>
                    @if ($users->isEmpty())
                        <div class="well text-center">No users found.</div>
                    @else
                    <div class="table-responsive bgAdd"  data-pattern="priority-columns">
                        <table id="ordersTable" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>User ID</th>
                                <th data-priority="1">Login</th>
                                <th data-priority="4">Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>User ID</th>
                                <th>Login</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <form method="post" action="{!! route('users.destroy', [$user->id]) !!}">
                                            {!! csrf_field() !!}
                                            {!! method_field('DELETE') !!}
                                            <div class="btn-group">
                                                <a class="btn btn-primary" href="{!! route('users.edit', [$user->id]) !!}">Edit</a>
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-primary">Delete</button>
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
        </div>
    </section>

@stop