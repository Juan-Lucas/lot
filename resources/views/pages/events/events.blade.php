@extends('layouts.base')


@section('content')

    <!-- Start Breadcrumb ============================================= -->
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
    <!-- End Breadcrumb -->

<!-- Start Event
============================================= -->
<section id="event" class="event-area heading-less carousel-shadow bg-gray single-view default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="event-items event-carousel owl-carousel owl-theme">

                    @forelse($events as $event)

                        <!-- Single Item -->
                        <div class="item vertical">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('storage/'.$event->image) }}" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>{{ date_format($event->created_at, 'd') }}</span> {{ DateTime::createFromFormat('!m',date_format($event->created_at, 'm'))->format('F')  }}, {{ date_format($event->created_at, 'Y') }}</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">{{ $event->title }}</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><i class="fas fa-clock"></i>  {{ $event->heure }} h</li>
                                        <li><i class="fas fa-map"></i> {{ $event->localisation }} </li>
                                    </ul>
                                </div>
                                <p>
                                    {{ $event->description }}
                                </p>
                                <a href="#" class="btn btn-dark effect btn-xsm">
                                    <i class="fas fa-chart-bar"></i> Je serai là
                                </a>
                                <a href="#" class="btn btn-gray btn-xsm">
                                    <i class="fas fa-ticket-alt"></i>Places Illimitées
                                </a>
                            </div>
                        </div>
                        <!-- Single Item -->

                    @empty

                        No data yet.

                    @endforelse

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Event -->

@endsection