@extends('dashboard', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Settings'])

@section('content')

    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form method="POST" action="/user/settings">
                        {!! csrf_field() !!}
                        <div class="dashboardPageTitle">
                            <h2>Settings</h2>
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        @input_maker_label('Email')
                                        @input_maker_create('email', ['type' => 'string'], $user)
                                    </div>
                                    <div class="form-group col-xs-12">
                                        @input_maker_label('Name')
                                        @input_maker_create('name', ['type' => 'string'], $user)
                                    </div>

                                    @include('user.meta')

                                    <div class="form-group col-xs-12">
                                        @input_maker_label('Role')
                                        @input_maker_create('roles', ['type' => 'relationship', 'model' => 'App\Models\Role', 'label' => 'label', 'value' => 'name'], $user)
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center btn-area">
                            <a class="btn btn-primary pull-left" href="{{ URL::previous() }}">Cancel</a>
                            <!--<a class="btn btn-primary center-block" href="/user/password">Change Password</a>-->
                            <button class="btn btn-primary pull-right" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@stop
