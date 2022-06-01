@extends('layouts.base')


@section('content')

{{--    <!-- Start Breadcrumb--}}
{{--                        ============================================= -->--}}
{{--    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"--}}
{{--         style="background-image: url({{ asset('/assets/img/banner/24.jpg') }});">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <h1>{{ $formation->title }}</h1>--}}
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

    <!-- Start Course Details
    ============================================= -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="course-details-info">
                        <!-- Star Top Info -->
                        <div class="top-info">
                            <!-- Title-->
                            <div class="title">
                                <h2>{{ $formation->title }}</h2>
                            </div>
                            <!-- End Title-->

                            <!-- Thumbnail -->
                            <div class="thumb">
                                <img src="{{ asset('storage/'.$formation->image) }}" alt="Thumb">
                            </div>
                            <!-- End Thumbnail -->

                            <!-- Course Meta -->
                            <div class="course-meta">
                                <div class="item category">
                                    <h4>Categorie</h4>
                                    <a href="{{ route('formations.show', $formation) }}">{{ $formation->category_formation->name }}</a>
                                </div>
                                <div class="item rating">
                                    <h4>DUREE</h4>
                                    <span>{{ $formation->duration }} h </span>
                                </div>
                                <div class="item price">
                                    <h4>Date</h4>
                                    <span>{{ date_format($formation->created_at,"d - m - Y") }}</span>
                                </div>
                                <div class="align-right">
                                    <a class="btn btn-dark effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> S'inscrire
                                    </a>
                                </div>
                            </div>
                            <!-- End Course Meta -->
                        </div>
                        <!-- End Top Info -->

                        <!-- Star Tab Info -->
                        <div class="tab-info">

                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <h4>Description de la formation</h4>

                                        <p>{!! $formation->description !!} </p>

                                    </div>
                                </div>
                                <!-- End Single Tab -->
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <aside>
                            <!-- Sidebar Item -->
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>Categories de formations</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        @forelse($categories as $category)
                                        <li>
                                            <a href="#">{{ $category->name }}<span>{{ count($category->formations)  }}</span></a>
                                        </li>
                                        @empty
                                            Not data yet.
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->

                            <!-- Sidebar Item -->
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Nos formations</h4>
                                </div>

                                @forelse($formations as $formation)

                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="{{ asset('storage/'.$formation->image) }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a href="{{ route('formations.show', $formation) }}">{{ $formation->title }}</a>
                                            </h5>
                                            <div class="rating">
                                                <span>{{ $formation->duration }} h</span>
                                            </div>
{{--                                            <div class="meta">--}}
{{--                                                <i class="fas fa-grid"></i><a href="#">{{ $formation->category_formation->name }}</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    No data yet.
                                @endforelse
                            </div>
                            <!-- End Sidebar Item -->

                        </aside>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Course Details -->


@endsection