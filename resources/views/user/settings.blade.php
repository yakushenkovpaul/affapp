@extends('userlayouts.user-master')

@section('user-content')

    <div class="main-wrapper">
    <!-- HEADER -->
    @include('userlayouts.user-top')
    <!-- SETTINGS SECTION -->

        <section class="clearfix bg-dark listingSection">
            <div class="container">
                <div class="row">
                    <form method="POST" action="/user/settings">
                        {!! csrf_field() !!}
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="dashboardBoxBg mb30">
                                <div class="profileImage center-block">
                                    <select name="meta[avatar]" id="avatarmenu">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($user->meta['avatar'] == $i)
                                                <option selected="selected" value="{{ $i }}" title="{{ asset('img/dashboard/' . $user->meta['gender'] . '/' . $i . '.png') }}"></option>
                                            @else
                                                <option value="{{ $i }}" title="{{ asset('img/dashboard/' . $user->meta['gender'] . '/' . $i . '.png') }}"></option>
                                            @endif
                                        @endfor
                                    </select>
                                </div>
                                <div class="profileUserInfo bt profileName">
                                    <h2>{{ $user['name'] }} {{ $user->meta['lastname'] }}</h2>
                                    <h5>Nutzer seit: <span>{{ $user->meta['created_at']->format('d/m/Y') }}</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                                <div class="dashboardBoxBg">
                                        <div class="profileIntro">
                                            <h2>Dein Profil</h2>
                                            <p>Hier kannst Du Deine persönliche Profileinstellugen vornemhmen.</p>
                                        </div>
                                    </div>
                                <div class="dashboardBoxBg mb30">
                                    <div class="profileIntro paraMargin">
                                    <h3>Benutzerdaten</h3>
                                        <div class="row">
                                        <div class="form-group col-xs-12">
                                                @input_maker_label('Anrede')
                                                @input_maker_create('meta[gender]', ['type' => 'select', 'label' => 'gender', 'options' => [ 'Herr' => 'male', 'Frau' => 'female' ]], $user)
                                        </div>
                                        <div class="form-group col-xs-12">
                                                @input_maker_label('Name')
                                                @input_maker_create('name', ['type' => 'string'], $user)
                                            </div>
                                        <div class="form-group col-xs-12">
                                                @input_maker_label('Nachname')
                                                @input_maker_create('meta[lastname]', ['type' => 'string'], $user)
                                        </div>
                                        <div class="form-group col-xs-12">
                                                @input_maker_label('Email')
                                                @input_maker_create('email', ['type' => 'string'], $user)
                                            </div>

                                         <div class="form-group col-xs-12">
                                                @input_maker_label('Stadt')
                                                @input_maker_create('meta[city]', ['type' => 'string'], $user)
                                         </div>

                                         <div class="form-group col-xs-12">
                                                @input_maker_label('Geburtstag')
                                                @input_maker_create('meta[birthday]', ['type' => 'string' , 'class' => 'datepicker'], $user)
                                         </div>

                                            <!--
                                         <div class="raw-margin-top-24">
                                                <label for="Birthday">Birthday</label>
                                                <input id="Meta[birthday]" class="form-control" type="text" name="meta[birthday]" value="09/06/1984" placeholder="Meta birthday">
                                         </div>
                                            -->

                                         <div class="form-group col-xs-12">
                                                @input_maker_label('Activate')
                                                <input type="checkbox" name="meta[is_active]" value="1" @if ($user->meta->is_active) checked @endif>
                                         </div>

                                        </div>
                                    </div>
                                </div>
                                <!--<div class="dashboardBoxBg mt30">
                                    <div class="profileIntro">
                                        <h3>Passwort ändern</h3>
                                            <div class="row">
                                                <div class="form-group col-xs-12">
                                                    <label for="currentPassword">Aktuelles Passwort</label>
                                                    <input type="password" class="form-control" id="currentPassword" placeholder="********">
                                                </div>
                                                <div class="form-group col-xs-12">
                                                    <label for="newPassword">Neues Passwort</label>
                                                    <input type="password" class="form-control" id="newPassword" placeholder="Neues Passwort">
                                                </div>
                                                <div class="form-group col-xs-12">
                                                    <label for="confirmPassword">Passwort bestätigen</label>
                                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Passwort bestätigen">
                                                </div>
                                            </div>
                                      </div>
                                   </div> -->
                                <div class="form-footer text-center btn-area">
                                    <a class="btn btn-primary pull-left" href="{{ URL::previous() }}">Abbrechen</a>
                                    <!--<a class="btn btn-primary center-block" href="/user/password">Passwort ändern</a>-->
                                    <button class="btn btn-primary pull-right" type="submit">Speichern</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        @include('frontendlayouts.front-bottom')
    </div>

@stop
