@extends('layouts.base')


@section('content')

{{--    <!-- Start Breadcrumb--}}
{{--                        ============================================= -->--}}
{{--    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"--}}
{{--        style="background-image: url({{ asset('/assets/img/banner/24.jpg') }});">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <h1>Nos formations</h1>--}}
{{--                    <ul class="breadcrumb">--}}
{{--                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Accueil</a></li>--}}
{{--                        <li><a href="{{ route('formations.list') }}">/</a></li>--}}
{{--                        <li class="active">Nos formations</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End Breadcrumb -->--}}

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
                                    <a href="{{ route('formations.show', $formation) }}">
                                        <img src="{{ asset('storage/'.$formation->image) }}" alt="Thumb">
                                    </a>
                                    <div class="overlay">
                                        <a class="btn btn-theme effect btn-sm" href="#">
                                            <i class="fas fa-chart-bar"></i> Inscrivez-vous maintenant
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <h4><a href="{{ route('formations.show', $formation) }}">{{ $formation->title }}</a></h4>
                                    <div class="cats">
                                        <a href="{{ route('formations.show', $formation) }}">{{ $formation->category_formation->name }}</a>
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
