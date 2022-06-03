@extends('layouts.base')

@section('content')

    <!-- Start 500
    ============================================= -->
    <div class="error-page-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center content">
                    <h1>500</h1>
                    <h2>Désolé, quelque chose a mal tourné !</h2>
                    <p>
                        Une erreur est survenue. Essayez d'aller à la page d'accueil en utilisant le bouton ci-dessous.
                    </p>
                    <a class="btn btn-dark effect btn-md" href="{{ route('home') }}">Retour à l'accueil</a>
                    <a class="btn btn-dark border btn-md" href="{{ route('contact.page') }}">Contactez-nous</a>
                    <ul>
                        <li class="facebook">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="twitter">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="linkedin">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End 500 -->

@endsection