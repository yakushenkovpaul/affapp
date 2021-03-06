@extends('layouts.frontend.front-master')

@section('front-content')

    <div class="main-wrapper">
    @include('layouts.frontend.front-top')

    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Danke für Deinen Vorschlag. Dein Beitrag wird von uns überprüft.</p>
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
    @include('layouts.frontend.front-bottom')
    </div>

@stop
