@extends('dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <form id="" class="pull-right raw-margin-top-24 raw-margin-left-24" method="post" action="/admin/users/search">
                {!! csrf_field() !!}
                <input class="form-control" name="search" placeholder="Search">
            </form>
            <h1>User List</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped raw-margin-top-24">

                <thead>
                    <th>Name</th>
                    <th>Label</th>
                    <th class="text-right">Actions</th>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form method="post" action="{!! url('admin/users/'.$user->id) !!}">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <button class="btn btn-danger btn-xs pull-right" type="submit" onclick="return confirm('Are you sure you want to delete this user?')"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                                <a class="btn btn-warning btn-xs pull-right raw-margin-right-16" href="{{ url('admin/users/'.$user->id.'/edit') }}"><span class="fa fa-edit"></span> Edit</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>

@stop
