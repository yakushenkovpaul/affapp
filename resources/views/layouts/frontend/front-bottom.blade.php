<footer style="background-image: url({{ asset('img/background/bg-footer-3.jpg') }});">
    <!-- FOOTER INFO -->
    <div class="clearfix footerInfo">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <div class="footerText">
                        <a href="{!! url('/') !!}" class="footerLogo">
                            <img src="{{ asset('img/logo-footer.png') }}" alt="Footer Logo">
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="footerInfoTitle">
                        <h4>Information</h4>
                    </div>
                    <div class="useLink">
                        <ul class="list-unstyled">
                            <li>
                                <a href="{!! url('/cashback') !!}">Was ist Cashback?</a>
                            </li>
                            <li>
                                <a href="{!! url('/neue-vereine-vorschlagen') !!}">Neue Vereine vorschlagen</a>
                            </li>
                            <li>
                                <a href="{!! url('/freunde-einladen') !!}">Freunde einladen</a>
                            </li>
                            <li>
                                <a href="#">donatIQ für Browser</a>
                            </li>
                            <li>
                                <a href="{!! url('/contact') !!}">Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @if (isset($merchantsTop['data']))
                <div class="col-sm-2 col-xs-12">
                    <div class="footerInfoTitle">
                        <h4>Top shops</h4>
                    </div>
                    <div class="useLink">
                        <ul class="list-unstyled">
                            @foreach ($merchantsTop['data'] as $merchant)
                            <li>
                                <a href="{!! url('/merchant/' . $merchant['id'] . '/' . Format::slug($merchant['name'])) !!}"  title="{{ $merchant['name'] }} link">{{ $merchant['name'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                <div class="col-sm-2 col-xs-12">
                    <div class="footerInfoTitle">
                        <h4>Unternehmen</h4>
                    </div>
                    <div class="useLink">
                        <ul class="list-unstyled">
                            <li>
                                <a href="{!! url('/about') !!}">Über uns</a>
                            </li>
                            <li>
                                <a href="{!! url('/datenschutz') !!}">Datenschutz</a>
                            </li>
                            <li>
                                <a href="{!! url('/agb') !!}">AGB</a>
                            </li>
                            <li>
                                <a href="pricing-table.html">Datenschutzerklärung</a>
                            </li>
                            <li>
                                <a href="{!! url('/impressum') !!}">Impressum</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COPY RIGHT -->
    <div class="clearfix copyRight">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyRightWrapper">
                        <div class="row">
                            <div class="col-sm-5 col-sm-push-7 col-xs-12">
                                <ul class="list-inline socialLink">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-7 col-sm-pull-5 col-xs-12">
                                <div class="copyRightText">
                                    <p>Copyright © 2017.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
