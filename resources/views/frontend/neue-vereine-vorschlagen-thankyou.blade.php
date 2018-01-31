@extends('frontendlayouts.front-master')

@section('front-content')

    <div class="main-wrapper">
    @include('frontendlayouts.front-top')

    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Thank you. Your club will send to approve</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        var map_image = '{{ asset('img/map/marker.png') }}';
        var map_lat = 52.4973777;
        var map_lng = 13.3957458;
    </script>
       
    <!-- FOOTER -->
    @include('frontendlayouts.front-bottom')
    </div>

@stop
