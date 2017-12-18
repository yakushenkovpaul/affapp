@extends('frontendlayouts.front-master')

@section('front-content')

    <div class="main-wrapper">
    @include('frontendlayouts.front-top')

        <section class="clearfix pageTitleSection">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pageTitle">
                            <h2>how it works</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="clearfix howWorksSection">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="howWorksInner">
                            <div class="row">
                                <div class="col-sm-4 col-sm-push-8 col-xs-12">
                                    <div class="howWorksImage text-right"><img src="{{ asset('img/works/works-big-1.png') }}" alt="Image Works"></div>
                                </div>
                                <div class="col-sm-8 col-sm-pull-4 col-xs-12">
                                    <div class="howWorksInfo text-left">
                                        <p>Step 1</p>
                                        <h3>Find what you want</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="howWorksInner">
                            <div class="row">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="howWorksImage text-left"><img src="{{ asset('img/works/works-big-2.png') }}" alt="Image Works"></div>
                                </div>
                                <div class="col-sm-8 col-xs-12">
                                    <div class="howWorksInfo text-right">
                                        <p>Step 2</p>
                                        <h3>Review &amp; Plan your day</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="howWorksInner">
                            <div class="row">
                                <div class="col-sm-4 col-sm-push-8 col-xs-12">
                                    <div class="howWorksImage text-right"><img src="{{ asset('img/works/works-big-3.png') }}" alt="Image Works"></div>
                                </div>
                                <div class="col-sm-8 col-sm-pull-4 col-xs-12">
                                    <div class="howWorksInfo text-left">
                                        <p>Step 3</p>
                                        <h3>Explore Location</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

@stop