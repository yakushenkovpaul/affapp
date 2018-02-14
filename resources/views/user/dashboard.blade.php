@extends('layouts.user.user-master')

@section('user-content')

    <div class="main-wrapper">
        <!-- HEADER -->
        @include('layouts.user.user-top')
        <!-- DASHBOARD SECTION -->
        @if (!empty($club))
            @include('user.dashboard.club')
        @else
            @include('user.dashboard.noclub')
        @endif
        <!-- FOOTER -->
        @include('layouts.frontend.front-bottom')
    </div>

@stop
