@extends('layouts.admin.admin-master', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Edit'])

@section('admin-content')

<section class="clearfix bg-dark listingSection">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form method="POST" action="/admin/users/{{ $user->id }}">
                    <input name="_method" type="hidden" value="PATCH">
                    {!! csrf_field() !!}
                    @if (! Session::get('original_user'))
                        <div class="btn-area pull-right">
                            <a class="btn btn-primary" href="/admin/users/switch/{{ $user->id }}">Login as this User</a>
                        </div>
                    @endif
                    <div class="dashboardPageTitle">
                        <h2>Edit [{{ $user->email }}]: Edit</h2>
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
                        <button class="btn btn-primary pull-right" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@stop
