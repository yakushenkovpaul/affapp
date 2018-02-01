@extends('layouts.frontend.front-master')

@section('front-content')

    <div class="main-wrapper">
        @include('layouts.frontend.front-top')
        <!-- WORKS SECTION -->
        <section class="clearfix p0">
            <div id="map-canvas"></div>
        </section>
        <section class="clearfix bg-light pr">
            <div class="container">
                <div class="row">
                    <div class="bg-search bg-search-club">
                            <form method="POST" action="{!! url()->current() . '/search' !!}" class="form-inline" id="searchForm">
                            <div class="form-group">
                                <input type="text" name="query" class="form-control" id="query" placeholder="Vereinnamen eingeben">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Suchen
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                            {!! csrf_field() !!}
                        </form>
                    </div>
                </div>
                <div class="page-header text-center">
                    <h2>Aktive Vereine</h2>
                </div>
                <div class="row dymanic" id="clubs">
                    @if ($clubs['data'])
                        @include('frontend.listing.clubs')
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="btnArea btnAreaBorder text-center">
                            <a href="{!! url()->current() !!}" class="btn btn-primary" id="paginate">Mehr Laden</a>
                        </div>
                    </div>
                </div>
                <div class="row upPaginate">
                    <div class="col-xs-12">
                        <div class="iconup">
                            <i class="icon-listy icon-up-arrow-1" onclick="$('html, body').animate({scrollTop: '0px'}, 300);" title="up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>

            var map_lat = 52.5200;
            var map_lng = 13.4050;
            var map_url = '{!! url('js/clubs/searchGps') !!}/' + map_lat + '/' + map_lng;

        </script>

        <!-- FOOTER -->
        @include('layouts.frontend.front-bottom')
    </div>

@stop