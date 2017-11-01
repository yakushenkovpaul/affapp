@extends('dashboard', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Edit'])

@section('content')

    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form method="POST" action="/admin/roles/{{ $role->id }}">
                        <input name="_method" type="hidden" value="PATCH">
                        {!! csrf_field() !!}
                        <div class="dashboardPageTitle">
                            <h2>Edit Role: [{{ $role->name }}]</h2>
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        @input_maker_label('Name')
                                        @input_maker_create('name', ['type' => 'string'], $role)
                                    </div>
                                    <div class="form-group col-xs-12">
                                        @input_maker_label('Label')
                                        @input_maker_create('label', ['type' => 'string'], $role)
                                    </div>
                                    <div class="form-group col-xs-12">
                                        @input_maker_label('Permissions')
                                        @foreach(Config::get('permissions', []) as $permission => $name)
                                            <div class="checkbox">
                                                <label for="{{ $name }}">
                                                    @if (stristr($role->permissions, $permission))
                                                        <input type="checkbox" name="permissions[{{ $permission }}]" id="{{ $name }}" checked>
                                                    @else
                                                        <input type="checkbox" name="permissions[{{ $permission }}]" id="{{ $name }}">
                                                    @endif
                                                    {{ $name }}
                                                </label>
                                            </div>
                                        @endforeach
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
