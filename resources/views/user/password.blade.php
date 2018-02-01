@extends('layouts.user.user-master')

@section('user-content')

    <div class="row">
        <div class="col-md-12">
            <h1>Password</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="/user/password">
                {!! csrf_field() !!}

                <div class="raw-margin-top-24">
                    @input_maker_label('Old Password')
                    @input_maker_create('old_password', ['type' => 'password', 'placeholder' => 'Altes Passwort'])
                </div>

                <div class="raw-margin-top-24">
                    @input_maker_label('New Password')
                    @input_maker_create('new_password', ['type' => 'password', 'placeholder' => 'Neues Passwort'])
                </div>

                <div class="raw-margin-top-24">
                    @input_maker_label('Confirm Password')
                    @input_maker_create('new_password_confirmation', ['type' => 'password', 'placeholder' => 'Passwort bestätigen'])
                </div>

                <div class="raw-margin-top-24">
                    <a class="btn btn-default pull-left" href="{{ URL::previous() }}">Abbrechen</a>
                    <button class="btn btn-primary pull-right" type="submit">Speichern</button>
                </div>
            </form>
        </div>
    </div>

@stop
