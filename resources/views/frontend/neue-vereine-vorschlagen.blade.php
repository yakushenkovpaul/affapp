@extends('frontendlayouts.front-master')

@section('front-content')

    <div class="main-wrapper">
    @include('frontendlayouts.front-top')

<section class="clearfix bg-dark listingSection">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form action="" method="" class="listing__form">
                    <div class="dashboardPageTitle text-center">
                        <h2>Neuen Verein vorschlagen</h2>
                    </div>
                    <div class="dashboardBoxBg mb30">
                        <div class="profileIntro paraMargin">
                            <h3>Beschreibung</h3>
                            <div class="row">
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="listingTitle">Name des Vereins</label>
                                    <input type="text" class="form-control" id="listingTitle" placeholder="Name ">
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="listingCategory">Kategorie</label>
                                    <div class="contactSelect">
                                        <select name="guiest_id9" id="guiest_id9" class="select-drop">
                                            <option value="0">Alle Kategorien</option>
                                            <option value="1">Sport</option>
                                            <option value="2">Tierschutz</option>
                                            <option value="3">Kinderorganisation</option>                                             

                                            <option value="4">Anderes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label for="discribeTheListing">Beschreibung des Vereins</label>
                                    <textarea class="form-control" rows="3" placeholder="Beschreibung"></textarea>
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
                                    <input type="text" class="form-control" id="listingAddress" placeholder="z.B. Wrangelstraße 98, 10997 Berlin">
                                </div>
                                <div class="form-group col-sm-6 col-sm-push-6 col-xs-12">
                                    <div class="mapArea">
                                        <div class="clearfix">
                                            <div id="map-canvas"></div>
                                        </div>
                                        <span class="help-block">Füge  genaue Adresse des Vereins oben ein, um Karte zu aktualisieren</span>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                                    <label for="listingPhone">Telefonnummer</label>
                                    <input type="text" class="form-control" id="listingPhone" placeholder="+49 30 123456789 ">
                                </div>
                                <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                                    <label for="listingEmail">Kontakt Email</label>
                                    <input type="text" class="form-control" id="listingEmail" placeholder="kontakt@meinverein.de">
                                </div>
                                <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                                    <label for="listingWebsite">Vereinsseite</label>
                                    <input type="text" class="form-control" id="listingWebsite" placeholder="http://">
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
                                                <input type="file" name="img[]" class="file">
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
                                    <input type="text" class="form-control" id="linkedUrl" placeholder="http://linkedin.com/listty">
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="facebookUrl">Instagram URL</label>
                                    <input type="text" class="form-control" id="facebookUrl" placeholder="http://facebook.com/listty">
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="twitterUrl">Twitter URL</label>
                                    <input type="text" class="form-control" id="twitterUrl" placeholder="http://twitter.com/listty">
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="youtubeUrl">You Tube URL</label>
                                    <input type="text" class="form-control" id="youtubeUrl" placeholder="http://youtube.com/listty">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer text-center">
                        <button type="submit" class="btn-submit">Verein vorschlagen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>       


       
        <!-- FOOTER -->
        @include('frontendlayouts.front-bottom')
    </div>

@stop
