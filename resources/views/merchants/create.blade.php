@extends('dashboard', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Create'])

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="pull-right raw-margin-top-24 raw-margin-left-24">
                {!! Form::open(['route' => 'merchants.search']) !!}
                <input class="form-control form-inline pull-right" name="search" placeholder="Search">
                {!! Form::close() !!}
            </div>
            <h1 class="pull-left">Merchants: Create</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['route' => 'merchants.store']) !!}

            <div class="form-group ">
                <label class="control-label" for="Name">Name</label>
                <input id="Name" class="form-control" type="text" name="name" placeholder="Name">
            </div>

            <div class="form-group ">
                <label class="control-label" for="Image">Image</label>
                <input id="Image" class="form-control" type="number" name="image" placeholder="Image">
            </div>

            <div class="form-group ">
                <label class="control-label" for="Description">Text</label>
                <textarea id="Description" class="form-control" name="description" placeholder="Text"></textarea>
            </div>

            <div class="form-group ">
                <label class="control-label" for="Seo_title">Seo title</label>
                <input id="Seo_title" class="form-control" type="text" name="seo_title" placeholder="Seo title">
            </div>

            <div class="form-group ">
                <label class="control-label" for="Seo_description">Seo description</label>
                <input id="Seo_description" class="form-control" type="text" name="seo_description" placeholder="Seo description">
            </div>

            <div class="form-group ">
                <label class="control-label" for="Url">Url</label>
                <input id="Url" class="form-control" type="text" name="url" placeholder="Url">
            </div>

            <div class="form-group ">
                @input_maker_label('Gender')
                @input_maker_create('status', ['type' => 'select', 'label' => 'status', 'options' => [ 'Active' => '1', 'Inactive' => '0' ]])
            </div>

            <div class="form-group ">
                <label class="control-label" for="Commission">Commission</label>
                <input id="Commission" class="form-control" type="number" name="commission" step="any" placeholder="Commission">
            </div>

            <div class="form-group ">
                <label class="control-label" for="Cashback">Cashback</label>
                <input id="Cashback" class="form-control" type="number" name="cashback" step="any" placeholder="Cashback">
            </div>

            <div class="form-group ">
                <label class="control-label" for="Rate">Rate</label>
                <input id="Rate" class="form-control" type="number" name="rate" placeholder="Rate">
            </div>

            <div class="form-group ">
                <label class="control-label" for="Added">Added</label>
                <input id="Added" class="form-control" type="number" name="added" placeholder="Added">
            </div>

            {!! Form::submit('Create', ['class' => 'btn btn-primary pull-right']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@stop