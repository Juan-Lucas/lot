@extends('layouts.base')


@section('content')
    
    <!-- Start Breadcrumb
                                                        ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image: url({{ asset('/assets/img/banner/24.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contactez-nous</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Accueil</a></li>
                        <li><a href="{{ route('contact.page') }}">/</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Info
                        ============================================= -->
    <div class="contact-info-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Contact Info -->
                <div class="contact-info">
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="info">
                                <h4>Joignez-nous</h4>
                                <span>+243 970 182 255</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info">
                                <h4>Retrouvez-nous</h4>
                                <span>750, av Kasangulu</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info">
                                <h4>Ecrivez-nous</h4>
                                <span>contact@leadersoftomorrow-drc.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Info -->

                <div class="seperator col-md-12">
                    <span class="border"></span>
                </div>

                <!-- Start Maps & Contact Form -->
                <div class="maps-form">
                    <div class="col-md-6 maps">
                        <div class="col-md-12 thumb">
                            <img src="{{ asset('/assets/img/about.jpg') }}" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-md-6 form">
                        <div class="heading">
                            <h3>Contactez-nous</h3>
                            <p>
                                Contactez-nous dès maintenant, c'est vous que nous attendons.
                                Disponible 24/ 7. Appelez dès maintenant.
                            </p>
                        </div>
                        <form method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Nom complet : </label>
                                        <input class="form-control" id="name" name="name"  type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Adresse mail : </label>
                                        <input class="form-control" id="email" name="email"
                                            type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Téléphone : </label>
                                        <input class="form-control" id="phone" name="phone"
                                            type="tel">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <label>Message : </label>
                                        <textarea class="form-control" id="messae" name="message" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Envoyer votre message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Maps & Contact Form -->

            </div>
        </div>
    </div>
    <!-- End Contact Info -->
@endsection
