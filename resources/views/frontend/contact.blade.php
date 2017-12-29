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
                    <div>
                        <img src="{{ asset('img/custom/contact.jpg') }}" alt="Contact us">
                    </div>

                    <div class="contactInfo">
                        <ul class="list-unstyled list-address">
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                16/14 Babor Road, Mohammad pur <br> Dhaka, Bangladesh
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                +55 654 545 122 <br> +55 654 545 123
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="#">info @example.com</a> <a href="#">info@startravelbangladesh.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-xs-12">
                    <div class="signUpFormArea">
                        <div class="priceTableTitle">
                            <h2>Get inTouch</h2>
                            <p>Please feel free to contact us if you have queries, require more information or have any other request.</p>
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
                                                    <option value="">-- Select Subject --</option>
                                                    <option value="Subject 1">Subject 1</option>
                                                    <option value="Subject 2">Subject 2</option>
                                                    <option value="Subject 3">Subject 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="yourName" class="control-label">Your Name*</label>
                                            <input type="text" class="form-control" id="contact_name" name="contact_name" value="{{ old('contact_name') }}">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="emailAddress" class="control-label">Email Address*</label>
                                            <input type="email" class="form-control" id="contact_email" name="contact_email" value="{{ old('contact_email') }}">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="textBox" class="control-label">Text*</label>
                                            <textarea class="form-control" rows="3" id="contact_text" name="contact_text">{{ old('contact_text') }}</textarea>
                                        </div>
                                        <div class="form-group col-xs-12 mb0">
                                            <button type="submit" class="btn btn-primary">Send Now</button>
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