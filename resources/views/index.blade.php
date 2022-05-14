@extends('layouts.base')


@section('content')
    <!-- Start Header Top
                                        ============================================= -->
    <div class="top-bar-area address-one-lines bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map"></i>
                                750, av Kasangulu
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                contact@leadersoftomorrow-drc.com
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                +243 970 182 255
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-login text-right col-md-4">
                    <a class="popup-with-form" href="#register-form">
                        <i class="fas fa-edit"></i> Devenez membre
                    </a>
                    <a class="popup-with-form" href="#login-form">
                        <i class="fas fa-user"></i> Connexion
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
                                        ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('/assets/img/logo.png') }}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->

                @include('includes.navbar')

            </div>

            <!-- Start Side Menu -->

            @include('includes.sidebar')

            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Login Form
                                        ============================================= -->

    <!-- End Login Form -->

    @include('partials.login')

    <!-- Start Register Form
                                        ============================================= -->

    @include('partials.register')

    <!-- End Register Form -->

    <!-- Start Banner
                                        ============================================= -->
    <div class="banner-area content-top-heading text-normal heading-weight-600">
        <div id="bootcarousel" class="carousel slide animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light">
                <div class="item active">
                    <div class="box-table bg-fixed shadow dark" style="background-image: url(assets/img/banner/24.jpg);">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated fadeInUp">Leaders of tomorrow, les jeunes
                                                <span>créateurs</span> et l’entrepreneurs.
                                            </h1>
                                            <p data-animation="animated fadeInUp">
                                                Leaders of tomorrow est une organisation sans but lucratif qui encourage les
                                                jeunes congolais à relever les défis les plus pressants de leurs générations
                                                (agriculture, énergie, santé etc.) à travers l’entreprenariat et la
                                                technologie.
                                            </p>
                                            <a data-animation="animated fadeInDown"
                                                class="btn circle btn-light effect btn-md"
                                                href="{{ route('formations.list') }}">Nos formations</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our Features Latest Post
                                        ============================================= -->
    <div class="our-featues-area inc-trending-courses about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 our-feature-items">
                    <div class="row">

                        <div class="col-md-12 less-bar info">
                            <h5>Introduction</h5>
                            <h2>Bienvenue sur notre plateforme de formations en ligne.
                            </h2>
                            <p>
                                Leaders of tomorrow est une organisation sans but lucratif qui encourage les jeunes
                                congolais à
                                relever les défis les plus pressants de leurs générations (agriculture, énergie, santé etc.)
                                à
                                travers l’entreprenariat et la technologie.

                            </p>
                            <p>
                                LEADERS OF TOMORROW vise à soutenir et à promouvoir les innovations technologiques et
                                entrepreneuriales afin d’identifier, de développer et de diffuser largement les solutions
                                pratiques « Made in Congo ».
                            </p>
                            <p>
                                Notre association a pour ambition de formé plus de 10.000 jeunes dans le haut Katanga et
                                plus de 100.000 sur l’étendu national en leurs donnant des formations théoriques et
                                pratiques de qualité gratuitement.
                            </p>
                        </div>

                        <!-- Start Fatures -->
                        <div class="our-features">
                            <div class="col-md-6 col-sm-6">
                                <div class="item mariner">
                                    <div class="icon">
                                        <i class="flaticon-faculty-shield"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Les conférences en ligne et en présentiel</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="item java">
                                    <div class="icon">
                                        <i class="flaticon-book-2"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Coaching</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="item malachite">
                                    <div class="icon">
                                        <i class="flaticon-education"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Des formations dans plusieurs domaines </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="item brilliantrose">
                                    <div class="icon">
                                        <i class="flaticon-university-campus"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Etude de projet </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Our Features -->

                <!-- End Home Sidebar -->
                <div class="col-md-4 home-sidebar">
                    <!-- Start Latest Post -->
                    <div class="sidebar-item latest-posts trending-courses-box">
                        <h4>Formations récentes</h4>
                        <div class="trending-courses-items">

                            @forelse ($courses as $course)
                                <div class="item">
                                    <h4>
                                        <a href="{{ route('formations.show', $course) }}">{{ $course->title }}</a>
                                    </h4>
                                    <div class="meta">
                                        <i class="fas fa-user"></i> Durée <a href="#">{{ $course->duration }}</a>
                                        <span><i
                                                class="fas fa-clock"></i>{{ date_format($course->created_at, 'd - m - Y') }}</span>
                                    </div>
                                </div>
                            @empty
                                No data yet.
                            @endforelse

                            <a href="{{ route('formations.list') }}" class="more">Voir plus <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <!-- End Latest Posts -->
                </div>
                <!-- End Home Sidebar -->

            </div>
        </div>
    </div>
    <!-- End Our Features & Latest Post -->

    <!-- Start Popular Courses
                                        ============================================= -->
    <div class="popular-courses bg-gray circle carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Nos formations populaires</h2>
                        <p>
                            Révolutionner l’accès a l’éducation, a l’accompagnement et au financement, en construisant un
                            écosystème entrepreneurial solide ou les jeunes congolais peuvent prospérer et développer des
                            entreprises hors commun.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="popular-courses-items bottom-price popular-courses-carousel owl-carousel owl-theme">

                        @forelse ($formations as $formation)
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ asset('storage/'.$formation->image) }}" alt="Thumb">
                                    </a>
                                    <div class="overlay">
                                        <a class="btn btn-theme effect btn-sm" href="#">
                                            <i class="fas fa-chart-bar"></i> Inscrivez-vous maintenant
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <h4><a href="#">{{ $formation->title }}</a></h4>
                                    <div class="cats">
                                        <a href="#">{{ $formation->category_formation->name }}</a>
                                    </div>
                                    <p>
                                        {{ substr($formation->description, 0, 150) }}.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        @empty

                            Not data yet.
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->

    <!-- Start Top Categories
                                        ============================================= -->
    <div id="top-categories" class="top-cat-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Les categories de nos formations</h2>
                        <p>
                            Permettre l’émergence d’une nouvelle génération congolaise en mesure de relever le défi de la
                            dignité humaine dans le pays et au-delà.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="top-cat-items">

                    @forelse ($categories as $category)
                        <div class="col-md-3 col-sm-6 equal-height">
                            <div class="item" style="background-image: url({{ asset('/assets/img/category/1.jpg') }});">
                                <a href="#">
                                    <i class="flaticon-feature"></i>
                                    <div class="info">
                                        <h4>{{ $category->name }}</h4>
                                        <span>(1,226) formations</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @empty
                        Not data yet.
                    @endforelse


                </div>
            </div>
        </div>
    </div>
    <!-- End Top Categories -->

    <!-- Start Advisor Area
                                                                        ============================================= -->
    <section id="advisor" class="advisor-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Rencontrez notre équipe</h2>
                        <p>
                            Motiver les jeunes à l’esprit d’entreprendre tôt développe l’autonomie, l’engagement, la prise
                            d’initiative et des décisions, le gout du risque des jeunes…autant de valeurs qui enrichissent
                            leurs compétences et leurs réflexions quant à leurs orientations.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="advisor-carousel owl-carousel owl-theme text-center text-light">

                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="{{ asset('assets/img/team/patient.jpg') }}" alt="Thumb">
                                <div class="info-title">
                                    <h4>Patient Mbuya</h4>
                                    <span>Directeur général</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <div class="social">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="{{ asset('assets/img/team/guelord.jpg') }}" alt="Thumb">
                                <div class="info-title">
                                    <h4>Guelord Mahemba</h4>
                                    <span>Directeur du personnel</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">

                                                <div class="social">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="{{ asset('assets/img/team/irma.jpg') }}" alt="Thumb">
                                <div class="info-title">
                                    <h4>Irma Monga</h4>
                                    <span>Directrice de collecte de fonds</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">

                                                <div class="social">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="{{ asset('assets/img/team/anniece.jpg') }}" alt="Thumb">
                                <div class="info-title">
                                    <h4>Anniece Makoumbo</h4>
                                    <span>Membre d'honneur</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">

                                                <div class="social">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="{{ asset('assets/img/team/hermine.jpg') }}" alt="Thumb">
                                <div class="info-title">
                                    <h4>Hermine Tabeth</h4>
                                    <span>Membre d'honneur</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">

                                                <div class="social">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Advisor Area -->
@endsection
