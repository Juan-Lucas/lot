<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememine.net/themeforest/examin/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 May 2020 13:10:08 GMT -->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Examin - Education and LMS Template">

    <!-- ========== Page Title ========== -->
    <title>Leader Of Tomorrow - Education</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('/assets/js/html5/html5shiv.min.js') }}"></script>
      <script src="{{ asset('/assets/js/html5/respond.min.js') }}"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

<!-- Preloader Start -->
<div class="se-pre-con"></div>
<!-- Preloader Ends -->

<!-- Start Header Top
============================================= -->
<div class="top-bar-area address-two-lines bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 address-info">
                <div class="info box">
                    <ul>
                        <li>
                            <span><i class="fas fa-map"></i> Adresse</span>750, av Kasangulu
                        </li>
                        <li>
                            <span><i class="fas fa-envelope-open"></i> Email</span>contact@leadersoftomorrow-drc.com
                        </li>
                        <li>
                            <span><i class="fas fa-phone"></i> Contact</span>+243 970 182 255
                        </li>
                    </ul>
                </div>
            </div>
            <div class="user-login text-right col-md-4">
                <a href="{{ route('members.form') }}"><i class="fas fa-edit"></i> S'enregistrer</a>
                @if(session()->has('member_loggedIn'))
                    <a href="{{ route('members.logout') }}"><i class="fas fa-user"></i> Déconnexion</a>
                @else
                    <a href="{{ route('members.login.form') }}"><i class="fas fa-user"></i> Connexion</a>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                   @if(session()->has('member_loggedIn'))
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    @else
                        <li class=""><a href="#"><i class="fa fa-bars"></i></a></li>
                    @endif
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('/assets/img/183×50.png') }}" width="183px" height="50px" class="logo" alt="Logo">
                    <h4>Leaders Of Tomorrow</h4>
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->

            @include('includes.navbar')


        </div>

        @include('includes.sidebar')

        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->