@extends('frontendlayouts.front-master')

@section('front-content')

    <div class="main-wrapper">
        @include('frontendlayouts.front-top')
        <section class="clearfix pageTitleSection bg-image" style="background-image: url({{ asset('img/background/bg-page-title.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pageTitle">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <section class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    
                </div>
                <div class="col-sm-8 col-xs-12">
                    <div class="signUpFormArea">
                        <div class="priceTableTitle">
                            <h2>Kontakt</h2>
                            <p>Lasst uns wissen, was wir besser machen können und schreibt uns eine Nachricht.</p>
                        </div>
                        <div class="signUpForm">
                            <form method="POST" action="{!! url('/contact') !!}" id="contactForm">
                                {!! csrf_field() !!}
                                <div class="formSection">
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="selectSome" class="control-label" id="contact_subject">Subject*</label>
                                            <div class="contactSelect">
                                                <select name="contact_subject" class="select-drop" style="display: none;">
                                                    <option value="">-- Betreff Wählen --</option>
                                                    <option value="Subject 1">Meine Bestellung</option>
                                                    <option value="Subject 2">Mein Klub</option>
                                                    <option value="Subject 3">Mein Account</option>
                                                    <option value="Subject 4">Verbesserungsvorschlag</option>
                                                    <option value="Subject 5">Etwas anderes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="yourName" class="control-label">Name*</label>
                                            <input type="text" class="form-control" id="contact_name" name="contact_name" value="{{ old('contact_name') }}">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="emailAddress" class="control-label">E-Mail-Adresse*</label>
                                            <input type="email" class="form-control" id="contact_email" name="contact_email" value="{{ old('contact_email') }}">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="textBox" class="control-label">Nachricht*</label>
                                            <textarea class="form-control" rows="3" id="contact_text" name="contact_text">{{ old('contact_text') }}</textarea>
                                        </div>
                                        <div class="form-group col-xs-12 mb0">
                                            <button type="submit" class="btn btn-primary">Absenden</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    @include('frontendlayouts.front-bottom')

@stop
