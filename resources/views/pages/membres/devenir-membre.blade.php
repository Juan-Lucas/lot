@extends('layouts.base')


@section('content')

{{--    <!-- Start Breadcrumb--}}
{{--                                            ============================================= -->--}}
{{--    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"--}}
{{--         style="background-image: url({{ asset('/assets/img/banner/24.jpg') }});">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <h1>Devenir membre</h1>--}}
{{--                    <ul class="breadcrumb">--}}
{{--                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Accueil</a></li>--}}
{{--                        <li><a href="{{ route('members.form') }}">/</a></li>--}}
{{--                        <li class="active">Devenir membre</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End Breadcrumb -->--}}

    <!-- Start Login
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <form method="post" action="{{ route('members.register') }}" id="register-form" class="white-popup-block">

                        @csrf

                        <div class="col-md-4 login-social">
                            <h4>Suivez-nous sur</h4>
                            <ul>
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8 login-custom">
                            <h4>Faites partie des Leaders, en devenant membre.</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="nomcomplet">Nom complet</label>
                                        <input class="form-control" name="nomcomplet" id="nomcomplet" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Addresse email</label>
                                        <input class="form-control" name="email" id="email" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="profession">Profession</label>
                                        <input class="form-control" name="profession" type="text" id="profession">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="age">Age</label>
                                        <input class="form-control" name="age" type="number" id="age">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Nom d'utilisateur</label>
                                        <input class="form-control" name="username" id="username" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sexe">Sexe</label>
                                        <select class="form-control" name="sexe" id="sexe">
                                            <option value="">---------- Sélectionner votre genre ----------</option>
                                            <option value="Homme">Homme</option>
                                            <option value="Femme">Femme</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="password">Mot de passe</label>
                                        <input class="form-control" name="password" type="password" id="password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="confirm_password">Confirmer mot de passe</label>
                                        <input class="form-control" name="confirm_password" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        S'enregister
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Etes-vous deja membre ? <a href="{{ route('members.login.form') }}">Connectez-vous</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->

@endsection
