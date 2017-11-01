@extends('layouts.master')

@section('app-content')

    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <h1 class="text-center">Register</h1>

            <form method="POST" action="/register">
                {!! csrf_field() !!}

                <div class="col-md-12 raw-margin-top-24">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                </div>
                <div class="col-md-12 raw-margin-top-24">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>
                <div class="col-md-12 raw-margin-top-24">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <div class="col-md-12 raw-margin-top-24">
                    <label>Confirm Password</label>
                    <input class="form-control" type="password" name="password_confirmation">
                </div>
                <div class="col-md-12 raw-margin-top-24">
                    <label>Lastname</label>
                    <input class="form-control" type="text" name="lastname" value="{{ old('lastname') }}">
                </div>
                <div class="col-md-12 raw-margin-top-24">
                    <label>Birthday</label>
                    <input class="form-control datepicker" type="text" name="birthday" value="{{ old('birthday') }}">
                    <span class="add-on"><i class="icon-th"></i></span>
                </div>
                <div class="col-md-12 raw-margin-top-24">
                    @input_maker_label('Gender')
                    @input_maker_create('gender', ['type' => 'select', 'label' => 'gender', 'options' => [ 'Male' => 'male', 'Female' => 'female' ]])
                </div>
                <div class="col-md-12 raw-margin-top-24">
                    <label>City</label>
                    <input class="form-control" type="text" name="city" value="{{ old('city') }}">
                </div>
                <div class="col-md-12 raw-margin-top-24">
                    <label>Club</label>
                    @input_maker_create('club_id', ['type' => 'select', 'label' => 'club_id', 'options' => $clubs ])
                </div>
                <div class="col-md-12 raw-margin-top-24">
                    <a class="btn btn-default pull-left" href="/login">Login</a>
                    <button class="btn btn-primary pull-right" type="submit">Register</button>
                </div>
            </form>

        </div>
    </div>

@stop