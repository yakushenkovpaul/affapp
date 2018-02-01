@extends('layouts.admin.admin-master', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Index'])

@section('admin-content')

    <!-- DASHBOARD ORDERS SECTION -->
    <section class="clearfix bg-dark dashboardOrders">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="dashboardPageTitle">
                        <h2>Roles List</h2>
                    </div>
                    <div class="btn-area mt30 text-right">
                        <a class="btn btn-primary" href="{{ url('admin/roles/create') }}">Create New Role</a>
                    </div>
                    @if ($roles->isEmpty())
                        <div class="well text-center">No roles found.</div>
                    @else
                    <div class="table-responsive bgAdd"  data-pattern="priority-columns">
                        <table id="ordersTable" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th data-priority="1">Role ID</th>
                                <th data-priority="2">Label</th>
                                <th data-priority="3">Name</th>
                                <th data-priority="4">Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Role ID</th>
                                <th>Name</th>
                                <th>Label</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->label }}</td>
                                    <td>
                                        <form method="post" action="{!! route('roles.destroy', [$role->id]) !!}">
                                            {!! csrf_field() !!}
                                            {!! method_field('DELETE') !!}
                                            <div class="btn-group">
                                                <a class="btn btn-primary" href="{!! route('roles.edit', [$role->id]) !!}">Edit</a>
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this role?')" class="btn btn-primary">Delete</button>
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