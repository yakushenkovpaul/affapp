@extends('layouts.admin.admin-master', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Create'])

@section('admin-content')

    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::open(['files' => true, 'route' => 'clubs.store', 'class' => 'listing__form']) !!}

                    <div class="dashboardPageTitle">
                        <h2>Club Create</h2>
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
                                    @input_maker_create('image', ['type' => 'file'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Url')
                                    @input_maker_create('url', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Status')
                                    @input_maker_create('status', ['type' => 'select', 'label' => 'status', 'options' => [ 'Active' => '1', 'Pending' => '2', 'Disable' => '0' ]])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Phone')
                                    @input_maker_create('phone', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Email')
                                    @input_maker_create('email', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Description')
                                    @input_maker_create('description', ['type' => 'textarea'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Country')
                                    @input_maker_create('country', ['type' => 'string', 'value' => 'Germany'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Address')
                                    @input_maker_create('address', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Zip')
                                    @input_maker_create('zip', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Contacts')
                                    @input_maker_create('contacts', ['type' => 'textarea'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Bank details')
                                    @input_maker_create('bank_details', ['type' => 'textarea'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Fee')
                                    @input_maker_create('fee', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Facebook')
                                    @input_maker_create('facebook', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Twitter')
                                    @input_maker_create('twitter', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Instagram')
                                    @input_maker_create('instagram', ['type' => 'string'])
                                </div>
                                <div class="form-group col-xs-12">
                                    @input_maker_label('Youtube')
                                    @input_maker_create('youtube', ['type' => 'string'])
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
