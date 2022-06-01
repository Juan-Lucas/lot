@extends('layouts.base')


@section('content')

{{--    <!-- Start Breadcrumb ============================================= -->--}}
{{--    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"--}}
{{--         style="background-image: url({{ asset('/assets/img/banner/24.jpg') }});">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <h1>Nos Evénements</h1>--}}
{{--                    <ul class="breadcrumb">--}}
{{--                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Accueil</a></li>--}}
{{--                        <li><a href="{{ route('events.list') }}">/</a></li>--}}
{{--                        <li class="active">Nos Evénements</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End Breadcrumb -->--}}

<!-- Start Event
============================================= -->
<section id="event" class="event-area heading-less carousel-shadow bg-gray single-view default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="event-items event-carousel owl-carousel owl-theme">

                    <!-- Single Item -->
                    <div class="item vertical">
                        <div class="thumb">
                            <a href="#"><img src="/assets/img/event/1.jpg" alt="Thumb"></a>
                            <div class="date">
                                <h4><span>27</span> Feb, 2019</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Social Science Humanities</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-xsm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-xsm">
                                <i class="fas fa-ticket-alt"></i> 23 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item vertical">
                        <div class="thumb">
                            <a href="#"><img src="/assets/img/event/2.jpg" alt="Thumb"></a>
                            <div class="date">
                                <h4><span>12</span> Nov, 2018</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Schools United Nations</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-xsm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-xsm">
                                <i class="fas fa-ticket-alt"></i> 5 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item vertical">
                        <div class="thumb">
                            <a href="#"><img src="/assets/img/event/3.jpg" alt="Thumb"></a>
                            <div class="date">
                                <h4><span>14</span> Feb, 2019</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Actualized Leadership Network</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-xsm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-xsm">
                                <i class="fas fa-ticket-alt"></i> 34 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item vertical">
                        <div class="thumb">
                            <a href="#"><img src="/assets/img/event/4.jpg" alt="Thumb"></a>
                            <div class="date">
                                <h4><span>18</span> Dec, 2018</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Conference on Art Business</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-xsm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-xsm">
                                <i class="fas fa-ticket-alt"></i> 19 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item vertical">
                        <div class="thumb">
                            <a href="#"><img src="/assets/img/event/5.jpg" alt="Thumb"></a>
                            <div class="date">
                                <h4><span>22</span> Mar, 2019</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Digital Learning Method</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-xsm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-xsm">
                                <i class="fas fa-ticket-alt"></i> 32 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Event -->

@endsection