@extends('frontendlayouts.front-master')

@section('front-content')

    <div class="main-wrapper">
    @include('frontendlayouts.front-top')
        <!-- WORKS SECTION -->
        <section class="main-slider" data-loop="true" data-autoplay="true" data-interval="7000">
            <div class="inner">
                <!-- Slide One -->
                <div class="slide slideResize slide4" style="background-image: url(img/banner/slider-12.jpg);">
                    <div class="container">
                        <div class="common-inner slide-inner4">
                            <span class="h1 from-bottom">kaufe online und unterstütze Deinen Verein</span>
                            <span class="h4 from-bottom">Kaufe online bei unseren Partnershops und Dein Verein erhält einen fixen oder prozentuellen Anteil von Deinem Einkauf zurück</span>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="slide slide1" style="background-image: url({{ asset('img/banner/slider-10.jpg')}});">
                    <div class="container">
                        <div class="slide-inner1 common-inner">
                            <br>
                        </div>
                    </div>
                </div>
                <div class="slide slide1" style="background-image: url(img/banner/slider-9.jpg);">
                    <div class="container">
                        <div class="slide-inner1 common-inner">
                            <br>
                        </div>
                    </div>
                </div>
                <div class="slide slide1" style="background-image: url(img/banner/slider-8.png);">
                    <div class="container">
                        <div class="slide-inner1 common-inner">
                            <br>
                        </div>
                    </div>
                </div>
                <!-- Slide Two -->
                <!-- Slide Three -->
            </div>
        </section>
        <section class="clearfix bg-light pr">
            <div class="container">
                <div class="row">
                    <div class="bg-search">
                        <form method="POST" action="{!! url()->current() . '/search' !!}" class="form-inline" id="searchForm">
                            <div class="form-group">
                                <input type="text" name="query" class="form-control" id="query" placeholder="Shop Namen eingeben z.B. Otto.de">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Suchen
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="category" placeholder="Kategorie wählen">
                            </div>
                            <input type="hidden" name="category_id" id="category_id" />
                            {!! csrf_field() !!}
                        </form>
                    </div>
                </div>
                <div class="page-header text-center">
                    <h2>Top Shops<small>Die am häufigsten besuchten Shops</small></h2>
                </div>
                <div class="row dymanic" id="shops">
                    @if ($merchants['data'])
                        @include('listing.merchants')
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="btnArea btnAreaBorder text-center">
                            <a href="{!! url()->current() !!}" class="btn btn-primary" id="paginate">Mehr Shops</a>
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
        <section class="clearfix merchants-list">
            <div class="clearfix">
                <div class="container">
                    <div class="page-header text-center">
                        <h2>Liste aller teilnehmenden Shops </h2>
                    </div>
                    <div class="row">
                        @if (isset($merchants_offset_0['data']))
                        <div class="col-sm-3 col-xs-12">
                            <div class="footerInfoTitle">
                            </div>
                            <div class="useLink">
                                <ul class="list-unstyled">
                                    @foreach ($merchants_offset_0['data'] as $merchant)
                                    <li>
                                        <a href="{!! url('/merchant/' . Format::slug($merchant['name'])) !!}" title="{{ $merchant['name'] }}">{{ char_limit($merchant['name'], 20, ['exceededText' => false]) }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif

                        @if (isset($merchants_offset_1['data']))
                            <div class="col-sm-3 col-xs-12">
                                <div class="footerInfoTitle">
                                </div>
                                <div class="useLink">
                                    <ul class="list-unstyled">
                                        @foreach ($merchants_offset_1['data'] as $merchant)
                                            <li>
                                                <a href="{!! url('/merchant/' . Format::slug($merchant['name'])) !!}" title="{{ $merchant['name'] }}">{{ char_limit($merchant['name'], 20, ['exceededText' => false]) }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif


                        @if (isset($merchants_offset_2['data']))
                            <div class="col-sm-3 col-xs-12">
                                <div class="footerInfoTitle">
                                </div>
                                <div class="useLink">
                                    <ul class="list-unstyled">
                                        @foreach ($merchants_offset_2['data'] as $merchant)
                                            <li>
                                                <a href="{!! url('/merchant/' . Format::slug($merchant['name'])) !!}" title="{{ $merchant['name'] }}">{{ char_limit($merchant['name'], 20, ['exceededText' => false]) }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif


                        @if (isset($merchants_offset_3['data']))
                            <div class="col-sm-3 col-xs-12">
                                <div class="footerInfoTitle">
                                </div>
                                <div class="useLink">
                                    <ul class="list-unstyled">
                                        @foreach ($merchants_offset_3['data'] as $merchant)
                                            <li>
                                                <a href="{!! url('/merchant/' . Format::slug($merchant['name'])) !!}" title="{{ $merchant['name'] }}">{{ char_limit($merchant['name'], 20, ['exceededText' => false]) }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        @include('frontendlayouts.front-bottom')
    </div>
    
@stop    