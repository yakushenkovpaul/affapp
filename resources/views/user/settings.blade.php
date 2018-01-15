@extends('userlayouts.user-master')

@section('user-content')

    <div class="main-wrapper">
        <!-- HEADER -->
    @include('userlayouts.user-top')
    <!-- SETTINGS SECTION -->
        <section class="clearfix bg-dark listingSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="dashboardBoxBg mb30">
                            <div class="profileImage">
                                <img src="img/dashboard/avatar-t1-7.png" alt="Image User" class="img-circle">
                                    <div class="file-upload profileImageUpload">
                                        <div class="upload-area">
                                            <input type="file" name="img[]" class="file">
                                                <button class="browse" type="button">Profilbild ändern 
                                                    <i class="fa fa-pencil-square-o icon-dash" aria-hidden="true"></i>
                                                </button>
                                        </div>
                                    </div>
                            </div>
                            <div class="profileUserInfo bt profileName">
                                <h2>John Doe</h2>
                                <h5>Nutzer seit: <span>15/01/2017</span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <form method="POST" action="/user/settings">
                            {!! csrf_field() !!}
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
                                            @input_maker_label('Email')
                                            @input_maker_create('email', ['type' => 'string'], $user)
                                        </div>
                                        <div class="form-group col-xs-12">
                                            @input_maker_label('Name')
                                            @input_maker_create('name', ['type' => 'string'], $user)
                                        </div>

                                        @include('user.meta')

                                        <div class="form-group col-xs-12">
                                            @input_maker_label('Role')
                                            @input_maker_create('roles', ['type' => 'relationship', 'model' => 'App\Models\Role', 'label' => 'label', 'value' => 'name'], $user)
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-footer text-center btn-area">
                                <a class="btn btn-primary pull-left" href="{{ URL::previous() }}">Cancel</a>
                                <!--<a class="btn btn-primary center-block" href="/user/password">Change Password</a>-->
                                <button class="btn btn-primary pull-right" type="submit">Update</button>
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
