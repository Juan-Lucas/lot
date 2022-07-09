@extends('pages.admin.layouts.app')

@section('title', "SHOW")

@section('content')

    @include('pages.admin.includes.nav-bar')

            <div class="main-content">
                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{ strtoupper($formation->title) }}</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ $formation->description }}</p>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-text">Duree : {{ $formation->duration }} heures</p>
                                            <p class="card-text">Date de creation : {{ date_format($formation->created_at, "d - m - Y") }}</p>
                                            <p class="card-text">Categorie formation : {{ $formation->category_formation->name}}</p>
                                        </div>
                                        <div class="col-6">
                                            <a href="#">
                                                <img class="img-responsive" height="250px" width="450px" src="{{ asset('storage/'.$formation->image) }}" alt="Thumb">
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{ route('admin.formations.edit', $formation) }}" class="card-link">Modifier</a>
                                    <a href="{{ route('admin.formations') }}" class="card-link">Retour</a>
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-6">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-header">--}}
{{--                                    <h4 class="card-title">PHOTO</h4>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="card-text"></p>--}}
{{--                                    <a href="#" class="card-link">Card link</a>--}}
{{--                                    <a href="#" class="card-link">Another link</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </section>
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    <a href="templateshub.net">LEADERSOF - TOMORROW</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>


@endsection
