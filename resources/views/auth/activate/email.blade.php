@extends('layouts.master')

@section('app-content')

    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">

            <h1 class="text-center">Activate</h1>

            <p>Please check your email to activate your account.</p>

            <a class="btn btn-primary" href="{{ url('activate/send-token') }}">Request new Token</a>

        </div>
    </div>

@stop

