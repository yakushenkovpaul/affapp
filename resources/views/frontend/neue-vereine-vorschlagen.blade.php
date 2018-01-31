@extends('frontendlayouts.front-master')

@section('front-content')

    <div class="main-wrapper">
    @include('frontendlayouts.front-top')

    <section class="clearfix bg-dark listingSection">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!--<form enctype="multipart/form-data" method="POST" action="{!! url('/neue-vereine-vorschlagen') !!}" class="listing__form" id="addClubForm">-->
                        {!! Form::open(['files' => true, 'url' => url('/neue-vereine-vorschlagen'), 'class' => 'listing__form', 'id' => 'addClubForm']) !!}
                        {!! csrf_field() !!}
                        @include('partials.errors')
                        <div class="dashboardPageTitle text-center">
                            <h2>Neuen Verein vorschlagen</h2>
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>Beschreibung</h3>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingTitle">Name des Vereins</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="listingCategory">Kategorie</label>
                                        <div class="contactSelect">
                                            <select name="category" id="category" class="select-drop">
                                                <option value="Alle Kategorien">Alle Kategorien</option>
                                                <option value="Sport">Sport</option>
                                                <option value="Tierschutz">Tierschutz</option>
                                                <option value="Kinderorganisation">Kinderorganisation</option>
                                                <option value="Anderes">Anderes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label for="discribeTheListing">Beschreibung des Vereins</label>
                                        <textarea class="form-control" rows="3" placeholder="Beschreibung" id="description" name="description">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>Kontakt</h3>
                                <div class="row">
                                    <div class="form-group col-sm-12 col-xs-12">
                                        <label for="listingAddress">Adresse</label>
                                        <input type="text" id="address" name="address" class="form-control" placeholder="z.B. Wrangelstraße 98, 10997 Berlin" value="{{ old('address') }}">
                                    </div>
                                    <div class="form-group col-sm-6 col-sm-push-6 col-xs-12">
                                        <div class="mapArea">
                                            <div class="clearfix">
                                                <div id="map" style="height: 290px; margin-bottom:20px;"></div>
                                                <span class="help-block">Füge  genaue Adresse des Vereins oben ein, um Karte zu aktualisieren</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                                        <label for="listingPhone">Telefonnummer</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="+49 30 123456789" value="{{ old('phone') }}">
                                    </div>
                                    <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                                        <label for="listingEmail">Kontakt Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="kontakt@meinverein.de" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                                        <label for="listingWebsite">Vereinsseite</label>
                                        <input type="text" class="form-control" id="url" name="url" placeholder="http://" value="{{ old('url') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>Bilder</h3>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <div class="imageUploader text-center">
                                            <div class="file-upload">
                                                <div class="upload-area">
                                                    <input type="file" name="image" id="image" class="file">
                                                    <button class="browse" type="button">KLicke hier oder Ziehe die bilder auf die fläche</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboardBoxBg mb30">
                            <div class="profileIntro paraMargin">
                                <h3>Social Media</h3>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="facebookUrl">Facebook URL</label>
                                        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="http://facebook.com/club" value="{{ old('facebook') }}">
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="facebookUrl">Instagram URL</label>
                                        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="http://instagram.com/club" value="{{ old('instagram') }}">
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="twitterUrl">Twitter URL</label>
                                        <input type="text" class="form-control" id="twitter" name="twitter" placeholder="http://twitter.com/club" value="{{ old('twitter') }}">
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="youtubeUrl">You Tube URL</label>
                                        <input type="text" class="form-control" id="youtube" name="youtube" placeholder="http://youtube.com/club" value="{{ old('youtube') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center">
                            <button type="submit" class="btn-submit">Verein vorschlagen</button>
                        </div>
                    <!--</form>-->
                    {!! Form::close() !!}
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
