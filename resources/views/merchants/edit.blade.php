@extends('dashboard', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Edit'])

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="pull-right raw-margin-top-24 raw-margin-left-24">
                {!! Form::open(['route' => 'merchants.search']) !!}
                <input class="form-control form-inline pull-right" name="search" placeholder="Search">
                {!! Form::close() !!}
            </div>
            <h1 class="pull-left">Merchants: Edit</h1>
            <a class="btn btn-primary pull-right raw-margin-top-24 raw-margin-right-8" href="{!! route('merchants.create') !!}">Add New</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            {!! Form::model($merchant, ['route' => ['merchants.update', $merchant->id], 'method' => 'patch']) !!}

            <div class="raw-margin-top-24">
                @input_maker_label('Name')
                @input_maker_create('name', ['type' => 'string'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                <img src="{{ $merchant->image }}" border="0">
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Description')
                @input_maker_create('description', ['type' => 'textarea'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Seo title')
                @input_maker_create('seo_title', ['type' => 'string'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Seo description')
                @input_maker_create('seo_description', ['type' => 'textarea'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Url')
                @input_maker_create('url', ['type' => 'string'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Status')
                @input_maker_create('status', ['type' => 'select', 'label' => 'status', 'options' => [ 'active' => '1', 'inactive' => '0' ]], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Timeleads')
                @input_maker_create('timeleads', ['type' => 'string'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Timesales')
                @input_maker_create('timesales', ['type' => 'string'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Sale Percent Max')
                @input_maker_create('sale_percent_max', ['type' => 'string'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Sale Percent Min')
                @input_maker_create('sale_percent_min', ['type' => 'string'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Sale Fix Max')
                @input_maker_create('sale_fix_max', ['type' => 'string'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Sale Fix Min')
                @input_maker_create('sale_fix_min', ['type' => 'string'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Timeleads')
                @input_maker_create('timeleads', ['type' => 'string'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Lead max')
                @input_maker_create('lead_max', ['type' => 'string'], $merchant)
            </div>

            <div class="raw-margin-top-24">
                @input_maker_label('Lead min')
                @input_maker_create('lead_min', ['type' => 'string'], $merchant)
            </div>



            <div class="raw-margin-top-24">
            {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@stop
