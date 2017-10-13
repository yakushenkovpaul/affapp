@extends('dashboard', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Create'])

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="pull-right raw-margin-top-24 raw-margin-left-24">
                {!! Form::open(['route' => 'clubs.search']) !!}
                <input class="form-control form-inline pull-right" name="search" placeholder="Search">
                {!! Form::close() !!}
            </div>
            <h1 class="pull-left">Clubs: Create</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['route' => 'clubs.store']) !!}

            @form_maker_table("clubs")

            {!! Form::submit('Create', ['class' => 'btn btn-primary pull-right']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@stop