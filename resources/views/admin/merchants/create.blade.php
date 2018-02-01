@extends('layouts.admin.admin-master', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Create'])

@section('admin-content')

    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::open(['route' => 'merchants.store', 'class' => 'listing__form']) !!}

                    <div class="dashboardPageTitle">
                        <h2>Merchant Create</h2>
                    </div>
                    <div class="dashboardBoxBg mb30">
                        <div class="profileIntro paraMargin">
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Name')
                                    @input_maker_create('name', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Image')
                                    @input_maker_create('image', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Priority')
                                    @input_maker_create('main', ['type' => 'select', 'label' => 'priority', 'options' => [ 'yes' => '1', 'no' => '0' ]], $merchant)
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Url')
                                    @input_maker_create('url', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Description')
                                    @input_maker_create('description', ['type' => 'textarea'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Seo title')
                                    @input_maker_create('seo_title', ['type' => 'textarea'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Seo description')
                                    @input_maker_create('seo_description', ['type' => 'textarea'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Url affilate')
                                    @input_maker_create('url_affilate', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Status')
                                    @input_maker_create('status', ['type' => 'select', 'label' => 'status', 'options' => [ 'Active' => '1', 'Inactive' => '0' ]])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Timeleads')
                                    @input_maker_create('timeleads', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Timesales')
                                    @input_maker_create('timesales', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Sale Percent Max')
                                    @input_maker_create('sale_percent_max', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Sale Percent Min')
                                    @input_maker_create('sale_percent_min', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Sale Fix Max')
                                    @input_maker_create('sale_fix_max', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Sale Fix Min')
                                    @input_maker_create('sale_fix_min', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Lead max')
                                    @input_maker_create('lead_max', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Lead min')
                                    @input_maker_create('lead_min', ['type' => 'string'])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer text-center">
                        {!! Form::submit('Create', ['class' => 'btn-submit']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

@stop
