@extends('dashboard', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Index'])

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="pull-right raw-margin-top-24 raw-margin-left-24">
                {!! Form::open(['route' => 'clubs.search']) !!}
                <input class="form-control form-inline pull-right" name="search" placeholder="Search">
                {!! Form::close() !!}
            </div>
            <h1 class="pull-left">Clubs</h1>
            <a class="btn btn-primary pull-right raw-margin-top-24 raw-margin-right-8" href="{!! route('clubs.create') !!}">Add New</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if ($clubs->isEmpty())
                <div class="well text-center">No clubs found.</div>
            @else
                <table class="table table-striped">
                    <thead>
                        <th>Name</th>
                        <th>Url</th>
                        <th class="text-right" width="200px">Action</th>
                    </thead>
                    <tbody>
                        @foreach($clubs as $club)
                            <tr>
                                <td>
                                    <a href="{!! route('clubs.edit', [$club->id]) !!}">{{ $club->name }}</a>
                                </td>
                                <td>
                                    <a href="{{ $club->url }}" target="_blank">{{ $club->url }}</a>
                                </td>
                                <td class="text-right">
                                    <form method="post" action="{!! route('clubs.destroy', [$club->id]) !!}">
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}
                                        <button class="btn btn-danger btn-xs pull-right" type="submit" onclick="return confirm('Are you sure you want to delete this club?')"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                                    <a class="btn btn-default btn-xs pull-right raw-margin-right-16" href="{!! route('clubs.edit', [$club->id]) !!}"><i class="fa fa-pencil"></i> Edit</a>
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
            {!! $clubs; !!}
        </div>
    </div>

@stop