@extends('layouts.base')


@section('content')


{{--    <!-- Start Breadcrumb--}}
{{--                                            ============================================= -->--}}
{{--    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"--}}
{{--         style="background-image: url({{ asset('/assets/img/banner/24.jpg') }});">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <h1>Se Connecter</h1>--}}
{{--                    <ul class="breadcrumb">--}}
{{--                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Accueil</a></li>--}}
{{--                        <li><a href="{{ route('members.login.form') }}">/</a></li>--}}
{{--                        <li class="active">Se Connecter</li>--}}
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
                <div class="col-md-7 col-md-offset-3">
                    @if(session()->has('registred'))

                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">{{ session('registred') }}!</h4>
                            <p>Merci d'avoir pris la décision de faire bouger les choses dans votre vie afin de contruire votre futur.</p>
                            <hr>
                            <p class="mb-0">Vous avez pris la bonne décision. Connectez-vous a votre compte et formez-vous.</p>
                        </div>

                    @endif
                    <form method="post" action="{{ route('members.login') }}" id="login-form" class="white-popup-block">

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
                            <h4>CONNECTEZ-VOUS À VOTRE COMPTE</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="username">Nom d'utilisateur</label>
                                        <input class="form-control" name="username" id="username" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="password">Mot de passe</label>
                                        <input class="form-control" name="password" type="password" id="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        Se connecter
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Vous n'etes pas encore membre ? <a href="{{ route('members.form') }}">Enregistrez-vous</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->

@endsection
