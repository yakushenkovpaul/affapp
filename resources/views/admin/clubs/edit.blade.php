@extends('dashboard', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Edit'])

@section('content')

    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::model($club, ['route' => ['clubs.update', $club->id], 'method' => 'patch', 'class' => 'listing__form']) !!}
                    <div class="dashboardPageTitle">
                        <h2>Edit Club: [{{ $club->name }}]</h2>
                    </div>
                    <div class="dashboardBoxBg mb30">
                        <div class="profileIntro paraMargin">
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Name')
                                    @input_maker_create('name', ['type' => 'string'], $club)
                                </div>
                                <div class="form-group col-xs-12">
                                    <img src="{{ $club->image }}" border="0">
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Url')
                                    @input_maker_create('url', ['type' => 'string'], $club)
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Country')
                                    @input_maker_create('country', ['type' => 'string'], $club)
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Address')
                                    @input_maker_create('address', ['type' => 'string'], $club)
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Zip')
                                    @input_maker_create('zip', ['type' => 'string'], $club)
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Contacts')
                                    @input_maker_create('contacts', ['type' => 'textarea'], $club)
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Bank details')
                                    @input_maker_create('bank_details', ['type' => 'textarea'], $club)
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Fee')
                                    @input_maker_create('fee', ['type' => 'string'], $club)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer text-center btn-area">
                        <a class="btn btn-primary pull-left" href="{{ URL::previous() }}">Cancel</a>
                        <button class="btn btn-primary pull-right" type="submit">Update</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

@stop
