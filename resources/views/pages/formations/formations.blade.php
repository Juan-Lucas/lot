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


    <!-- Start Breadcrumb
                        ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image: url({{ asset('/assets/img/banner/24.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Nos formations</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Accueil</a></li>
                        <li><a href="{{ route('formations.list') }}">/</a></li>
                        <li class="active">Nos formations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Popular Courses
                        ============================================= -->
    <div class="popular-courses default-padding bottom-less without-carousel">
        <div class="container">
            <div class="row">
                <div class="popular-courses-items">

                    @forelse ($formations as $formation)
                        <!-- Single Item -->

                        <div class="col-md-4 col-sm-6 equal-height">
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
                        </div>

                        <!-- End Single Item -->

                    @empty

                        No data yet.
                    @endforelse

                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->
@endsection
